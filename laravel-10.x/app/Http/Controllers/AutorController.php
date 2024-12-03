<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller

{
    public function index()

    {

        $autores = Autor::get();
        return view('autores.index', compact('autores'));
    }

    public function indexadm()

    {
        return view('resoucers.index');
    }

    public function cadastro($id=null)

    {
        $resultado = null;
        if($id){
            $resultado = Autor::find($id);
        }
        
        return view('autores.cadastro',compact('resultado'));
    }

    public function salvar(Request $request)

    {
        if($request->id){
            $u = Autor::find($request->id);
        }else{
            $u = new Autor;
        }

        $u->nome = $request->nome;
        $u->save();

        return redirect('/autores');
    }


    public function remover($id)

    {
        $r = Autor::find($id);
        $r->delete();

        return redirect('/autores');

    }
}
