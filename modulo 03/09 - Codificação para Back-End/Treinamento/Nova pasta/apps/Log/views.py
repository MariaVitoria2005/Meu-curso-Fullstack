from django.shortcuts import render
from django.http import HttpResponse

def saudacao(resquest):
    return HttpResponse("Vapo!")

def saudacao(resquet):
    return render(resquet, "ola.html")

def VerProdutos(request):
    produtos_lista = produtos.objects.all()
    return render(request, 'index.html', {'produtos': produtos_lista})