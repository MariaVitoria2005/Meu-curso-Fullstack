from django.db import models
 
class Cadastro(models.Model):
    nome = models.CharField(max_length=100)
    email = models.EmailField( max_length=254)
    Nascimento = models.DateField()

    def __str__(self):
        return self.nome
      
class Carro(models.Model): 
    marca = models.CharField(max_length=100)
    modelo = models.CharField(max_length=100)
    ano = models.IntegerField()
    imagem = models.ImageField(upload_to="foto_perfil/")

    def __str__(self):
        return f"{self.marca} {self.modelo} ({self.ano})"
    
    
class Pagamento(models.Model):
    tipo_de_pagamento = models.CharField(max_length=100)
    cadastro = models.ForeignKey(Cadastro, on_delete=models.CASCADE)
    carro = models.ForeignKey(Carro, on_delete=models.CASCADE)
    data_pagamento = models.DateField()
    valor = models.DecimalField(decimal_places=2, max_digits=10)

    def __str__(self):
        return self.tipo_de_pagamento 