from django.urls import path
from .views import *

urlpatterns = [
    path("",verIndex,name="pg_inicial"),
    path("criar-vaga",CriarVaga,name="pg_criar_vaga"),
    path("criar_empresa",CriarEmpressa,name="pg_criar_empresa"),
    path("detalhes-vaga/<int:id_vaga>",VerDetalhes, name="pg_detalhes")
]
