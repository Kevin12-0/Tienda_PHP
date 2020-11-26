CREATE TABLE PRODUCTOS(
    id_producto varchar(25) PRIMARY KEY,
    producto varchar(50),
    precio decimal (10,0),
    existencias integer
);
CREATE TABLE TICKETS(
    fecha date,
    hora_venta time,
    cantidad_producto varchar(100),
    total_producto decimal(100,0)
);
INSERT INTO PRODUCTOS (id_producto,producto,precio,existencias) 
VALUES ("PROD01","CALCULADORA CASIO FX-991",75.0,3);
INSERT INTO TICKETS (fecha,hora_venta,cantidad_producto,total_producto) 
VALUES ("2020-11-21","13:03","1 CALCULADORA CASIO FX-991 $75.0","$75.00");
