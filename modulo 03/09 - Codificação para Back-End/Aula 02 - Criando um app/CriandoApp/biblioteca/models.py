from django.db import models

class Autor(models.Model):
    nome = models.CharField(max_length=50)
    data_nascimento = models.DateField()

    def __str__(self):
        return self.nome 
    
class livro(models.Model):
    titulo = models.CharField(max_length=100)
    autor = models.ForeignKey('Autor', on_delete=models.CASCADE)
    ano_publicado = models.DateField()
    genero = models.CharField(max_length=100)
    editora = models.CharField(max_length=50, default= "Bloomsbury Publishing")
    editora2 = models.CharField(max_length=50, null= True, blank=True)
    editora3 = models.CharField(max_length=50)
    quantidade_dispinivel = models.PositiveIntegerField()

    def __str__(self):
        return self.titulo