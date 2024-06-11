from django.shortcuts import render
from .models import Carro

def VerProdutos(request):
    produtos_lista = Carro.objects.all()
    return render(request, 'index.html', {'produtos': produtos_lista})