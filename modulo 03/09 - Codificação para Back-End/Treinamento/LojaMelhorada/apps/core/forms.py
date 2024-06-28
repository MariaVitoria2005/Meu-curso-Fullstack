from django import forms
from .models import *

class Formularioabencoado(forms.ModelForm):
    class Meta:
        model = abencoado
        fields = '__all__'

class FormularioTaca(forms.ModelForm):
     class Meta:
        model = Taca
        fields = '__all__'