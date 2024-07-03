from django.shortcuts import render, redirect
from .models import *
from .forms import *

def LinkIndex(request):
    return render(request, "index.html")

def LinkCadastro(request):
    cadastro_lista = Cadastro.objects.all()
    return render(request, "cadastro.html",{'cadastros':cadastro_lista})

def LinkCategoria(request):
    cadastro_lista = Cadastro.objects.all()
    return render(request, "categoria.html",{'categorias':cadastro_lista})

def VerProdutos(request):
    produtos_lista = Produto.objects.all()
    return render(request, "produtos.html", {"produtos": produtos_lista})

def DetalhesProduto(request, id_produto):
    busca = Produto.objects.get(id=id_produto)
    return render(request, "detalhes.html", {"produto": busca})

def CriarCadastro(request):
    if request.method == "POST":
        novo_cadastro = FormularioCadastro(request.POST)
        if novo_cadastro.is_valid():
            novo_cadastro.save()
            return redirect("pagina_cadastro")
    else:
        novo_cadastro = FormularioCadastro()
    return render(request, "cadastro.html", {"formulario": novo_cadastro})
