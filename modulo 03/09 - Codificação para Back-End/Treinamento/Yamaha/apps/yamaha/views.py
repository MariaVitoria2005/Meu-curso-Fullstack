from django.shortcuts import render
from .models import *

def LinkInicial(request):
    return render(request, "inicial.html")

def VerMotos(request):
    motos_lista = Moto.objects.all()
    return render(request, 'motos.html', {'moto': motos_lista})

def LinkCadastro(request):
    cadastro_lista = Cadastro.objects.all()
    return render(request, "cadastros.html",{'cadastro':cadastro_lista})

def LinkPagamento(request):
    pagamento_lista = Pagamento.objects.all()
    return render(request,"pagamentos.html",{'pagamento': pagamento_lista} )
