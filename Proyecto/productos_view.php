<?php
    $datos = new SQLite3("tiendas.db");
    $resultado = $datos->query("SELECT * FROM PRODUCTOS;");
    $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>ID PRODUCTO</th>
                <th>NOMBRE</th>
                <th>PRECIO</th>
                <th>LOTE</th>
            </tr>
            </thead>
    ";
    print($table);
    while ($row = $resultado->fetchArray()) {
        $ID_PRODUCTO = $row['ID_PRODUCTO'];
        $NOMBRE = $row['NOMBRE'];
        $PRECIO = $row['PRECIO'];
        $LOTE = $row ['LOTE'];
        $table="
            <tr>
                <th>$ID_PRODUCTO</th>
                <th>$NOMBRE</th>
                <th>$PRECIO</th>
                <th>$LOTE</th>
            </tr>
        ";
        print($table);
    }
    print('</table>');
?>