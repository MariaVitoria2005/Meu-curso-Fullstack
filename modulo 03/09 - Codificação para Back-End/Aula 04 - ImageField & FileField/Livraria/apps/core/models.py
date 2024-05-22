from django.db import models

class Author(models.Model):
    nome = models.CharField(max_length=100)
    biografia = models.TextField()

    def __str__(self):
        return self.nome

class Livro(models.Model):
    titulo = models.CharField(max_length=100)
    author = models.ForeignKey(Author, on_delete=models.CASCADE)
    data_publicacao = models.DateField()
    foto = models.ImageField(upload_to='Livro_perfil/')

    def __str__(self):
        return self.titulo
