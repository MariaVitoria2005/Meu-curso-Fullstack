from django.shortcuts import render
from .models import *

def VerProdutos(request):
    produtos_lista = Loja.objects.all()
    return render(request, 'index.html', {'produtos': produtos_lista})