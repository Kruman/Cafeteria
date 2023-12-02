<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cafeteria</title>
	<style type="text/css">

		body{
			background-image: url("img/fondo2.jpg");
		}
	</style>
</head>
<body>
	<p align="center"><img width="500px"  alt ="fotos" src="img\cafe.jpg" ></p>
	<form method="post" action="cafeteria.php">
	<center>
	<table  align="center" width="800" border="1" cellspacing="1" cellpadding="5" style="font: 10pt Verdana, Geneva, Arial, Helvetica,sans-serif;" background="img/ot.jpg" class="tabla" id="tabla">
		<tr>
		<td>Cliente</td>
		<td colspan="3"><input type="text" name="comprador" size="85" placeholder="Nombre comprador"></td>
		
	</tr>
	<tr>
		<td>Lista de productos</td>
		<td>Cantidad</td>
		<td>Precio</td>
		<td>Subtotal</td>
	</tr>
	<tr>
		<td><label>Donas</label></td>
		<td><input type="text" name="donas"></td>
		<td>$25</td>
		<td><?php
	if (isset($_POST['boton'])) {
		$donas=$_POST['donas'];
		$cantidad=45;
		$total=$donas * $cantidad;
		echo "$".$total;
	}
	?></td>
	</tr>
	<tr>
		<td><label>Cafe</label></td>
		<td><input type="text" name="cafe"></td>
		<td>$45</td>
		<td><?php
	if (isset($_POST['boton'])) {
		$coffi=$_POST['cafe'];
		$cantidad1=45;
		$total1=$coffi * $cantidad1;
		echo "$".$total1;
	}
	?></td>
	</tr>
	<tr>
		<td><label>Té</label></td>
		<td><input type="text" name="te"></td>
		<td>$20</td>
		<td><?php
	if (isset($_POST['boton'])) {
		$te=$_POST['te'];
		$cantidad2=20;
		 $total2=$te * $cantidad2;
		 echo "$".$total2;
	}
	?></td>
	</tr>
	<tr>
		<td><label>Galletas</label></td>
		<td><input type="text" name="galletas"></td>
		<td>$30</td>
		<td><?php
	if (isset($_POST['boton'])) {
		$galleta=$_POST['galletas'];
		$cantidad3=30;
		$total3=$galleta * $cantidad3;
		echo "$".$total3;
	}
	?></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="boton" value="Finalizar Venta"></td>
		<td colspan="2"></td>
	</tr>
	<tr>
		<td colspan="2"><label><?php
	if (isset($_POST['boton'])) {
		$nombre=$_POST['comprador'];
		echo $nombre;
	}
	?></label></td>
		<td>Total a pagar:</td>
		<td><?php
		if (isset($_POST['boton'])) {
		$resultado=$total +$total1 + $total2 + $total3;
		echo "$".$resultado;
	}
	?>
		
	</td>
	</table>
	</center>
	</form>
</body>
</html>