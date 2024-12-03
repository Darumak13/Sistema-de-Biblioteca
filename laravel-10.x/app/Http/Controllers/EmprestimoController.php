<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emprestimo;
use App\Models\Livro;
use App\Models\Usuario;


class EmprestimoController extends Controller

{
    
    public function index()

    {

        $emprestimos = Emprestimo::get();
        return view('emprestimos.index', compact('emprestimos'));
    }

    public function indexadm()

    {
        return view('index');
    }

    public function cadastro($id=null)

    {
        $resultado = null;
        if($id){
            $resultado = Emprestimo::find($id);
        }
        
        $usuarios = Usuario::get();
        $livros = Livro::get();
        return view('emprestimos.cadastro',compact('resultado','usuarios','livros'));
    }

    public function salvar(Request $request)

    {
        if($request->id){
            $u = Emprestimo::find($request->id);
        }else{
            $u = new Emprestimo;
        }

        $u->id_usuario = $request->id_usuario;
        $u->id_livro = $request->id_livro;
        $u->data_emprestimo = $request->data_emprestimo;
        $u->data_devolucao = $request->data_devolucao;
        
        $u->save();

        return redirect('/emprestimos');
    }


    public function remover($id)

    {
        $r = Emprestimo::find($id);
        $r->delete();

        return redirect('/emprestimos');

    }
}
