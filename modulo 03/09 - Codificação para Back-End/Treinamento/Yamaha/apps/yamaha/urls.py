from django.urls import path
from .views import *

urlpatterns = [
    path("", LinkInicial, name="pagina_inicial"),
    path('Moto', VerMotos, name ="pagina_motos"),
	path("cadastro", LinkCadastro, name="pagina_cadastro"),
    path("pagamento", LinkPagamento, name = "pagina_pagamento"),
]