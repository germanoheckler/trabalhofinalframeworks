<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Produto;

class VendaController extends Controller
{
    public function index(){
        //$clientes = Cliente::with(['cliente'])->get();
        //return $clientes;

        $vendas = Venda::all();
        return view('venda.listar')->with('vendas',$vendas);
    }
    public function editar($id){
        $venda = Venda::find($id);
        return view('venda.editar')->with('venda', $venda);
    }
    public function criar(){
        $produtos = Produto::all();
        $clientes = Cliente::all();
        return view('venda.criar')->with('produtos', $produtos)->with('clientes', $clientes);
    }
    public function salvar(Request $request){
        $venda = new Venda();
        $pedido = new Pedido();
        $venda->data = $request->data;
        $venda->valor_total = 0;
        $venda->cliente_id = $request->cliente_id;
        $venda->save();
        $total=0;

        for($indice=0;$indice<count($request->produtos);$indice++){
            $produto_id=$request->produtos[$indice];
            $quantidade=$request->quantidades[$indice];
            $pedido=new Pedido();
            $pedido->produto_id=$produto_id;
            $pedido->quantidade=$quantidade;
            $pedido->venda_id=$venda->id;
            $pedido->save();
            $produto=Produto::find($produto_id);
            $total=$total+($pedido->quantidade*$produto->preco);
        }
        $venda=Venda::find($venda->id);
        $venda->valor_total=$total;
        $venda->save();


        return redirect()->route('venda.listar');
    }
    public function atualizar(Request $request, $id){
        $venda = Venda::find($id);
        $venda->data = $request->data;
        $venda->valor_total = $request->valor_total;
        $venda->save();
        return redirect()->route('venda.listar');
    }
    public function mostrar($id){
        //return Venda::find($id);
        return redirect()->route('venda.listar');
    }
    public function deletar($id){
        $venda=Venda::find($id);
        $venda->delete();
        return redirect()->route('venda.listar');
    }
}
