<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();

        return view('Categoria.index', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria.tipo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required'
        ]);

        categoria::create($request->all());

        return redirect()->route('categoria.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return view("Categorias.show", compact("categoria"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $categoria = Categoria::find($id);

        return view('Categorias.editar', ['categorias' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->update($request->all());

        return redirect()->route('categoria.index')->with('success', 'categoria atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->route('categorias.index')->with('success', 'Categoria excluído com sucesso.');
    }
}
