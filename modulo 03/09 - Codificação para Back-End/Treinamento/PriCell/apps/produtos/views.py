from django.shortcuts import render
from .models import produto

def VerProdutos(request):
    produtos_lista = produto.objects.all()
    print(produtos_lista)
    return render(request,'index.html',{'produtos':produtos_lista})

def LinkInicial(request):
    return render(request, "index.html")

def LinkCadastro(request):
    return render(request, "cadastro.html")