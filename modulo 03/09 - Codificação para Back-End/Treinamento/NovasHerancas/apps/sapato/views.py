from django.shortcuts import render

def ViewIndex(resquet):
    return render(resquet,"index.html")

def ViewLogin(resquet):
    return render(resquet,"login.html")

def ViewProdutos(resquet):
    return render(resquet,"produtos.html")