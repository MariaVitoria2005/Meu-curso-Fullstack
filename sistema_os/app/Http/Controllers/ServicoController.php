<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $servicos = Servico::with('empresa','catgoria')->get();

        // return response()->json([
        //     'status' => true,
        //     'servicos' => $servicos
        // ]);
        $servicos = Servico::all();

        return view('Serviços.index', ['servicos' => $servicos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servico.tipo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $servico = Servico::create($request->all());

        // return response()->json([
        //     'status' => true,
        //     'message' => "Serviço Criado com sucesso!",
        //     'servico' => $servico
        // ], 200);
        $request->validate([
            'tipo' => 'required',
            'valor' => 'required',
            'empresa_id' => 'required',
            'categoria_id' => 'required'
        ]);

        Servico::create($request->all());

        return redirect()->route('servico.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servico $servico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $servico = Servico::find($id);

       return view('Serviços.editar', ['servico' => $servico]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $servico = Servico::find($id);
        $servico->update($request->all());

        return redirect()->route('servico.index')->with('success', 'Serviço atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $servico = Servico::find($id);
        $servico->delete();

        return redirect()->route('servico.index')->with('success', 'Serviço excluído com sucesso.');
    }
}
