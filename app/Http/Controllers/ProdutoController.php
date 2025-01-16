<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutosRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produto as ProdutoModel;

class ProdutoController extends Controller
{
    public function lista()
    {   
        // $produtos = DB::select("SELECT * FROM produtos");
        $produtos = ProdutoModel::all();

        return view('produtos/listagem')->withProdutos($produtos);   
    }

    public function mostra($id){
        $produto = ProdutoModel::find($id);

        if (empty($produto)) {
            return "Esse produto não existe.";
        }

        return view('produtos/detalhes')->with('p', $produto);
    }

    public function novo(){
        return view('produtos/formulario');
    }

    public function adiciona(ProdutosRequest $request){
        ProdutoModel::create($request->all());

        return redirect()->action([ProdutoController::class, 'lista'])
            ->withInput($request->only('nome'));
    }

    public function listaJson()
    {
        // $produtos = DB::select('select * from produtos');
        $produtos = ProdutoModel::all();
        return response()->json($produtos);
    }

    public function remove($id){
        $produto = ProdutoModel::find($id);
        $produto->delete();
        return redirect()->action([ProdutoController::class, 'lista']);
    }

    public function altera($id){
        $produto = ProdutoModel::findOrFail( $id );
        return view('produtos/atualiza', compact('produto'));
    }

    public function atualiza(ProdutosRequest $request, $id){

        $produto = ProdutoModel::findOrFail($id);
        $produto->update($request->all()); // Atualiza o produto com os dados do formulário

        return redirect()->route('produtos.lista')->with('success', 'Produto atualizado com sucesso!');
    }
}
