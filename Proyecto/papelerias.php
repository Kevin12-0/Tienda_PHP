<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimun-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <link rel="stylesheet" href="esti.css">
	<title></title>
</head>
<body>
	<nav class="navbar" role="navigation" aria-label="main navigation">
		  <div class="navbar-brand">
		    <a class="navbar-item" href="">
		      <img src="Logo.png" width="112" height="28">
		    </a>

		    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
		      <span aria-hidden="true"></span>
		      <span aria-hidden="true"></span>
		      <span aria-hidden="true"></span>
		    </a>
		  </div>

		  <div id="navbarBasicExample" class="navbar-menu">
		    <div class="navbar-start">
		      <a class="navbar-item">
		        Inicio
		      </a>

		      <a class="navbar-item" href="quienes.php">
		        ¿Quienes Somos?
		      </a>

		      <div class="navbar-item has-dropdown is-hoverable">
		        <a class="navbar-link">
		          Categorias
		        </a>

		        <div class="navbar-dropdown">
		          <a class="navbar-item" href="papelerias.php">
		            Papelerias
		          </a>
		          <a class="navbar-item">
		            Tecnologia
		          </a>
		          <a class="navbar-item">
		            Abarrotes
		          </a>
		          <hr class="navbar-divider">
		          <a class="navbar-item">
		            ...
		          </a>
		        </div>
		      </div>
		    </div>

		    <div class="navbar-end">
		      <div class="navbar-item">
		        <div class="buttons">
		          <a class="button is-primary" href="iniciar.php">
		            <strong>Iniciar Secion</strong>
		          </a>
		          <a class="button is-light" href="registrate.php">
		            Registrarse
		          </a>

		        </div>
		      </div>
		    </div>
		  </div>
		</nav>
	</nanvar>
    <div class="container">
        <div class="colums">
            <div class="colums is-4">
                <h1 class="title is-1">Papelerias zona de tulancingo</h1>
                <?php include 'papelerias_view.php'; ?>
                <a href="productos.php">
                    <button class="button is-primary">Productos</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>