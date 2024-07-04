from django.shortcuts import render, redirect
from .forms import *
from .models import *

def verIndex(request):
    busca_vagas= Vaga.objects.all()
    return render(request,"index.html", {"vagas": busca_vagas})

def CriarVaga(request):
    if request.method == "POST":
        nova_vaga= FormularioVaga(request.POST,request.FILES)
        if nova_vaga.is_valid():
            nova_vaga.save()
            return redirect("pg_inicial")
    else:
        nova_vaga= FormularioVaga()
    return render(request,"criar-vaga.html",{"formulario":nova_vaga})

def CriarEmpresa(request):
    if request.method == "POST":
        nova_Empressa= FormularioEmpresa(request.POST)
        if nova_Empressa.is_valid():
            nova_Empressa.save()
            return redirect("pg_criar_vaga")
    else:
        nova_Empressa= FormularioEmpresa()
    return render(request,"criar-empresa.html",{"formulario":nova_Empressa})

def VerDetalhes(request, id_vaga):
    busca = Vaga.objects.get(id=id_vaga)
    return render(request, "detalhes-vaga.html", {"vaga":busca})
