from django import forms
from .models import *

class FormularioCadastro(forms.ModelForm):
    class Meta:
        model = Cadastro
        fields = ["nome","email","Nascimento","Celular"]
