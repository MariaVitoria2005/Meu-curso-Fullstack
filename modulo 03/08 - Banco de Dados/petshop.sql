create database PetShop;

use PetShop;

create table Sexo(
    cdsexo integer primary key auto_increment,
    dsSexo INTEGER not null,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);

create table Cliente(
	id_Cliente integer primary key auto_increment,
    Sexo_cdSexo INTEGER not null,
    foreign key(Sexo_cdSexo)references Sexo(cdsexo)
    Nome VARCHAR(50) not null,
    Sobrenome VARCHAR(50) not null,
    Rua VARCHAR(50) not null,
    Bairro VARCHAR(50) not null,
    N°Casa INTEGER not null,
    N°Cep INTEGER not null,
    Cidade VARCHAR(50) not null,
    N°Telefone VARCHAR(10) not null,
    N°Celular VARCHAR(10) not null,
    Idade INTEGER not null,
    idAdmin BOOLEAN ,
    Email VARCHAR(50) not null,
    Usuario VARCHAR(50) not null,
    Senha VARCHAR(15) not null,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);

create table Animal(
    cdAnimal integer primary key auto_increment,
    Porte_cdPorte INTEGER not null,
    foreign key(Porte_cdPorte)references Poste(cdPorte)
    Sexo_cdSexo INTEGER not null,
    foreign key(Sexo_cdSexo)references Sexo(cdsexo)
    Cliente_cdCliente INTEGER not null,
    foreign key(Cliente_cdCliente)references Cliente(id_Cliente)
    dsAnimal VARCHAR(15) not null,
    dsRaca VARCHAR(15) not null,
    dtNascimento DATE,
    dsCorPelagem INTEGER not null,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);

create table Agendamento(
    cdAgendamento integer primary key auto_increment,
    Animal_cdAnimal INTEGER not null,
    foreign key(Animal_cdAnimal)references Animal(cdAnimal)
    Servico_cdServico INTEGER not null,
    foreign key(Servico_cdServico)references Servico(cdServivo)
    Atendente_cdAtendente INTEGER not null,
    foreign key(Atendente_cdAtendente)references Atendente(cdAtendente)
    dtAgendamento DATE,
    dtAgenInicial TIME,
    hrAgenFinal TIME,
    idAprovado BOOLEAN,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);

create table Atendente(
    cdAtendente integer primary key auto_increment,
    nmAtendente VARCHAR(15) not null,
    hrDispInicio TIME,
    hrDispfinal TIME,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);---------3

create table DisponibilidadeAgendamento(
    cdAgendamento integer primary key auto_increment,
    hrDispInicial TIME,
    hrDispFinal TIME,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);-------------2

create table Poste(
    cdPorte integer primary key auto_increment,
    dsPorte VARCHAR(100) not null,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);

create table Servico(
    cdServivo integer primary key auto_increment,
    dsServico VARCHAR(100) not null,
    vlServico INTEGER not null,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
);------1

