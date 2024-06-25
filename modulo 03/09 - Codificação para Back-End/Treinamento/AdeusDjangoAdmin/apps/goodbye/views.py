from django.shortcuts import render
from .models import *
from .forms import *

def CriarCelular(request):
    busca_Celulares = Celular.objects.all()
    if request.method == "POST":
        novo_Celular = FormularioCelular(request.POST)
        novo_Celular.save()
        novo_Celular =  FormularioCelular()
    else:
        novo_Celular =  FormularioCelular()
    return render(request, "pagina-celulares.html", {"formulario": novo_Celular, "celulares": busca_Celulares})