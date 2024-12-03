<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Autor;

class LivroController extends Controller

{

    public function index()

    {

        $livros = Livro::get();
        return view('livros.index', compact('livros'));
    }


    public function cadastro($id = null)

    {
        $resultado = null;
        if ($id) {
            $resultado = Livro::find($id);
        }

        $autores = Autor::get();

        return view('livros.cadastro', compact('resultado','autores'));
    }

    public function salvar(Request $request)

    {
        if ($request->id) {
            $u = Livro::find($request->id);
        } else {
            $u = new Livro;
        }

        $u->titulo = $request->titulo;
        $u->id_autor = $request->id_autor;
        $u->save();

        return redirect('/livros');
    }


    public function remover($id)

    {
        $r = Livro::find($id);
        $r->delete();

        return redirect('/livros');
    }
}
