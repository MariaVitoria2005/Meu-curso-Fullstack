from django.urls import path
from .views import *

urlpatterns = [
    path("", LinkIndex, name="pagina_inicial"),
    path('automoveis', VerProdutos, name ="pagina_produtos"),
    path("cadastro", CriarCadastro, name="pagina_cadastro"),
    path("pagamento", LinkPagamento, name = "pagina_pagamento"),
    path("Criar", CriarCadastro, name="oiii"),
    path("ver_produto/<int:id_produto>/", DetalhesCarro, name="detalhes_produto"),
    path("x",CadastroCarros, name = "cadastro-carro"),
    path("edicao", EdicaoCarro, name="pagina_inicial"),
]