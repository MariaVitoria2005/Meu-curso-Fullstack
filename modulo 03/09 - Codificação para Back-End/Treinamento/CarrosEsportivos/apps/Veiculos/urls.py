from django.urls import path
from .views import *

urlpatterns = [
    path("", LinkIndex, name="pagina_inicial"),
    path('automoveis', VerProdutos, name ="pagina_produtos"),
    path("cadastro", LinkCadastro, name="pagina_cadastro"),
    path("pagamento", LinkPagamento, name = "pagina_pagamento"),
    path("Criar", CriarCadastro, name="index.html"),
    path("ver_produto/<int:id_produto>/", DetalhesCarro, name="detalhes_produto")
]