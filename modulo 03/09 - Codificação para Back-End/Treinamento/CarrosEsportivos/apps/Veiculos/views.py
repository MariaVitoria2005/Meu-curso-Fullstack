from django.shortcuts import render
from .models import *
from .forms import *

def LinkIndex(request):
    return render(request, "index.html")

def VerProdutos(request):
    produtos_lista = Carro.objects.all()
    return render(request, 'automovel.html', {'produtos': produtos_lista})

def DetalhesCarro(request, id_produto):
    busca = Carro.objects.get(id=id_produto)
    return render(request, "detalhes.html", {"produto": busca})

def LinkCadastro(request):
    cadastro_lista = Cadastro.objects.all()
    return render(request, "cadastro.html",{'cadastros':cadastro_lista})

def LinkPagamento(request):
    pagamento_lista = Pagamento.objects.all()
    return render(request,"pagamento.html",{'pagamentos': pagamento_lista} )

def CriarCadastro(request):
    busca_Cadastro = Cadastro.objects.all()
    if request.method == "POST":
        novo_Cadastro = FormularioCadastro(request.POST)
        novo_Cadastro.save()
        novo_Cadastro =  FormularioCadastro()
    else:
        novo_Cadastro =  FormularioCadastro()
    return render(request, "cadastro.html", {"formulario": novo_Cadastro, "cadastros": busca_Cadastro})