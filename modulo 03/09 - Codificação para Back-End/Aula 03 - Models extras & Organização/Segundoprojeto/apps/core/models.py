from django.db import models
from django.utils import timezone

class Cliente(models.Model):
    nome = models.CharField(max_length=100)
    endereco = models.CharField(max_length=100)
    telefone = models.CharField(max_length=20)
    email = models.EmailField()

    def __str__(self):
        return self.nome
    
class Produto(models.Model):
    nome = models.CharField(max_length=100)
    descricao = models.TextField()
    preco = models.DecimalField(max_digits=10, decimal_places=2)
    quantidade_em_estoque = models.IntegerField()
    
    def __str__(self):
        return self.nome
    
class Pedido(models.Model):
    cliente = models.ForeignKey(Cliente, on_delete=models.CASCADE)
    produtos = models.ManyToManyField(Produto)
    data_pedido = models.DateField(default=timezone.now)

    def __str__(self):
        return f"Pedido {self.id} - Cliente: {self.cliente.nome}"
    
class Transportadora(models.Model):
    nome = models.CharField(max_length=100)
    contato = models.CharField(max_length=100)
    metodo_entrega = models.CharField(max_length=100)

    def __str__(self):
        return self.nome
      
   