from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.
def saudacao(request):
    return HttpResponse("Olá mbom dia !!!")