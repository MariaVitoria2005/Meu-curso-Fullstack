from django.db import models

class Bolo(models.Model):
    sabor = models.CharField(max_length=100)
    recheio = models.CharField(max_length=100)

    def __str__(self):
        return self.sabor