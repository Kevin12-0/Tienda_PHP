<?php
    $datos = new SQLite3("tienda.db");
    $resultado = $datos->query("SELECT * from PRODUCTOS;");
    $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Existencias</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            ";
    print($table);
    while ($row = $resultado->fetchArray()) {
        $id_producto = $row['id_producto'];
        $producto = $row['producto'];
        $precio = $row['precio'];
        $existencias = $row ['existencias'];
        $table = "
            <tr>
                <td>$id_producto</td>
                <td>$producto</td>
                <td>$precio</td>
                <td>$existencias</td>
                <td><a href='view.php?id_persona=$id_producto'>View</a></td>
                <td><a href='update.php?id_persona=$id_producto'>Update</a></td>
                <td><a href='delete.php?id_persona=$id_producto'>Delete</a></td>
            </tr>
        ";
        print($table);
    }
    print("</table>");
?>
