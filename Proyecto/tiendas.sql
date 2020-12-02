create table tienda(
    id_tienda varchar(25) not null primary key,
    tipotienda varchar(25) not null,
    nombretienda varchar(100) not null,
    telefono varchar(25) not null,
    correo varchar(50) not null
);
insert into tienda (id_tienda,tipotienda,nombretienda,telefono,correo) values ("BUSC01","Papeleria","Papeleria Jaret","775-770-60-98","s/n");
CREATE TABLE REGISTRATE (
NOMBRE_USUARIO VARCHAR (30) NOT NULL,
NOMBRE VARCHAR (20) NOT NULL,
PRIMER_APELLIDO VARCHAR (20) NOT NULL,
SEGUNDO_APELLIDO VARCHAR (20) NOT NULL,
CORREO VARCHAR(90) NOT NULL,
SEXO CHAR (1) NOT NULL,
EDAD INT (3) NOT NULL,
CONTRASEÑA TEXT
);
CREATE TABLE PRODUCTOS (
ID_PRODUCTO CHAR(10) PRIMARY KEY,
NOMBRE VARCHAR(30) NOT NULL,
PRECIO DECIMAL (10,2) NOT NULL,
LOTE INT (10) NOT NULL
);
