from django import forms
from .models import *

class FormularioCelular(forms.ModelForm):
    class Meta:
        model = Celular
        fields = ["modelo","ano_fabricacao"]
    