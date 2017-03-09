<!DOCTYPE HTML>
<?  error_reporting(E_ALL); ?>
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
				<form>						
					<div class="address">
						<span>Título</span>
						<input class="inpTitulo" type="text" name="txtTitulo" autofocus="true" required="">
					</div>
					<div class="address">
						<span>Sección</span>
						<select class= "selectSeccion" name="txtSeccion" tabindex="1" required="">
							<option>Negocios</option>
							<option>Internacional</option>
							<option>Videojuegos</option>
							<option>Niggas in da 'hood</option>
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
						<span>Fecha de publicación</span>
						<select name="txtNacDia" tabindex="3" required="">
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
						<select name="txtNacMes" tabindex="4" required="">
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
						<select name="txtNacAnio" tabindex="5" required="">
							<option>2017</option>
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
						<span>Autor</span>
						<input class="inpAutor" type="text" name="txtAutor" tabindex="6" required="" disabled="" value="Dario Valdes">
					</div>
					<div class="address">
						<span>Texto completo</span>
						<textarea class="textareaTexto" type="text" tabindex="7" name="txtDescripcion" rows="20" required=""></textarea>
					</div>
					<div class="address new">
						<input name="inpGuardarNoti" type="submit" value="Guardar" tabindex="8">
					</div>
				</form>
			</div>
			<div class="divColumnRight">
				<h3>Subir nueva sección</h3>
				<form>	
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