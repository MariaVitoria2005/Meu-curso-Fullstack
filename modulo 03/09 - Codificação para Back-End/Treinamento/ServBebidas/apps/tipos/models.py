from django.db import models

class Bebida(models.Model):
    nome = models.CharField(max_length=100)
    tipo = models.CharField(max_length=50)
    preco = models.DecimalField(max_digits=6, decimal_places=2)
    quantidade_estoque = models.PositiveIntegerField(default=0)

    def __str__(self):
        return self.nome
