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

			<div class="navbar">
				<ul>
					<li><a href="index.html">Inicio</a></li>
					<li class="actual"><a href="#">Nosotros</a>
						<ul>
							<li><a href="myv.html">Misión y Visión</a></li>
						</ul>
					</li>
					<li><a href="http://www.mpprijp.gob.ve/" target="_blank">M.P.P.R.I.J.P</a></li>
				</ul>
			</div><br>

			<main class="m1">

				<h4 class="titulo-tweets">
					ÚLTIMAS PUBLICACIONES	
				</h4>	

				<a class="twitter-timeline" data-width="540" data-height="350" href="https://twitter.com/oncdoftvzla?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

			</main>

			<main class="m2">

				<div class="contenedor-parrafo">

					<h4 class="titulo-pag">
						MISIÓN
					</h4>	

					<p>
						CONTENIDO O IMAGENES INFORMATIVAS
					</p>
<br>
					<h4 class="titulo-pag">
						VISIÓN
					</h4>	

					<p>
						CONTENIDO O IMAGENES INFORMATIVAS
					</p>
				</div>


			</main>


			<aside id="right">
				<div class="redes">
					<h4>REDES SOCIALES</h4>
				</div>
				<main class="contenedor-redes">
					<a href="#" target="_blank" class="facebook" ></a>
					<a href="#" target="_blank" class="twitter" ></a>
					<a href="#" target="_blank" class="instagram" ></a>
				</main>	

				<iframe src="https://www.instagram.com/p/CTsBfc0Fi2S/embed/" width="285" height="520" frameborder="0" scrolling="yes" allowtransparency="true">
				</iframe>

				<iframe name="f1f8763c2d21c6c" width="290px" height="400px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df62cc48852ec74%26domain%3Dwww.mpprijp.gob.ve%26is_canvas%3Dfalse%26origin%3Dhttp%253A%252F%252Fwww.mpprijp.gob.ve%252Ff12c10d7dc97384%26relation%3Dparent.parent&amp;container_width=0&amp;height=400&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FGestionPerfecta%2F%3Fref%3Daymt_homepage_panel&amp;locale=es_LA&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=290" class="" style="border: none; visibility: visible; width: 285px; height: 400px;"></iframe></span>

			</aside>

		</td>
	</tbody>
</table>

			<main class="m5">
				<div class="entes">
					<span>
						<img src="ente-1.png">
					</span>
				</div>
				<div class="entes">
					<span>
						<img src="ente-1.png">
					</span>
				</div>
				<div class="entes">
					<span>
						<img src="ente-1.png">
					</span>
				</div>
				<div class="entes">
					<span>
						<img src="ente-1.png">
					</span>
				</div>
				<div class="entes">
					<span>
						<img src="ente-1.png">
					</span>
				</div>
				<div class="entes">
					<span>
						<img src="ente-1.png">
					</span>
				</div>
			</main>

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