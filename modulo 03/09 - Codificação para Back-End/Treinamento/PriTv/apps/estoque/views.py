from django.shortcuts import render
from django.http import HttpResponse

def saudacao(request):
    return HttpResponse("o estoque está vazio")