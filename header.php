<?php
SESSION_START();
?>
<!DOCTYPE HTML>
<?  error_reporting(E_ALL); ?>
<html>
<head>
	<title>Header</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel='stylesheet' type='text/css' href="css/mystyle.css" />
	<link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="header" id="home">
		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">				
						<a class="navbar-brand" href="index.php"><h1><span>FEIK</span>NEWS</h1></a>
					</div>
					<!--/.header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<?php
							if (isset($_SESSION["tipoULog"])) {
								$tipoUser = $_SESSION["tipoULog"];
								if (strcmp($tipoUser, "Administrador") == 0 || strcmp($tipoUser, "Reportero") == 0) {
									print_r('<li><a href="panelNoticia.php">Subir noticia</a></li>
											<li><a href="listadoNoticias.php">Noticias sin publicar</a></li>');
								}
							} ?>
						</ul>
						<div id="divCuadroPerfil">
							<span id="txtCuadroPerfil">
								<?php
								if (isset($_SESSION["nombreULog"])) {
									$nomUser = $_SESSION["nombreULog"]; ?>
									<a id="txtCuadroPerfil" href="perfil.php">Hola <?php echo "$nomUser"; ?><a/>
										<?php } else {
											print_r('<a href="registro-login.php">Inicia sesión aquí<a/>');
										} ?>
									</span>
									<img id="imgCuadroPerfil" src="images/avatar.jpg" style="width: 50px; height: 50px;" >
								</div>
							</div>
							<!--/.header-->
						</div>
					</nav>
				</div>
			</div>
		</body>
		</html>