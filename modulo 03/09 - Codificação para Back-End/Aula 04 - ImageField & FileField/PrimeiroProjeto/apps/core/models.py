from django.db import models

class Cliente(models.Model):
    nome = models.CharField(max_length=100)
    endereco = models.CharField(max_length=100)
    telefone = models.CharField(max_length=20)
    email = models.EmailField()

    def __str__(self):
        return self.nome
    
class Moto(models.Model):
    marca = models.CharField(max_length=100)
    modelo = models.CharField(max_length=100)
    preco = models.DecimalField(decimal_places=2,max_digits=10)
    descricao = models.TextField()
    foto = models.ImageField(upload_to="foto_produtos/")
    
    def __str__(self):
        return f"{self.marca} - {self.modelo}"