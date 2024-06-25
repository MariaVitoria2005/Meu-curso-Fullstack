from django.db import models

class Celular(models.Model):
    modelo = models.CharField(max_length=100)
    ano_fabricacao = models.IntegerField()

    def __str__(self):
        return self.modelo
    