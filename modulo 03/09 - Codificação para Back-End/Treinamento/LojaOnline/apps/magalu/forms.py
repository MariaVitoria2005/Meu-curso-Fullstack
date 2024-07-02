from django import forms
from .models import *

class Formulariocadastro(forms.ModelForm):
    class Meta:
        model = cadastro
        fields = '__all__'

class FormularioProduto(forms.ModelForm):
    class Meta:
        model = Produto
        fields = '__all__'

class Formulariocategoria(forms.ModelForm):
    class Meta:
        model = categoria
        fields = '__all__'