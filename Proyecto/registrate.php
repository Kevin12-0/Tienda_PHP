<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
	<title>Registrate</title>
</head>
<body>
    
    <div class="container">
        <div class="colums">
             <div class="colums is-4">
                <form action="registrate_usuario.php" method="GET">
                    <h1 class="title is-1">Registro</h1>
                    <label class="label">Nombre usuario</label>
                    <input class="input is-primary" type="text" id="usuario" name="usuario">
                    <label class="label">Nombre</label>
                    <input class="input is-primary" type="text" name="Nombre" id="Nombre">
                    <label class="label">Apellido Paterno</label>
                    <input class="input is-primary" type="text" name="Apellidopaterno" id="Apellidopaterno">
                    <label class="label">Apellido Materno</label>
                    <input class="input is-primary" type="text" name="Apellidomaterno" id="Apellidomaterno">
                    <label class="label">Correo</label>
                    <input class="input is-primary" type="email" name="Correo" id="Correo">
                    <label class="label">Sexo</label>
                    <input class="input is-primary" type="input is-primary" name="Sexo" id="Sexo">
                    <label class="label">Edad</label>
                    <input class="input is-primary" type="number" name="Edad" id="Edad" min="17">
                    <label class="label">Contraseña</label>
                    <input class="input is-primary" type="password" id="password" name="password">
                    <button type="submit" class="button is-primary">Agregar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>