from django.shortcuts import render
from django.http import HttpResponse

def cerveja(request):
    return HttpResponse("O melhor brinde é aquele feito com boa companhia e uma bebida gelada.")

    