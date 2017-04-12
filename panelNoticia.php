<!DOCTYPE HTML>
<?php
include("conexionBD.php");
require_once "DVSeccion.php";
$connection = conectarBD();
error_reporting(E_ALL);
$querySelect = "CALL obtenerSecciones()";
$resultQuery = mysqli_query($connection, $querySelect) or die ("No se realizo el query");
mysqli_close($connection);

$arraySecciones = array();
if ($resultQuery->num_rows) {
	$rows = $resultQuery->fetch_all(MYSQLI_ASSOC);
	foreach ($rows as $row) {
		$arraySecciones[count($arraySecciones)] = new DVSeccion($row['idSeccion'], $row['nombreSeccion'], $row['idUsuario']);		
	}
}
?>
<html>
<head>
	<title>Subir contenido</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Noticias, Web Noticias, Telediario" />
</head>
<body>
	<?php
	include_once("header.php");
	?>
	
	<div class="panel">
		<div class="container">
			<div class="divColumnLeft">
				<h3>Subir nueva noticia</h3>
				<form action="noticia_success_page.php" method="POST">
					<div class="address">
						<span>Título</span>
						<input class="inpTitulo" type="text" name="txtTitulo" autofocus="true" required="">
					</div>
					<div class="address">
						<span>Sección</span>
						<select class= "selectSeccion" name="txtSeccion" tabindex="1" required="">
							<?php
							$num = count($arraySecciones);
							for ($i=0; $i < $num; $i++) {
								$elemento = $arraySecciones[$i];
								echo "<option value=$elemento->idSeccion>$elemento->nombreSeccion</option>";
							}
							?>
						</select>
					</div>
					<div class="address">
						<span>Descripción breve</span>
						<textarea type="text" name="txtDescripcion" tabindex="2"></textarea>
					</div>
					<div class="address">
						<span>Elige una o varias imágenes</span>
						<input type="file" accept="image/*" name="inpImgNoti" multiple />
					</div>
					<div class="address">
						<span>Elige uno o varios vídeos</span>
						<input type="file" accept="video/*" name="inpVideoNoti" multiple />
					</div>
					<div class="address">
						<?php
						$nomUser = $_SESSION["nombreULog"];
						$apellidosUser = $_SESSION["apellidosULog"];
						?>
						<span>Autor</span>
						<input class="inpAutor" type="text" name="txtAutor" tabindex="6" required="" readOnly="" value="<?php echo "$nomUser"." "."$apellidosUser";?>">
					</div>
					<div class="address">
						<span>Texto completo</span>
						<textarea class="textareaTexto" type="text" tabindex="7" name="txtTextoCompleto" rows="20" required=""></textarea>
					</div>
					<div class="address new">
						<input name="inpGuardarNoti" type="submit" value="Guardar" tabindex="8">
					</div>
				</form>
			</div>
			<div class="divColumnRight">
				<h3>Subir nueva sección</h3>
				<form action="seccion_success_page.php" method="POST">
					<div class="address">
						<span>Título</span>
						<input class="inpTitulo" type="text" name="txtTituloSecc" tabindex="8" required="">
					</div>
					<div class="address new">
						<input name="inpGuardarSecc" type="submit" value="Guardar" tabindex="9">
					</div>
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<?php
	include_once("footer.php");
	?>
</body>
</html>