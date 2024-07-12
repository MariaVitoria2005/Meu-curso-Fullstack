from django.db import models

class Cliente(models.Model):
    nome = models.CharField(max_length=100)
    data_nascimento = models.DateField()
    foto = models.ImageField(upload_to="foto_perfil")

    def __str__(self):
        return self.nome
    
class Empresa(models.Model):
    nome = models.CharField(max_length=100)
    cnpj = models.PositiveIntegerField()
    
    def __str__(self):
        return self.nome
    
class Categoria(models.Model):
    tipo = models.CharField(max_length=100)

    def __str__(self):
        return self.tipo
    
class Vaga(models.Model):
    titulo = models.CharField(max_length=70)
    descricao = models.TextField()
    capa = models.ImageField(upload_to="foto_capa")
    empresa = models.ForeignKey(Empresa, on_delete=models.CASCADE)

    def __str__(self):
        return self.titulo