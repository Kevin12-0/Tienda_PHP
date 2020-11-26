<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <title>Insert</title>
</head>
<body>
    <div class="container">
        <div class="colums">
            <div class="colums is-4">
                <h1 class="title is-1">Insert</h1>
                <a href="index.php">Productos</a>
                <form action="insert_datos.php" method="GET">
                    <div class="control">
                        <label class="label">ID</label>
                        <input type="text" class="input is-primary" id="id_producto" name="id_producto" aria-describedby="id_producto" placeholder="Ingresa el  id del producto">
                    </div>
                    <div class="control">
                        <label class="label">Nombre</label>
                        <input type="text" class="input is-primary" id="producto" name="producto" aria-describedby="Producto" placeholder="Ingresa el producto">
                    </div>
                    <div class="control">
                        <label class="label">Precio</label>
                        <input type="text" class="input is-primary" id="precio" name="precio" aria-describedby="precio" placeholder="Precio">
                    </div>
                    <div class="control">
                        <label class="label">Existencias</label>
                        <input type="text" class="input is-primary" id="existencias" name="existencias" aria-describedby="existencias" placeholder="Productos en venta">
                    </div>
                    <button type="submit" class="button is-primary">Insert</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>