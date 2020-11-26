<?php
    $id_producto = $_GET["id_producto"];
    $datos = new SQLite3("tienda.db");
    $resultado = $datos->query("SELECT * from PRODUCTOS where id_producto='$id_producto';");
    while ($row = $resultado->fetchArray()) {
        $id_producto = $row["id_producto"];
        $producto = $row["producto"];
        $precio = $row["precio"];
        $existencias = $row['existencias'];
    }
    $form ="
        <div class='container'>
            <div class='colums'>
                <div class='colums is-4'>
                    <label class='label'>ID</label>
                    <div class='control'>
                        <input type='text' readonly class='input is-primary' id='id_producto' name='id_producto' aria-describedby='Id producto' value='$id_producto'>
                    </div>
                </div>
            </div>
        </div>
        <div class='container'>
            <div class='colums'>
                <div class='colums is-4'>
                    <label class='label'>Producto</label>
                    <input type='text' class='input is-primary' id='producto' name='producto' aria-describedby='producto' value='$producto'>
                </div>
            </div>
        </div>
        <div class='container'>
            <div class='colums'>
                <div class='colums is-4'>
                    <label class='label'>Precio</label>
                    <input type='text' class='input is-primary' id='precio' name='precio' aria-describedby='precio' value='$precio'>
                </div>
            </div>
        </div>
        <div class='container'>
            <div class='colums'>
                <div class='colums is-4'>
                    <label class='label'>Existencias</label>
                    <input type='text' class='input is-primary' id='existencias' name='existencias' aria-describedby='existencias' value='$existencias'>
                </div>
            </div>
        </div>
    ";
    print($form);
?>