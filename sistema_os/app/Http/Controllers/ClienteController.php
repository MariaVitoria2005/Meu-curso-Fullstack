<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Validator;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $clientes = Cliente::all();

        // return response()->json([
        //     'status' => true,
        //     'clientes' => $clientes
        // ]);
        $clientes = Cliente::all();

        return view('Clientes.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            
        
        // $foto_camimho = $request->file('foto')->store('fotos', 'public');
  
        // Criar o cliente com o caminho da foto
        //   $cliente = Cliente::create([
        //       'nome' => $request->nome,
        //       'data_nascimento' => $request->data_nascimento,
        //       'foto' => $foto_camimho,
        //       'status' => 1
        //   ]);
  
        // return redirect()->route('cliente.index');
        $validator = validator::make($request->all(),[
            'nome' =>'required|string|max:225' ,
            'data_nascimento' => 'required|date',
            'status' => 'required|boolean'
        ]);

        if ($validator->fails()){
            return redirect()->route('cliente.index')->with('erros', $validator->errors());
        }
        $cliente = new Cliente();
        $cliente -> nome = $request->input('nome');
        $cliente -> data_nascimento = $request->input('data_nascimento');
        $cliente -> status = $request->input('status');
        

        if ($request->hasFile('foto')){
            $path = $request->file('foto')->store('Clientes','public');
            $cliente->foto = $path;
        }
        $cliente->save();

        return redirect()->route('cliente.index')->with('success', 'Cliente cadastrado com sucesso!');
        
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);

        if ($cliente->status == 0 ){
            return "Usuario ativo!";
        }
        else{
            return "Usuario inativo!";
        }
        return view('Clientes.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);

        return view('Clientes.editar', ['clientes' => $cliente]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            'nome' =>'string|max:225' ,
            'data_nascimento' => 'date',
            'status' => 'boolean'
        ]);

        $cliente = Cliente::find($id);
        $foto_caminho = $request->file('foto')->store('fotos', 'public');
        // $cliente->update($request->all());

        $cliente -> nome = $request->nome;
        $cliente -> data_nascimento = $request->data_nascimento;
        $cliente -> foto = $foto_caminho;
        $cliente -> status = $request->status;
        $cliente ->save();

        return redirect()->route('cliente.index')->with('success', 'cliente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->route('cliente.index')->with('success', 'cliente excluído com sucesso.');
    }

    public function atualizarStatus(Request $request,$id){
        $cliente = Cliente::find($id);
        $cliente->status = true;
        $cliente->save();

        return redirect()->route('cliente.index');
    }
}