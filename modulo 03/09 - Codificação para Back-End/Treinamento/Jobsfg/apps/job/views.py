from django.shortcuts import render, redirect
from .forms import *
from .models import *

def verIndex(resquest):
    busca_vagas= Vaga.objects.all()
    return render(resquest,"index.html", {"vagas": busca_vagas})

def CriarVaga(resquest):
    if resquest.method == "POST":
        nova_vaga= FormularioVaga(resquest.POST)
        if nova_vaga.is_valid():
            nova_vaga.save()
            return redirect("pg.inicial")
    else:
        nova_vaga= FormularioVaga
    return render(resquest,"criar-vaga.html",{"formulario":nova_vaga})

def CriarEmpressa(resquest):
    if resquest.method == "POST":
        nova_Empressa= FormularioVaga(resquest.POST, resquest.FILES)
        if nova_Empressa.is_valid():
            nova_Empressa.save()
            return redirect("pg_criar_vaga")
    else:
        nova_Empressa= FormularioVaga
    return render(resquest,"criar-empresa.html",{"formulario":nova_Empressa})

def VerDetalhes(resquest, id_vaga):
    busca = Vaga.objects.get(id=id_vaga)
    return render(resquest, "detalhes-vaga.html", {"vaga":busca})
