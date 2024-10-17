<?php

namespace App\Http\Controllers;

use App\Models\Postagem;
use Illuminate\Http\Request;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postagem = Postagem::all();
        

        return view('Postagem.index', ['postagems' => $postagem]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Postagem $postagem)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $postagem = Postagem::find($id);
        $postagem->update($request->all());

        return redirect()->route('postagem.index')->with('success', 'postagem atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $postagem = Postagem::find($id);
        $postagem->delete();

        return redirect()->route('postagem.index')->with('success', 'postagem excluído com sucesso.');
    }
}
