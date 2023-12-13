<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(){
        //$clientes = Cliente::with(['cliente'])->get();
        //return $clientes;

        $produtos = Produto::all();
        return view('produto.listar')->with('produtos',$produtos);
    }
    public function editar($id){
        $produto = Produto::find($id);
        return view('produto.atualizar')->with('produto', $produto);
    }
    public function criar(){
        return view('produto.criar');
    }
    public function salvar(Request $request){
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->save();

        return redirect()->route('produto.listar');
    }
    public function atualizar(Request $request, $id){
        $produto = Produto::find($id);
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->save();
        return redirect()->route('produto.listar');
    }
    public function mostrar($id){
        //return Produto::find($id);
        return redirect()->route('produto.listar');
    }
    public function deletar($id){
        $produto=Produto::find($id);
        $produto->delete();
        return redirect()->route('produto.listar');
    }
}
