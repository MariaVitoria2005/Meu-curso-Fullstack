# Generated by Django 5.0.6 on 2024-06-11 13:52

import django.db.models.deletion
from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Categoria',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nome', models.CharField(max_length=100)),
            ],
        ),
        migrations.CreateModel(
            name='Carro',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('marca', models.CharField(max_length=100)),
                ('modelo', models.CharField(max_length=100)),
                ('ano', models.IntegerField()),
                ('imagem', models.ImageField(default=True, upload_to='foto_perfil/')),
                ('categoria', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='carros.categoria')),
            ],
        ),
    ]
