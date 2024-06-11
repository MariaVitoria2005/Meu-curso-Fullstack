from django.contrib import admin
from .models import Categoria, Carro

class CarroAdmin(admin.ModelAdmin):
    list_display = ('marca', 'modelo', 'ano', 'categoria','imagem')
    list_filter = ('categoria',)

admin.site.register(Categoria)
admin.site.register(Carro, CarroAdmin)