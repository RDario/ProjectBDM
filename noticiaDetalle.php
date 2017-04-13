<!DOCTYPE HTML>
<?php  error_reporting(E_ALL);
include("conexionBD.php");
require_once "DVNoticia.php";
$idNoticia = $_GET['id'];
$connection = conectarBD();
error_reporting(E_ALL);
$querySelect = "CALL obtenerNoticiaCompletaById('$idNoticia')";
$resultQuery = mysqli_query($connection, $querySelect) or die (mysqli_error($connection));
mysqli_close($connection);

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
?>
<html>
<head>
	<title><?php echo $noticiaComplete->titulo;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Noticias, Web Noticias, Telediario" />
</head>
<body>
	<?php
	include_once("header.php");
	?>
	<div class="main-content">
		<div class="container">
			<div class="mag-inner">
				<div class="col-md-8 mag-innert-left">
					<div class="single-left-grid">
						<img src="images/placeholder.png" alt="">
						<h2><?php echo $noticiaComplete->titulo; ?></h2>
						<h4><?php echo $noticiaComplete->descripcion; ?></h4>
						<p class="text"> <?php echo $noticiaComplete->textoCompleto; ?></p>
						<div class="single-bottom">
							<ul>
								<li><span>Reportero:</span> <a href="perfil.php?id=<?php echo $noticiaComplete->idUsuario; ?>"><?php echo $noticiaComplete->autor; ?></a></li>
								<li><span>Fecha de publicacion </span><?php echo $noticiaComplete->fecha; ?></li>
								<li><a href="#">5 Comments</a></li>
							</ul>
						</div>
					</div>
					<br>
					<div class="leave">
						<h4>Deja un comentario</h4>
						<form id="commentform">
							<p class="comment-form-author-name"><label for="author">Nombre</label>
								<input name="txtNombre" type="text" value="" size="30" aria-required="true">
							</p>
							<p class="comment-form-email">
								<label class="email">Correo electronico</label>
								<input name="txtEmail" type="text" value="" size="30" aria-required="true">
							</p>
							<br>
							<p class="comment-form-comment">
								<textarea placeholder="Comenta lo que quieras!"></textarea>
							</p>
							<div class="clearfix"></div>
							<p class="form-submit">
								<input type="submit" value="Enviar">
							</p>
							<div class="clearfix"></div>
						</form>
					</div>		
				</div>

				<div class="col-md-4 mag-inner-right">
					<div class="sign_main">
						<h4 class="side">Bloque opcional</h4>
						<div class="sign_up">
							<p class="sign">Registra tu correo para recibir noticias al minuto!</p>
							<form>
								<input type="text" class="text" value="Correo electronico" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
								<input type="submit" value="Enviar">
							</form>
						</div>
					</div>	
				</div>
				
			</div>
		</div>
	</div>

	<?php
	include_once("footer.php");
	?>	
</body>
</html>