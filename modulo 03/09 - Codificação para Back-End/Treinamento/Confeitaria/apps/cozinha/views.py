from django.shortcuts import render, redirect
from .models import *

def VerBolos(request):
    bolos_lista = Bolo.objects.all()
    return render(request, "lista-bolos.html", {"bolos": bolos_lista})

def ExcluirBolo(request, id_bolo):
    busca_bolo = Bolo.objects.get(id=id_bolo)
    if request.method == "POST":
        busca_bolo.delete()
        return redirect("pg_bolos")
    return render(request, "conf_exclusao_bolo.html", {"bolo": busca_bolo})