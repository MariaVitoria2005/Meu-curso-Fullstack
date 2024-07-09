from django.db import models

class Cadastro(models.Model):
    nome = models.CharField(max_length=100)
    email = models.EmailField()
    Nascimento = models.DateField()
    Celular= models.IntegerField()

    def __str__(self):
        return self.nome
      
class Carro(models.Model): 
    marca = models.CharField(max_length=100)
    modelo = models.CharField(max_length=100)
    ano = models.IntegerField()
    imagem = models.ImageField(upload_to="foto_perfil/")
    valor = models.DecimalField(decimal_places=2, max_digits=10)

    def __str__(self):
        return self.marca
    
class Pagamento(models.Model):
    tipo_de_pagamento = models.CharField(max_length=100)
 
    def __str__(self):
        return self.tipo_de_pagamento 