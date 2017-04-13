<?php
error_reporting(E_ALL); 
$idNoticia = $_GET['id'];
include("conexionBD.php");
require_once "DVNoticia.php";
require_once "DVSeccion.php";
$idNoticia = $_GET['id'];
$connection = conectarBD();
$querySelect = "CALL obtenerNoticiaCompletaById('$idNoticia')";
$resultQuery = mysqli_query($connection, $querySelect) or die (mysqli_error($connection));

if ($resultQuery->num_rows) {
	$rows = $resultQuery->fetch_all(MYSQLI_ASSOC);
	foreach ($rows as $row) {
		$noticiaComplete = new DVNoticia(
			$row['idNoticia'],
			$row['titulo'],
			$row['descripcion'],
			$row['seccion'],
			$row['idSeccion'],
			$row['fecha'],
			$row['texto'],
			$row['autor'],
			$row['idUsuario'],
			$row['isPublica']);
	}
}
mysqli_next_result($connection);
$querySeccion = "CALL obtenerSecciones()";
$resultQuery = mysqli_query($connection, $querySeccion) or die ("Hubo un error al consultar la base de datos");
mysqli_close($connection);

$arraySecciones = array();
if ($resultQuery->num_rows) {
	$rows = $resultQuery->fetch_all(MYSQLI_ASSOC);
	foreach ($rows as $row) {
		$arraySecciones[count($arraySecciones)] = new DVSeccion(
			$row['idSeccion'], 
			$row['nombreSeccion'], 
			$row['idUsuario']);
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Editar noticia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Noticias, Web Noticias, Telediario" />
</head>
<body onload="getSeccion()">
	<?php
	include_once("header.php");
	?>
	<div class="panelEdicion">
		<div class="container">
			<div class="divColumn">
				<h3>Editar noticia</h3>
				<form action="noticia_success_page.php" method="POST">
					<div class="address">
						<span>Validar noticia</span>
						<select class= "selectValidacion" name="txtValidacion" tabindex="9" required="">
							<?php
							if (isset($_SESSION["tipoULog"])) {
								$tipoUser = $_SESSION["tipoULog"];
								if (strcmp($tipoUser, "Administrador") == 0) { 
									if (strcmp($noticiaComplete->isPublica, "0") == 0) { ?>
									<option value="1">Si</option>
									<option value="0" selected>No</option>
									<?php } ?>
								<?php } else { ?>
								<option value="0">No</option>
								<?php }
							} ?>	
						</select>
					</div>
					<div class="address">
						<span>Título</span>
						<input class="inpTitulo" type="text" name="txtTitulo" autofocus="true" required="" value="<?php echo $noticiaComplete->titulo; ?>">
					</div>
					<div class="address">
						<span>Sección</span>
						<select id="campoIdSeccion" class= "selectSeccion" name="txtIdSeccion" tabindex="1" required="" onchange="getSeccion()">
							<?php
							for ($i=0; $i < count($arraySecciones); $i++) { 
								$elemento = $arraySecciones[$i];
								if (strcmp($noticiaComplete->idSeccion, $elemento->idSeccion) == 0) { ?>
								<option value="<?php echo $elemento->idSeccion; ?>" selected><?php echo $elemento->nombreSeccion; ?></option>
								<?php } else { ?>
								<option value="<?php echo $elemento->idSeccion; ?>"><?php echo $elemento->nombreSeccion; ?></option>
								<?php }
							} ?>
							</select>
							<input id="campoTextSeccion" class="inpAutor" type="hidden" name="txtSeccion" required="">
						</div>
						<div class="address">
							<span>Descripción breve</span>
							<textarea type="text" name="txtDescripcion" tabindex="2"><?php echo $noticiaComplete->descripcion; ?></textarea>
						</div>
						<div class="address">
							<span>Autor</span>
							<input class="inpAutor" type="text" name="txtAutor" tabindex="6" required="" readOnly="" value="<?php echo $noticiaComplete->autor; ?>">
							<input class="inpAutor" type="hidden" name="txtIdAutor" tabindex="7" required="" readOnly="" value="<?php echo $noticiaComplete->idUsuario; ?>">
						</div>					
						<div class="address">
							<span>Texto completo</span>
							<textarea class="textareaTexto" type="text" tabindex="8" name="txtDescripcion" rows="20" required=""><?php echo $noticiaComplete->textoCompleto; ?></textarea>
						</div>
						<div class="address new">
							<input name="inpGuardarNoti" type="submit" value="Actualizar" tabindex="9">
						</div>
					<!-- 		<div class="address">
						<span>Elige una o varias imágenes</span>
						<input type="file" accept="image/*" name="inpImgNoti" multiple />
					</div>
					<div class="address">
						<span>Elige uno o varios vídeos</span>
						<input type="file" accept="video/*" name="inpVideoNoti" multiple />
					</div>			-->
				</div>
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<?php
include_once("footer.php");
?>

<script>
function getSeccion() {
    var x = document.getElementById("campoIdSeccion");
    x = x.options[x.selectedIndex].text;
    document.getElementById("campoTextSeccion").value = x;
}
</script>
</body>
</html>