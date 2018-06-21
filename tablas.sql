create table users(
	DNI varchar(9) primary key,
	username varchar(30) not null,
	lastname varchar(30) not null,
	tlf int(12) not null,
	correo varchar(30) not null,
	sexo varchar(30),
	profesion varchar(30),
	password varchar(30) not null,
	tipo_tarifa varchar(30)
);

create table imagen(
	DNI varchar(9) references users(DNI),
	ruta_imagen varchar(100) not null,
	primary key(DNI)
);

create table hilo(
	id int(11),
	DNI varchar(9) references users(DNI),
	fecha_post datetime not null default CURRENT_TIMESTAMP,
	titulo text not null,
	contenido text not null,
	primary key(id, DNI)
);

create table respuesta(
	id int(11),
	id_hilo int(11) references hilo(id),
	DNI_hilo varchar(9) references hilo(DNI),
	DNI_resp varchar(9) references users(DNI),
	fecha_resp datetime not null default CURRENT_TIMESTAMP,
	contenido_resp text not null,
	primary key(id, id_hilo, DNI_hilo)
);