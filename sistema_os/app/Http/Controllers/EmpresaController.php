<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $empresas = Empresa::all();

        // return response()->json([
        //     'status' => true,
        //     'empresas' => $empresas
        // ]);
        $empresas = Empresa::all();
      
        return view('Empresas.index', ['empresas' => $empresas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $empresa = Empresa::create($request->all());

        // return response()->json([
        //     'status' => true,
        //     'message' => "Empresa Criado com Sucesso!",
        //     'empresas' => $empresa
        // ]);
        $request->validate([
            'razao_social' => 'required',
            'cnpj' => 'required',
            'endereco' => 'required',
            'telefone' => 'required',
            'cep' => 'required'
        ]);
        Empresa::create($request->all());
        return redirect()->route('empresa.index')->with('success', 'Empresa crianda com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);

        return view('Empresas.editar', ['empresas' => $empresa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $empresa = Empresa::find($id);
        $empresa->update($request->all());

        return redirect()->route('empresa.index')->with('success', 'Empresa atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();

        return redirect()->route('empresa.index')->with('success', 'Empresa excluído com sucesso.');
    }
}
