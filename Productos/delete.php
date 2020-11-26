<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <title>Delete</title>
</head>

<body>
    <div class="container">
        <div class="colums"> 
            <div class="colums is-4">
                <h1 class="title is-1">Delete</h1>
                <a href="index.php">Productos</a>
                <form action='delete_datos.php' method='GET'>
                    <?php include 'view_datos.php'; ?>
                    <button type='submit' class='button is-primary'>Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>