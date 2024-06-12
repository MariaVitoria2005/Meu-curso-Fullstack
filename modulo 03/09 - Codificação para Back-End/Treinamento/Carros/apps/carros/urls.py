from django.urls import path
from .views import *

urlpatterns = [
    path("", LinkInicial, name="pagina_inicial"),
    path('automoveis', VerProdutos, name ="pagina_produtos"),
	path("cadastro", LinkCadastro, name="pagina_cadastro"),
    
]
