create table tienda(
    id_tienda varchar(25) not null primary key,
    tipotienda varchar(25) not null,
    nombretienda varchar(100) not null,
    telefono varchar(25) not null,
    correo varchar(50) not null
);
insert into tienda (id_tienda,tipotienda,nombretienda,telefono,correo) values ("BUSC01","Papeleria","Papeleria Jaret","775-770-60-98","s/n");

