from django.shortcuts import render, redirect
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
    return render(request, "pagamento.html",{'pagamentos': pagamento_lista})

def CriarCadastro(request):
    busca_Cadastro = Cadastro.objects.all()
    if request.method == "POST":
        novo_Cadastro = FormularioCadastro(request.POST)
        if novo_Cadastro.is_valid(): 
            novo_Cadastro.save()
            novo_Cadastro =  FormularioCadastro()
    else:
        novo_Cadastro =  FormularioCadastro()
    return render(request, "cadastro.html", {"formulario": novo_Cadastro, "cadastros": busca_Cadastro})

def CadastroCarros(request):
    busca_Cadastro = Carro.objects.all()
    if request.method == "POST":
        novo_Cadastro = FormularioCarro(request.POST,request.FILES)
        if novo_Cadastro.is_valid(): 
            novo_Cadastro.save()
            novo_Cadastro =  FormularioCarro()
    else:
        novo_Cadastro =  FormularioCarro()
    return render(request, "cadastro-carro.html", {"formulario": novo_Cadastro, "carros": busca_Cadastro})

def EdicaoCarro(request):
    carro_lista = Carro.objects.all()
    return render(request, "editar-carro.html", {"produto": carro_lista})

def CarroEditado(request, id_carro):
    busca_carro = Carro.objects.get(id=id_carro)
    if request.method == "POST":
        carro_editado = FormularioCarro(request.POST, instance=carro_editado)
        if carro_editado.is_valid():
            carro_editado.save()
            return redirect('pagina_inicial')
    else:
        carro_editado = FormularioCarro(instance=busca_carro)
    return render(request, "editar-carro.html", {"formulario": carro_editado})