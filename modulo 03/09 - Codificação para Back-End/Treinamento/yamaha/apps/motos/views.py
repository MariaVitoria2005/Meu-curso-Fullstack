from django.shortcuts import render, redirect
from .models import *
from .forms import * 

def VerIndex(request):
    busca_os = OrdemServico.objects.all()
    return render(request, "index.html", {"ordemservicos": busca_os})

def CriarCliente(request):
    busca_cliente= Cliente.objects.all()

    if request.method == "GET":
        novo_cliente = FormularioCliente()
    else:
        cliente_preenchido = FormularioCliente(request.POST,request.FILES)
        if cliente_preenchido.is_valid():
            cliente_preenchido.save()
            return redirect("pg_inicial")
    return render(request, "form-cliente.html", {"form-cliente": novo_cliente, "clientes": busca_cliente})

def CriarEmpresa(request):
    busca_empresa= Cliente.objects.all()

    if request.method == "GET":
        novo_empresa = FormularioEmpresa()
    else:
        empresa_preenchido = FormularioEmpresa(request.POST,)
        if empresa_preenchido.is_valid():
            empresa_preenchido.save()
            return redirect("pg_inicial")
    return render(request, "form-empresa.html", {"form-empresa": novo_empresa, "empresas": busca_empresa})

def CriarServico(request):
    busca_servico= Servico.objects.all()

    if request.method == "GET":
        novo_servico = FormularioEmpresa()
    else:
        servico_preenchido = FormularioEmpresa(request.POST,)
        if servico_preenchido.is_valid():
            servico_preenchido.save()
            return redirect("pg_inicial")
    return render(request, "form-empresa.html", {"form-servico": novo_servico, "servicos": busca_servico})

def Criarcategoria(request):
    busca_categorias= Servico.objects.all()

    if request.method == "GET":
        novo_categoria = FormularioEmpresa()
    else:
        categoria_preenchido = FormularioEmpresa(request.POST,)
        if categoria_preenchido.is_valid():
            categoria_preenchido.save()
            return redirect("pg_criar_servico")
    return render(request, "form-categoria.html", {"form-categoria": novo_categoria, "categorias": busca_categorias})

def CriarOrdemServico(request):

    if request.method == "GET":
        novo_ordemservico = FormularioEmpresa()
    else:
        ordemservico_preenchido = FormularioEmpresa(request.POST,)
        if ordemservico_preenchido.is_valid():
            ordemservico_preenchido.save()
            return redirect("pg_inicial")
    return render(request, "form-ordemservico.html", {"form-ordemservico": novo_ordemservico})