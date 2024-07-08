from django.urls import path
from .views import *

urlpatterns = [
    path("", CriarMoto, name="pagina_inicial")
]