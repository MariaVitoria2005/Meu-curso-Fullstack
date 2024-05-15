from django.db import models

# Create your models here.

class Fabricante(models.Model):
    nome = models.CharField(max_length=100)
    TIPO_SEXO = (
        ("M", "Masculino"),
        ("F", "Feminino")
    )
    sexo = models.CharField(max_length=2, choices=TIPO_SEXO)

    def __str__(self):
        return self.nome

class Moto(models.Model):
    fabricante = models.ForeignKey(Fabricante, on_delete=models.CASCADE)
    modelo = models.CharField(max_length=100)
    ano = models.IntegerField()
    cilindrada = models.IntegerField()
    preco = models.DecimalField(max_digits=10, decimal_places=2)

    def __str__(self):
        return self.modelo