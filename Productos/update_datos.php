<?php

    $id_producto = $_GET['id_producto'];
    $producto = $_GET['producto'];
    $precio = $_GET['precio'];
    $existencias = $_GET['existencias'];
    $datos = new SQLite3('tienda.db');
    $datos->exec("UPDATE PRODUCTOS SET precio='$precio', prodcuto='$producto', existencias='$existencias' WHERE id_prosucto='$id_producto';");
    header("Location: index.php");
?>