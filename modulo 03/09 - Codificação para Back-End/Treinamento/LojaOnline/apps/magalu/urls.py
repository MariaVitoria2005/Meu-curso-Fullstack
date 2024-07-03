from django.urls import path
from .views import *

urlpatterns = [
    path("", LinkIndex, name="pagina_inicial"),
    path("cadastro", CriarCadastro, name="pagina_cadastro"),
    path("categoria", LinkCategoria, name="pagina_categoria"),
    path("produto", VerProdutos, name="pagina_inicial"),
    path("ver_produto/<int:id_produto>/", DetalhesProduto, name="detalhes_produto")
]