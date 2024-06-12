from django.shortcuts import render
from .models import *

def LinkInicial(request):
    return render(request, "inicial.html")

def VerProdutos(request):
    produtos_lista = Carro.objects.all()
    return render(request, 'automovel.html', {'produtos': produtos_lista})

def LinkCadastro(request):
    cadastro_lista = Cadastro.objects.all()
    return render(request, "cadastro.html",{'cadastros':cadastro_lista})

def Linkcategoria(request):
    categoria_lista = Categoria.objects.all()
    return render(request, "categoria.html",{'categorias':categoria_lista})