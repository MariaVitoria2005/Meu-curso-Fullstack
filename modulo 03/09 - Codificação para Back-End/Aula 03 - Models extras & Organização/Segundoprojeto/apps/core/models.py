from django.db import models

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
    Cliente = models.ForeignKey(Cliente, on_delete=models.CASCADE)
    Produtos = models.ManyToManyField(Produto)
    data_pedido = models.DateField()

    def __str__(self):
        return f"pedido {self.id} - Cliente: {self.Cliente}"
    
class Transportadora(models.Model):
    nome = models.CharField(max_length=100)
    contato = models.CharField(max_length=100)
    metodo_entrega = models.CharField(max_length=100)

    def __str__(self):
        return self.nome
      
   