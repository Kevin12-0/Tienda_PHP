<?php
	$carritocompras_1 = $_GET['carritocompras_1'];
  $total_1 = $_GET['total_1'];
  $pago_1 = $_GET['pago_1'];
  $cambio = $pago_1 - $total_1;
?>
<!DOCTYPE>
<hmlt>
	<head>
		<link rel="stylesheet" type="text/css" href="bulma.css">
		<meta charsert="utf8_decode(data)">
		<meta name="viewport" content="width=device-width,initial-scale=1">
	</head>
	<body>
		<div class="container">
			<div class="colums">
				<div class="colums is-4"></div>
					<p class="title is-1">Papeleria Jh</p>
          <label class="label">
            	<?php
                echo "Fecha " . date("d") . " del " . date("m") . " de " . date("Y");
              ?>
          </label>
          <label class="label">
            <?php
              print("Compras \n".$carritocompras_1);
            ?>
          </label>
          <label class="label">
            <?php
              print("total a pagar: $".$total_1);
            ?>
          </label>
          <label class="label">
            <?php
              print("Pago: $".$pago_1);
            ?>
          </label>
          <label class="label">
            <?php
              print("Cambio: $".$cambio);
            ?>
          </label>
				</div>
			</div>
		</div>
	</body>
</hmlt>

