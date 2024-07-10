from django.urls import path
from .views import *

urlpatterns = [
    path("", VerIndex, name="pg_inicial"),
    path("criar-cliente", CriarCliente, name= "pg_cliente"),
    path("criar-empresa", CriarEmpresa, name="pg_criar_empresa"),
    path("criar-servico", CriarServico, name="pg_criar_servico"),
    path("criar_categoria", Criarcategoria, name="pg_crira_categoria"),
    path("criar_ordemservico", CriarOrdemServico, name="pg_crira_ordemservico"),
]
