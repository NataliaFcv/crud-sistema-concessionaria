create database sistem_concessionaria;
use sistem_concessionaria;

create table concessionaria(
id int unsigned auto_increment not null primary key,
cnpj char(4) not null,
marca varchar(80) not null,
endereco varchar(150) not null,
telefone char(9) not null
);


create table veiculo(
id int unsigned auto_increment not null,
modelo varchar(100) not null,
quantidade int unsigned not null,
id_conc int unsigned  not null,
primary key(id),
foreign key(id_conc) references concessionaria(id)
);


select * from veiculo;
