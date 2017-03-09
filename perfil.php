<!DOCTYPE HTML>
<?  error_reporting(E_ALL); ?>
<html>
<head>
	<title>Mi Cuenta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Noticias, Web Noticias, Telediario" />
</head>
<body>
	<?php
	include_once("header.php");
	?>

	<div class="divPortadaPerfil">
		<img src="images/banner.jpg" class="imgPortada" id="imgOutputPortada">
		<input class="btnEditarPortada" type="file" accept="image/*" name="inpImgNoti" onchange="loadFilePort(event)" />
		<script>
			var loadFilePort = function (event) {
				var output = document.getElementById('imgOutputPortada');
				output.src = URL.createObjectURL(event.target.files[0]);
			};
		</script>
		<input class="btnEditarImg" type="submit" name="inpEditarPortada" value="Actualizar" />
	</div>

	<div class="account">
		<div class="container">
			<div class="account-bottom">
				<div class="col-md-6 account-left">
					<div class="divBtnEditar">
						<button id="inpEditar" class="btnEditar" type="button" onclick="functionIsDisabled('inpEditar');">Editar</button>
						<button id="inpEliminar" class="btnEditar" type="button" onclick="">Eliminar cuenta</button>
					</div>		
					<form>
						<div class="address">
							<span>Tipo de cuenta</span>
							<select id="inpTipo" name="txtTipoCuenta" placeholder="" disabled>
								<option>Normal</option>
								<option>Reportero</option>
								<option>Administrador</option>
							</select>
						</div>
						<div class="address">
							<span>Nombre</span>
							<input id="inpNombre" type="text" name="txtNombre" value="Dario" disabled>
						</div>
						<div class="address">
							<span>Apellidos</span>
							<input id="inpApellidos" type="text" name="txtApellidos" value="V Band" disabled>
						</div>
						<div class="address">
							<span>Correo electronico</span>
							<input id="inpEmail" type="text" name="txtEmail" value="n00bftw69@hotmail.com" disabled>
						</div>
						<div class="address">
							<span>Contraseña</span>
							<input id="inpContrasenia" type="password" name="txtPassword" value="ggizinoob" disabled>
						</div>
						<div class="address">
							<span>Fecha de nacimiento</span>
							<select id="inpNacDia" name="txtNacDia" placeholder="" disabled>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
								<option>25</option>
								<option>26</option>
								<option>27</option>
								<option>28</option>
								<option>29</option>
								<option>30</option>
								<option>31</option>
							</select>
							<select id="inpNacMes" name="txtNacMes" placeholder="Mayo" disabled>
								<option>Enero</option>
								<option>Febrero</option>
								<option>Marzo</option>
								<option>Abril</option>
								<option>Mayo</option>
								<option>Junio</option>
								<option>Julio</option>
								<option>Agosto</option>
								<option>Septiembre</option>
								<option>Octubre</option>
								<option>Noviembre</option>
								<option>Diciembre</option>
							</select>
							<select id="inpNacAnio" name="txtNacAnio" placeholder="2000" disabled>
								<option>2016</option>
								<option>2015</option>
								<option>2014</option>
								<option>2013</option>
								<option>2012</option>
								<option>2011</option>
								<option>2010</option>
								<option>2009</option>
								<option>2008</option>
								<option>2007</option>
								<option>2006</option>
								<option>2005</option>
								<option>2004</option>
								<option>2003</option>
								<option>2002</option>
								<option>2001</option>
								<option>2000</option>
								<option>1999</option>
								<option>1998</option>
								<option>1997</option>
								<option>1996</option>
								<option>1995</option>
								<option>1994</option>
								<option>1993</option>
								<option>1992</option>
								<option>1991</option>
								<option>1990</option>
								<option>1989</option>
								<option>1988</option>
								<option>1987</option>
								<option>1986</option>
								<option>1985</option>
								<option>1984</option>
								<option>1983</option>
								<option>1982</option>
								<option>1981</option>
								<option>1980</option>
								<option>1979</option>
								<option>1978</option>
								<option>1977</option>
								<option>1976</option>
								<option>1975</option>
								<option>1974</option>
								<option>1973</option>
								<option>1972</option>
								<option>1971</option>
								<option>1970</option>
								<option>1969</option>
								<option>1968</option>
								<option>1967</option>
								<option>1966</option>
								<option>1965</option>
								<option>1964</option>
								<option>1963</option>
								<option>1962</option>
								<option>1961</option>
								<option>1960</option>
								<option>1959</option>
								<option>1958</option>
								<option>1957</option>
								<option>1956</option>
								<option>1955</option>
								<option>1954</option>
								<option>1953</option>
								<option>1952</option>
								<option>1951</option>
								<option>1950</option>
								<option>1949</option>
								<option>1948</option>
								<option>1947</option>
								<option>1946</option>
								<option>1945</option>
								<option>1944</option>
								<option>1943</option>
								<option>1942</option>
								<option>1941</option>
								<option>1940</option>
								<option>1939</option>
								<option>1938</option>
								<option>1937</option>
								<option>1936</option>
								<option>1935</option>
								<option>1934</option>
								<option>1933</option>
								<option>1932</option>
								<option>1931</option>
								<option>1930</option>
								<option>1929</option>
								<option>1928</option>
								<option>1927</option>
								<option>1926</option>
								<option>1925</option>
								<option>1924</option>
								<option>1923</option>
								<option>1922</option>
								<option>1921</option>
								<option>1920</option>
							</select>
						</div>
						<div class="address">
							<span>Telefono (opcional)</span>
							<input id="inpTelefono" type="text" name="txtTelefono" value="837464525" disabled>
						</div>
						<div class="address new">
							<input id="inpSubmit" name="inpSubmit" type="submit" value="Guardar" disabled>
						</div>
					</form>
				</div>
			</div>
			<div class="divImgAvatar">
				<div class="divBtnEditar">
					<input type="file" accept="image/*" name="inpImgNoti" onchange="loadFile(event)" />
				</div>
				<img src="images/mg6.jpg" class="imgPerfil" id="imgOutput">
				<script>
					var loadFile = function (event) {
						var output = document.getElementById('imgOutput');
						output.src = URL.createObjectURL(event.target.files[0]);
					};
				</script>
				<div class="address new">
					<input name="inpSubmitAvatar" type="submit" value="Actualizar">
				</div>
			</div>
		</div>
	</div>
	<!--//end-main-->

	<?php
	include_once("footer.php");
	?>

	<script type="text/javascript">
		function functionIsDisabled(param1) {
			document.getElementById("inpNombre").disabled = false;
			document.getElementById("inpApellidos").disabled = false;
			document.getElementById("inpEmail").disabled = false;
			document.getElementById("inpContrasenia").disabled = false;
			document.getElementById("inpTelefono").disabled = false;
			document.getElementById("inpNacDia").disabled = false;
			document.getElementById("inpNacMes").disabled = false;
			document.getElementById("inpNacAnio").disabled = false;
			document.getElementById("inpSubmit").disabled = false;
			// document.getElementById("inpEditar").style.display = "none";
			return false;
		}
	</script>
</body>
</html>