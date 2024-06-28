from django.shortcuts import render
from .models import *
from .forms import *

def CriaAbencoado(request):
    busca_abencoados = abencoado.objects.all()
    return render(request, "abencoados.html", {"abencoados":busca_abencoados})
    