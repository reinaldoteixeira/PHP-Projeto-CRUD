create database projeto3;

use projeto3;

create table produto(
idProduto int not null auto_increment,
nomeProd varchar(45) not null,
precoProd double(7,2) not null,
primary key (idProduto));

create table cliente(
cpf varchar(45) not null,
email varchar(50) not null,
nome varchar(50) not null,
fone varchar(20) not null,
endereco varchar(80) not null,
primary key (cpf));

create table venda(
idGeral int not null auto_increment,
idVenda int not null,
idProduto int not null,
cpf varchar(45) not null,
qtdCompra varchar(50) not null,
formpagCompra varchar(20),
numCartaoCompra int,
nomeCartaoCompra varchar(50),
valiCartaoMesCompra int,
valiCartaoAnoCompra int,
codsegCartaoCompra varchar(10),
parcCartaoCompra int,
primary key(idGeral));

select * from produto;
select * from cliente;
select * from venda;

drop database projeto3;
