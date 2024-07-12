from django.shortcuts import render, redirect
from .forms import *
from .models import *

def VerIndex(request):
    busca_vagas = Vaga.objects.all()
    return render(request, "index.html", {"vagas": busca_vagas})

def CriarVaga(request):
    if request.method == "POST":
        nova_vaga = FormularioVaga(request.POST, request.FILES)
        if nova_vaga.is_valid():
            nova_vaga.save()
            return redirect("pg_inicial")
    else:
        nova_vaga = FormularioVaga()
    return render(request, "criar-vaga.html", {"formulario": nova_vaga})



def CriarCliente(request):
    busca_clientes = Cliente.objects.all()
    
    if request.method == "GET":
        novo_cliente = FormularioCliente()
    else:
        cliente_preenchido = FormularioCliente(request.POST, request.FILES)
        if cliente_preenchido.is_valid():
            cliente_preenchido.save()
            return redirect("pg_criar_cliente")
    return render(request, "form-cliente.html", {"form_cliente": novo_cliente, "clientes": busca_clientes})

def EditarCliente(request, id_cliente):
    busca_cliente = Cliente.objects.get(id=id_cliente)
    if request.method == "GET":
        editar_cliente = FormularioCliente(instance=busca_cliente)
    else:
        cliente_editado = FormularioCliente(request.POST, instance=busca_cliente)
        if cliente_editado.is_valid():
            cliente_editado.save()
            return redirect("pg_criar_cliente")
    return render(request, "form-cliente.html", {"form_cliente": editar_cliente})

def ExcluirCliente(request, id_cliente):
    busca_cliente = Cliente.objects.get(id=id_cliente)
    if request.method == "POST":
        busca_cliente.delete()
        return redirect("pg_criar_cliente")
    titulo_objeto = busca_cliente.nome
    return render(request, "conf-excluir.html", {"valor": titulo_objeto})

def CriarEmpresa(request):
    busca_empresas = Empresa.objects.all()
    
    if request.method == "GET":
        nova_empresa = FormularioEmpresa()
    else:
        empresa_preenchida = FormularioEmpresa(request.POST)
        if empresa_preenchida.is_valid():
            empresa_preenchida.save()
            return redirect("pg_criar_empresa")
    return render(request, "form-empresa.html", {"form_empresa": nova_empresa, "empresas": busca_empresas})

def EditarEmpresa(request, id_empresa):
    busca_empresa = Empresa.objects.get(id=id_empresa)
    if request.method == "GET":
        editar_empresa = FormularioEmpresa(instance=busca_empresa)
    else:
        empresa_editada = FormularioEmpresa(request.POST, instance=busca_empresa)
        if empresa_editada.is_valid():
            empresa_editada.save()
            return redirect("pg_criar_empresa")
    return render(request, "form-empresa.html", {"form_empresa": editar_empresa})

def ExcluirEmpresa(request, id_empresa):
    busca_empresa = Empresa.objects.get(id=id_empresa)
    if request.method == "POST":
        busca_empresa.delete()
        return redirect("pg_criar_empresa")
    titulo_objeto = busca_empresa.razao_social
    return render(request, "conf-excluir.html", {"valor": titulo_objeto})

def CriarVaga(request):
    if request.method == "POST":
        nova_vaga= FormularioVaga(request.POST,request.FILES)
        if nova_vaga.is_valid():
            nova_vaga.save()
            return redirect("pg_inicial")
    else:
        nova_vaga= FormularioVaga()
    return render(request,"criar-vaga.html",{"formulario":nova_vaga})