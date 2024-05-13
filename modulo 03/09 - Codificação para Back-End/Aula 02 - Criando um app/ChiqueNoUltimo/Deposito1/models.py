from django.db import models

class RoupaFemininas(models.Model):
    tipo = models.CharField(max_length=50)
    tamanho = models.CharField(max_length=20) 
    data_de_entrada = models.DateField()
    preco =  models.DecimalField(max_digits=10, decimal_places=2) 
    quantidade = models.IntegerField(default=0)   

    def __str__(self):
        return self.tipo   
    
class RoupaMasculina(models.Model):
    tipo = models.CharField(max_length=50)
    tamanho= models.CharField(max_length=20) 
    data_de_entrada = models.DateField()
    preco =  models.DecimalField(max_digits=10, decimal_places=2) 
    quantidade = models.IntegerField(default=0) 

    def __str__(self):
        return self.tipo     

class RoupaInfantil(models.Model):
    tipo = models.CharField(max_length=50)
    tamanho = models.CharField(max_length=20) 
    data_de_entrada = models.DateField()
    preco =  models.DecimalField(max_digits=10, decimal_places=2) 
    quantidade = models.IntegerField(default=0)  

    def __str__(self):
        return self.tipo