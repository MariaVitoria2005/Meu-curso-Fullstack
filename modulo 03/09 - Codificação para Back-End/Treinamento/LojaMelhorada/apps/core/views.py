from django.shortcuts import render, redirect
from .models import *
from .forms import *

def ListaGeral(request):
    busca_abencoados = abencoado.objects.all()
    busca_tacas = Taca.objects.all()
    return render(request, "index.html", {"abencoados":busca_abencoados, "tacas": busca_tacas})

def CriarAbencoado(request):
    if request.method == "POST":
        novo_Abencoado = Formularioabencoado(request.POST)
        if novo_Abencoado.is_valid():
            novo_Abencoado.save()
            return redirect("pg_inicial")
    else:
        novo_Abencoado = Formularioabencoado()
    return render(request, "new-abencoados.html", {"formulario": novo_Abencoado})