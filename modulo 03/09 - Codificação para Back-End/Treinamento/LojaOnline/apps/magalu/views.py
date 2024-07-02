from django.shortcuts import render
from .models import *
from .forms import *

def LinkIndex(request):
    return render(request, "index.html")

def LinkCadastro(request):
    cadastro_lista = cadastro.objects.all()
    return render(request, "cadastro.html",{'cadastros':cadastro_lista})

def CriarCadastro(request):
    busca_Cadastro = cadastro.objects.all()
    if request.method == "POST":
        novo_Cadastro = Formulariocadastro(request.POST)
        if novo_Cadastro.is_valid(): 
            novo_Cadastro.save()
            novo_Cadastro =  Formulariocadastro()
    else:
        novo_Cadastro =  Formulariocadastro()
    return render(request, "cadastro.html", {"formulario": novo_Cadastro, "cadastros": busca_Cadastro})
