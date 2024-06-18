from django.shortcuts import render
from .views import Produto

def VerProdutos(request):
    produtos_lista = Produto.objects.all()
    return render(request, "lista-produtos.html", {"produtos": produtos_lista})

def DetalhesProduto(request, id_produto):
    busca = Produto.objects.get(id=id_produto)
    return render(request, "detalhes_produto.html", {"produto": busca})