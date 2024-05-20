from django.shortcuts import render
from .models import Carro, Documento

def lista_carros(request):
    carros = Carro.objects.all()
    return render(request, 'lista_carros.html', {'carros': carros})

def lista_documentos(request):
    documentos = Documento.objects.all()
    return render(request, 'lista_documentos.html', {'documentos': documentos})