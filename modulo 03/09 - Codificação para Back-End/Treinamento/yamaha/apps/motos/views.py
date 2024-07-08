from django.shortcuts import render, redirect
from .models import *
from .forms import *


def CriarMoto(request):
    busca_moto = Moto.objects.all()
    if request.method == "POST":
        novo_modelo = FormularioMoto(request.POST, request.FILES)
        if novo_modelo.is_valid():
            novo_modelo.save()
            return redirect("pagina_inicial")
    else:
        novo_modelo = FormularioMoto()
    return render(request, "pagina_motos.html", {"formulario": novo_modelo, "motos": busca_moto})