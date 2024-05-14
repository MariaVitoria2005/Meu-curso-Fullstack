from django.db import models

class Marca(models.Model):
    nome = models.CharField(max_length=100)
    
    def __str__(self):
        return self.nome

class Bicicleta(models.Model):
    marca = models.ForeignKey(Marca, on_delete=models.CASCADE)
    modelo = models.CharField(max_length=100)
    ano_fabricacao = models.IntegerField()
    preco = models.DecimalField(max_digits=10, decimal_places=2)

    def __str__(self):
        return f" {self.modelo} - {self.ano_fabricacao}"