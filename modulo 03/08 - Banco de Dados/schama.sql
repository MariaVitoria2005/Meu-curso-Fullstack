create database BancoDados;

use BancoDados;

create table PRODUTO(
	ID_PRODUTO integer primary key auto_increment,
    foreign key(ID_PRODUTO)references PRODUTO(id),
	CODIGO VARCHAR(191) not null,
	DESCRICAO TEXT,
    ID_SUBCATEGORIA INTEGER not null,
    ID_MARCA INTEGER not null,
    ID_UNIDADE_MEDIDA INTEGER not null,
    foreign key(ID_SUBCATEGORIA)references CATEGORIA(id),
    foreign key(ID_MARCA)references MARCA(id),
    foreign key(ID_UNIDADE_MEDIDA)references UNIDADE_MEDIDA(id),
    ESPECIFICACAO_TECNICA TEXT,
    PESO_BRUTO VARCHAR(50)not null,
    PESO_LIQUIDO VARCHAR(50)not null,
    QTD_MULT VARCHAR(50)not null,
    QTD_MIN VARCHAR(50)not null,
    COD_BARRA VARCHAR(50)not null,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

create table PRODUTO_SIMILAR(
	ID_PRODUTO integer primary key auto_increment,
    ID_PRODUTO_SIMILAR INTEGER not null,
    foreign key(ID_PRODUTO_SIMILAR)references PRODUTO_SIMILAR(id),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

create table MARCA(
	ID_MARCA integer primary key auto_increment,
	DESCRICAO TEXT,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

create table PRECO_VENDA(
	ID_PRECO_VENDA integer primary key auto_increment,
	ID_PRODUTO INTEGER not null,
    foreign key(ID_PRODUTO)references PRODUTO(id),
	PRECO-VENDA DECIMAL,
    DATA_VALIDADE_INICIAL DATE,
    DATA_VALIDADE_FINAL DATE,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

create table UNIDADE_MEDIDA(
	ID_UNIDADE_MEDIDA integer primary key auto_increment,
    foreign key(ID_UNIDADE_MEDIDA)references UNIDADE_MEDIDA(id),
    DESCRICAO TEXT,
    ID_PRODUTO INTEGER not null,
    foreign key(ID_PRODUTO)references PRODUTO(id),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

create table DEPARTAMENTO(
	ID_DEPARTAMENTO integer primary key auto_increment,
	DESCRICAO TEXT,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

create table CATEGORIA(
	ID_CATEGORIA integer primary key auto_increment,
	DESCRICAO TEXT,
    ID_DEPARTAMENTO INTEGER not null,
    foreign key(ID_DEPARTAMENTO)references DEPARTAMENTO(id),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

create table SUBCATEGORIA(
	ID_SUBCATEGORIA integer primary key auto_increment,
	DESCRICAO TEXT,
    ID_CATEGORIA INTEGER not null,
    foreign key(ID_CATEGORIA)references CATEGORIA(id),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);