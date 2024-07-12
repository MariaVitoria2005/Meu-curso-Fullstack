from django.urls import path
from .views import *

urlpatterns = [
    path("", VerIndex, name="pg_inicial"),
    path("criar-vaga", CriarVaga, name="pg_criar_vaga"),
  

    path("criar-cliente", CriarCliente, name="pg_criar_cliente"),
    path("editar-cliente/<int:id_cliente>", EditarCliente, name="pg_editar_cliente"),
    path("excluir-cliente/<int:id_cliente>", ExcluirCliente, name="pg_excluir_cliente"),

    path("criar-empresa", CriarEmpresa, name="pg_criar_empresa"),
    path("editar-empresa/<int:id_empresa>", EditarEmpresa, name="pg_editar_empresa"),
    path("excluir-empresa/<int:id_empresa>", ExcluirEmpresa, name="pg_excluir_empresa"),
]