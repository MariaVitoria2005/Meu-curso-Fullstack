# Generated by Django 5.0.4 on 2024-05-03 13:34

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('supermercado', '0001_initial'),
    ]

    operations = [
        migrations.RenameModel(
            old_name='Categorias',
            new_name='Categoria',
        ),
        migrations.RenameModel(
            old_name='Clientes',
            new_name='Cliente',
        ),
        migrations.RenameModel(
            old_name='Documentos',
            new_name='Documento',
        ),
        migrations.RenameModel(
            old_name='Produtos',
            new_name='Produto',
        ),
    ]