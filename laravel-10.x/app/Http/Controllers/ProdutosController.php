<?php
namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function listar()
    {
        $produtos = Produtos::get();
       // dd($produtos);


        return view('produtos',compact('produtos'));

    }

    public function cadastrar(){

        $prod = new Produtos;
        $prod->nome = "Camisa";
        $prod->quantidade = 30;
        $prod->status = 1;
        $prod->save();

        echo "Produto cadastrado com sucesso!";
    }


    public function deletar($id){
        $prod = Produtos::find($id);
        $prod->delete();

        return redirect()->back
    }






    public function cadastro()
    {
        return view('produtos.create');
    }

    public function salvar(Request $request)
    {
    }

    public function remover(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto deletado com sucesso!');
    }
}
