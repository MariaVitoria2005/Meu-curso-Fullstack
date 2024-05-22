from django.db import models

class usuario(models.Model):
    nome = models.CharField(max_length=50)

    def __str__(self):
        return self.nome
    
class Moto(models.Model):
    marca = models.CharField(max_length=100)
    modelo = models.CharField(max_length=100)
    ano = models.IntegerField()
    preco = models.DecimalField(max_digits=10, decimal_places=2)

    def __str__(self):
        return f" {self.modelo} ({str(self.ano)})"
    
class Acessorio(models.Model):
    nome = models.CharField(max_length=100)
    descricao = models.TextField()
    preco = models.DecimalField(max_digits=10, decimal_places=2)

    def __str__(self):
        return self.nome
    
class Avaliacao(models.Model):
    moto = models.ForeignKey(Moto, on_delete=models.CASCADE)
    usuario = models.ForeignKey(usuario, on_delete=models.CASCADE)
    comentario = models.TextField()
    avaliacao = models.IntegerField() 

    def __str__(self):
        return f"{self.usuario} - {self.avaliacao} "


    
