<?php
    $id_producto = $_GET["id_producto"];
    $datos = new SQLite3("tienda.db");
    $datos->exec("DELETE FROM PRODUCTOS where id_producto='$id_producto';");
    header("Location: index.php");
?>