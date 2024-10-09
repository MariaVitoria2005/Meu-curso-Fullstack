<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();

        // return response()->json([
        //     'status' => true,
        //     'produtos' => $produtos
        // ]);
        return view('Produtos.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $produto = Produto::create($request->all());

        // return response()->json([
        //     'status' => true,
        //     'message' => "Produto Criando com Sucesso",
        //     'produto' => $produto
        // ], 200);
        $request->validate([
            'nome' => 'required',
            'valor' => 'required',
            'descricao' => 'required',
        ]);

        produto::create($request->all());

        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $produto = Produto::find($id);

       return view('Produtos.editar', ['produtos' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());

        return redirect()->route('produto.index')->with('success', 'Produto atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->route('produto.index')->with('success', 'Produto excluído com sucesso.');
    }
}
