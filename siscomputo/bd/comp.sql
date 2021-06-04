create database computadora;
use computadora;

create table t_computadora(
			id int auto_increment,
			nombre varchar(50),
			apellido varchar(50),
			email varchar(50),
			telefono varchar(50),
			nombreequipo varchar(50),
			modelo varchar(50),
			numeroserie varchar(50),
			fecha datetime not null default now(),
			primary key(id)
					);