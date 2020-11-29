<?php
    $datos = new SQLite3("tiendas.db");
    $resultado = $datos->query("SELECT * FROM tienda;");
    $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
            </tr>
            </thead>
    ";
    print($table);
    while ($row = $resultado->fetchArray()) {
        $id_tienda = $row['id_tienda'];
        $tipotienda = $row['tipotienda'];
        $nombretienda = $row['nombretienda'];
        $telefono = $row ['telefono'];
        $correo = $row ['correo'];
        $table="
            <tr>
                <th>$id_tienda</th>
                <th>$tipotienda</th>
                <th>$nombretienda</th>
                <th>$telefono</th>
                <th>$correo</th>
            </tr>
        ";
        print($table);
    }
    print('</table>');
?>