from django.urls import path
from .views import *

urlpatterns = [
    path("", cerveja)
    path('core/', include('apps.tipos.urls'))
]
