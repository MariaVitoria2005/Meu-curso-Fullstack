from django.shortcuts import render, redirect
from .models import *

def VerIndex(request):
    busca_os = OrdemServico.objects.all()
    return render(request, "index.html", {"ordemservico": busca_os})
