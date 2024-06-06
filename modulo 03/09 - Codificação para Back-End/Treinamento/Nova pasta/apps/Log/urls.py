from django.urls import path
from .views import *

urlpatterns = [
    path('', saudacao),
    path('lista-produtos/', VerProdutos),
]
urlpatterns = [
  
]