<?php

namespace App\Http\Controllers;

use App\Models\OrdemServico;
use App\Models\Servico;
use App\Models\Empresa;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Validator;

class OrdemServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordemservicos = OrdemServico::with('servico','cliente', 'empresa')->get();
        $servicos = Servico::all();
        $empresas = Empresa::all();
        $clientes = Cliente::all();

        return view('ordemservico.index', compact('servicos','empresas','clientes','ordemservicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ordemservico.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        OrdemServico::create($request->all());

        // $request->validate([
        //     'cliente_id' => 'required',
        //     'servico_id' => 'required',
        //     'data' => 'required',
        //     'data_finalizada' => 'required',
        //     'status' => 'required'
        // ]);

        // OrdemServico::create($request->all());

        return redirect()->route('ordemservico.index')->with("success", 'Ordem Serviço criando com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrdemServico $ordemServico, $id)
    {
        Ordemservico::with('cliente','servico','empresa')->find($id);
        return view('ordemservico.show',compact('ordemservico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ordemservicos = OrdemServico::find($id);
        if(!$ordemservicos){
            return redirect()->route('ordemservico.index')->with('erro', 'Ordem de serviço não encontrado!');
        }
        $empresas = Empresa::all();
        $clientes = Cliente::all();
        $servicos = Servico::all();
    
        
       return view('ordemservico.editar', compact('servicos','empresas','clientes','ordemservicos'));
       
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ordemservico = OrdemServico::findOrFail($id);
        $ordemservico->update($request->all());

        // return redirect()->route('ordemServico.index')->with('success', 'Ordem Servico atualizado com sucesso.');
        $request->validate([
            'servico_id' => 'required|exists:servicos,id',
            'cliente_id' => 'required|exists:clientes,id',
            'empresa_id' => 'required|exists:empresas,id',
            'data_inicial' => 'required|date',
            'data_final' => 'required|date',
            'valor' => 'required|numeric',
            'status' => 'required|boolean',
        ]);
        
        $ordemservicos = OrdemServico::find($id);

        if (!$ordemservicos) {
            return redirect()->back()->with('erro', 'Ordem de Serviço não encontrado!');
        }
        $ordemservicos->servico_id = $request->input('servico_id');
        $ordemservicos->cliente_id = $request->input('cliente_id');
        $ordemservicos->empresa_id = $request->input('empresa_id');
        $ordemservicos->data_inicial = $request->input('data_inicial');
        $ordemservicos->data_final = $request->input('data_final');
        $ordemservicos->valor = $request->input('valor');
        $ordemservicos->status = $request->input('status');
    
        $ordemservicos->save();
    
        return redirect()->route('ordemservico.index')->with('success', 'Ordem de Serviço Atualizada com sucesso!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ordemServico = OrdemServico::find($id);
        $ordemServico->delete();

        return redirect()->route('ordemservico.index')->with('success', 'Ordem Servico excluído com sucesso.');
    }
}
