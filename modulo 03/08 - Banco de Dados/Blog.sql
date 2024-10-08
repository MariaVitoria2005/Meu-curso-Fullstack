create database blog;

use blog;

create table Usuario(
    id integer primary key auto_increment,
    nome VARCHAR(191) not null,
    data_nascimento DATE,
    telefone VARCHAR(191) not null,
    email VARCHAR(191) not null,
    senha VARCHAR(191) not null,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);

create table Postagens(
    id integer primary key auto_increment,
    titulo VARCHAR(191) not null,
    conteudo TEXT,
    data_publicacao DATE,
    categoria VARCHAR(191) not null,
    estatus VARCHAR(191) not null,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);

create table Mensagens(
    id integer primary key auto_increment,
    conteudo TEXT,
    id_usuario_enviador INT,
    id_usuario_recebedor INT, 
    data_envio DATE,
    estatus VARCHAR(191) not null,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);