from django.db import models

class Categoria(models.Model):
    nome = models.CharField(max_length=100)

    def __str__(self):
        return self.nome

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
    categoria = models.ForeignKey(Categoria, on_delete=models.CASCADE)
    imagem = models.ImageField(upload_to="foto_perfil/",default=True)

    def __str__(self):
        return f"{self.marca} {self.modelo} ({self.ano})"
    