from django.urls import path
from .views import *

urlpatterns = [
    path("", LinkIndex, name="pagina_inicial"),
    path("cadastro", CriarCadastro, name="pagina_cadastro"),
   
]