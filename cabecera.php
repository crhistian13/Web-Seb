<!DOCTYPE html>
<html>
<head>
	<title>Servicio de Enejenación y Bienes</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" rM4JkQpQtGSRh1R5yf5Nz4aL3VDy8JctSS />
	<meta charset="utf-8">
	<meta name="vimport" content="width-devide-width , initial-scale=3.0">
</head>

<script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous">
</script>
				
<body>

	<?php
		include("conexion.php");
	?>

<table>
	<tbody>
		<td class="contenedor-global">

			<main class="hora">
				<h2 id="FechaActual"></h2>
				<h2 id="HoraActual"></h2>
			</main><br>


			<div class="in-usuario">
									
								<?php
									session_start();
									$usuario=$_SESSION['nombre_usuario'];
									echo "<h4>¡Hola $usuario!</h4>";
								?>

			</div><br><br>
			<div class="in-usuario">
				<a href="exit.php">Desconectar</a>
			</div>

			</div>