from django.db import models

class Carro(models.Model):
    marca = models.CharField(max_length=100)
    modelo = models.CharField(max_length=100)
    ano = models.IntegerField()
    preco = models.DecimalField(max_digits=10, decimal_places=2)
    foto = models.ImageField(upload_to='fotos_carros/')

class Documento(models.Model):
    carro = models.ForeignKey(Carro, on_delete=models.CASCADE)
    tipo = models.CharField(max_length=100)
    documento = models.FileField(upload_to='documentos_carros/')