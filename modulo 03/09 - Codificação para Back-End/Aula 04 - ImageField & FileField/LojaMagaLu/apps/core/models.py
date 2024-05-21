from django.db import models

class Cliente(models.Model):
    nome = models.CharField(max_length=100)
    Email = models.EmailField()
    telefone = models.CharField(max_length=20)
    endereco = models.CharField(max_length=200)

    def __str__(self):
        return self.nome
    
class Produto(models.Model):
    nome = models.CharField(max_length=50)
    preco = models.DecimalField(decimal_places=2,max_digits=7)
    descricao = models.TextField()
    

    def __str__(self):
        return self.nome

class Transportadora(models.Model):
    nome = models.CharField(max_length=100)
    endereco = models.CharField(max_length=100)
    telefone = models.CharField(max_length=20)
    
    def __str__(self):
        return self.nome