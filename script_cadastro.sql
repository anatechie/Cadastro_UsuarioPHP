create database cadastro;

use cadastro;

create table usuarios(
	cod int not null primary key auto_increment,
    nome varchar(100) not null,
    email varchar(50) not null,
    senha varchar(20) not null,
    data_cadastro date
);
-- drop table usuarios;

insert into usuarios 
values (
	null, 'Antonio', 'a@gmail.com', 'senha', now()),
    (null, 'Ana', 'ana@gmail.com', 'senha1', now()),
    (null, 'Cleber', 'cleber@gmail.com', 'senha2', now()
);

select * from usuarios;