# Generated by Django 5.0.6 on 2024-06-14 12:09

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('carros', '0007_pagamento_valor_alter_carro_imagem_and_more'),
    ]

    operations = [
        migrations.AddField(
            model_name='carro',
            name='valor',
            field=models.DecimalField(decimal_places=2, default=0, max_digits=10),
            preserve_default=False,
        ),
    ]
