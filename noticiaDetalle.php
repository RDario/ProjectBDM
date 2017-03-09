<!DOCTYPE HTML>
<?  error_reporting(E_ALL); ?>
<html>
<head>
	<title>Detalle</title>
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
						<img src="images/single.jpg" alt="">
						<h4>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem.</h4>
						<p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
						<div class="single-bottom">
							<ul>
								<li>Credito: <a href="#">Dario V</a></li>
								<li>16 de febrero de 2017</li>
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