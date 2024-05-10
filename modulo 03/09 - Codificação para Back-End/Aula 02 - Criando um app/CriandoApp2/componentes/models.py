from django.db import models


class Fabricante(models.Model):
    nome = models.CharField(max_length=100)

    def __str__(self):
        return self.nome

class Moto(models.Model):
    fabricante = models.ForeignKey(Fabricante, on_delete=models.CASCADE)
    modelo = models.CharField(max_length=100)
    ano = models.IntegerField()
    cilindrada = models.IntegerField()
    preco = models.DecimalField(max_digits=10, decimal_places=2)

    def __str__(self):
        return f"{self.modelo} ({self.ano})"