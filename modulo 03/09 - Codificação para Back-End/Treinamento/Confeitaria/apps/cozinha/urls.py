from django.urls import path
from .views import *

urlpatterns = [
    path("", VerBolos, name="pg_bolos"),
    path("excluir-bolo/<int:id_bolo>", ExcluirBolo, name="conf_excluir_bolo")
]