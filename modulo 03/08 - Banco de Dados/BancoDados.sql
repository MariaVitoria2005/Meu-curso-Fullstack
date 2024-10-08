create database SistemaBancoDeDados;

use SistemaBancoDeDados;

create table contatos(
	id integer primary key auto_increment,
	telefone VARCHAR(191) not null,
	email  VARCHAR(191) not null,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);

create table clientes(
	id integer primary key auto_increment,
	nome VARCHAR(191) not null,
	data_nascimento DATE,
	foto VARCHAR(191),
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);

create table categorias(
	id integer primary key auto_increment,
	tipo VARCHAR(191) not null,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);

create table empresas(
	id integer primary key auto_increment,
	razao_social VARCHAR(191) not null,
	cnpj VARCHAR(191) not null,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);

create table produtos(
	id integer primary key auto_increment,
	nome VARCHAR(191) not null,
	valor DECIMAL(8,2),
    descricao TEXT,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);

create table servicos(
	id integer primary key auto_increment,
	tipo VARCHAR(191) not null,
	valor DECIMAL(8,2),
    empresa_id BIGINT ,
    categoria_id BIGINT ,
    foreign key(empresa_id)references empresas(id),
    foreign key(categoria_id)references categorias(id),
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);

create table ordem_servicos(
	id integer primary key auto_increment,
	cliente_id BIGINT,
	servico_id BIGINT,
    foreign key(empresa_id)references empresas(id)
    foreign key(cliente_id)references clientes(id)
    foreign key(servico_id)references servicos(id)
    data_servico DATE,
    empresa_id BIGINT ,
    data_finalizada DATE,
    estatus TINYINT(1),
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);