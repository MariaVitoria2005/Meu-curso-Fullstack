from django.db import models

class Cadastro(models.Model):
    nome = models.CharField(max_length=100)
    email = models.EmailField()
    data_nascimento = models.DateField()
    celular = models.IntegerField()

    def __str__(self):
        return self.nome
    
class Produto(models.Model):
    nome_produto = models.CharField(max_length=100)
    valor_produto = models.DecimalField(decimal_places=2,max_digits=7)
    Descricao = models.TextField('Descricao')
    imagem_produto =  models.FileField(upload_to='data/')

    def __str__(self):
        return self.nome_produto
    
class Categoria(models.Model):
    categoria = models.CharField(max_length=100)

    def __str__(self):
        return self.categoria