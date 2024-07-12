from django import forms
from .models import *

class FormularioCliente(forms.ModelForm):
    class Meta:
        model = Cliente
        fields = "__all__"

class FormularioEmpresa(forms.ModelForm):
    class Meta:
        model = Empresa
        fields = "__all__"

class FormularioCategoria(forms.ModelForm):
    class Meta:
        model = Categoria
        fields = "__all__"

class FormularioVaga(forms.ModelForm):
    class Meta:
        model = Vaga
        fields = "__all__"