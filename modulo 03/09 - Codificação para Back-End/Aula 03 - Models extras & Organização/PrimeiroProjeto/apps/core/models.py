from django.db import models

class Autor(models.Model):
    status = (
        ("Y", "ja assistir"),
        ("N", "Não assistir")
    )
    nome_autor = models.CharField(max_length=100)
    nome_filme = models.CharField(max_length=100)
    filme_status = models.CharField(max_length=2, choices=status)
    valor_filme = models.DecimalField(decimal_places=2,max_digits=5)

    def __str__(self):
        return self.nome_autor
    
    class Meta:
        ordering = ('pk',)
        verbose_name = "@utor"
        verbose_name_plural = "@utores"