from django.shortcuts import render
from .models import item

def VerProdutos(request):
    produtos_lista = item.objects.all()
    return render(request, 'index.html', {'produto': produtos_lista})