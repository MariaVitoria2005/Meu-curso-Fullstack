from django.shortcuts import render
from django.http import HttpResponse

def saudacao(request):
    return HttpResponse("Potência e elegância fundem-se no ronco do motor, enquanto a estrada se rende à sua passagem.")