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

<table>
	<tbody>
		<td class="contenedor-global">
			<header id="header1">
				<img src="header.jpg">
			</header>

			<main class="hora">
				<h2 id="FechaActual"></h2>
				<h2 id="HoraActual"></h2>
			</main><br>

			<main class="mcarga">

				<div class="contenedor-carga">
					<form class="form-carga">

					<?php inclUde("cabecera.php"); ?>

						<fieldset class="in-carga">
							<legend class="in-sesion-border"><legend class="in-carga"><img src="seb-logo.png"></legend></legend>

								<div class="titulo-panel">
									<h4>Panel Administrativo</h4>
								</div>
								<div class="input-box-carga">
									<label>Publicado por:</label>
									<input class="input-carga" type="text" name="public" id="publicado">
								</div>
								<div class="input-box-carga">
									<label>Asunto:</label>
									<input class="input-carga" type="text" name="asunto" id="asunto">
								</div>
								<div class="input-box-carga">
									<label>Subir Imagen:</label>
									<input class="input-carga" type="file" name="img" id="imagen">
								</div>
								<div class="input-box-carga">
									<label>Contenido:</label>
									<textarea class="textarea-carga" id="content" name="contenido" placeholder="Ingresar Contenido"></textarea>
								</div>
								<button class="btn-publicar-cargar" type="submit" name="ingresar">Cargar y Publicar</button>
						</fieldset>
					</form>
				</div>

			</main>

		</td>
	</tbody>
</table>

			<footer>
				<p>Ministerio del Poder Popular para Relaciones Interiores, Justicia y Paz</p>
				<p>Desarrollado por la Oficina de Tecnologías de Información de Servicio de Enajenación y Bienes. <cite>© SEB 2021</cite></p>
			</footer>

 
<script type="text/javascript">

showTime();
function showTime(){
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();
today = dd + '/' + mm + '/' + yyyy;
myDate = new Date();
hours = myDate.getHours();
minutes = myDate.getMinutes();
seconds = myDate.getSeconds();
day = myDate.getDay();
if (hours < 10) hours = 0 + hours;

if (minutes < 10) minutes = "0" + minutes;

if (seconds < 10) seconds = "0" + seconds;


if (dd < 10) {
  dd = '0' + dd;
}

if (mm < 10) {
  mm = '0' + mm;
}

$("#HoraActual").text(dd+ "/" +mm+ "/" +yyyy+ "  " +hours+ ":" +minutes+ ":" +seconds);
setTimeout("showTime()", 1000);
}
</script>


</body>
</html>