<?php
    $NOMBRE_USUARIO = $_GET['usuario'];
    $NOMBRE = $_GET['Nombre'];
    $PRIMER_APELLIDO = $_GET['Apellidopaterno'];
    $SEGUNDO_APELLIDO = $_GET['Apellidomaterno'];
    $CORREO = $_GET['Correo'];
    $SEXO = $_GET['Sexo'];
    $EDAD = $_GET['edad'];
    $datos = new SQLite3('tiendas.db');
    $datos->exec("INSERT INTO REGISTRARSE (NOMBRE_USUARIO,NOMBRE,PRIMER_APELLIDO,SEGUNDO_APELLIDO,CORREO,SEXO,EDAD) VALUES ('$NOMBRE_USUARIO','$NOMBRE','$PRIMER_APELLIDO','$SEGUNDO_APELLIDO','$SEXO','$EDAD');");
?>