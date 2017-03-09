<!DOCTYPE HTML>
<?  error_reporting(E_ALL); ?>
<html>
<head>
	<title>Noticias sin publicar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Noticias, Web Noticias, Telediario" />
</head>
<body>
	<?php
	include_once("header.php");
	?>
	
	<div class="panelEdicion">
		<div class="container">
			<div class="divColumn">
				<h3>Noticias sin publicar</h3>
				<br>
				<div class="listaNoticias">
					<ul class="ulListaNoticias">
						<li class="elementLista">
							<div class="divElementNoti" href="editarNoticia.php">
								<a class="txtTituloNV" href="editarNoticia.php">Muere Lord Peña por autoahorcamiento erotico<a/>
								<br>
								<span>Autor: </span>
								<span class="txtAutorNV">Dario V</span>
								<span>Fecha: </span>
								<span class="txtFechaNV">05 Febrero 2017</span>
							</div>
						</li>
						<li>
							<div class="divElementNoti">
								<a class="txtTituloNV"  href="editarNoticia.php">Hombre que le armaba en el futbol se lamenta de no ser hoy millonario porque se shingo la rodilla</a>
								<br>
								<span>Autor: </span>
								<span class="txtAutorNV">Dario V</span>
								<span>Fecha: </span>
								<span class="txtFechaNV">05 Febrero 2017</span>
							</div>						
						</li>
						<li>
							<div class="divElementNoti">
								<a class="txtTituloNV"  href="editarNoticia.php">Hombre que le armaba en el futbol se lamenta de no ser hoy millonario porque se shingo la rodilla</a>
								<br>
								<span>Autor: </span>
								<span class="txtAutorNV">Dario V</span>
								<span>Fecha: </span>
								<span class="txtFechaNV">05 Febrero 2017</span>
							</div>
						</li>
					</ul>
				</div>
			</div>			
		</div>
	</div>

	<?php
	include_once("footer.php");
	?>		
</body>
</html>