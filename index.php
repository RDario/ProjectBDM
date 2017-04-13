<!DOCTYPE HTML>
<?php  error_reporting(E_ALL);
include("conexionBD.php");
require_once "DVNoticia.php";
$connection = conectarBD();
error_reporting(E_ALL);
$querySelect = "CALL obtenerUltimasNoticiasValidadas()";
$resultQuery = mysqli_query($connection, $querySelect) or die (mysqli_error($connection));
mysqli_close($connection);

if ($resultQuery->num_rows) {
    $rows = $resultQuery->fetch_all(MYSQLI_ASSOC);
    $arrayNoticias = array();
    foreach ($rows as $row) {
        $arrayNoticias[count($arrayNoticias)] = new DVNoticia(
            $row['idNoticia'], 
            $row['titulo'], 
            $row['descripcion'], 
            $row['seccion'],
            '',
            $row['FechaReciente'],
            '',
            '',
            '',
            '');
    }
}
?>
<html>
<head>
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Noticias, Web Noticias, Telediario" />
</head>
<body>
    <?php
    include_once("header.php");
    ?>	
    <!--/start-main-->
    <div class="main-content">
        <div class="container">
            <div class="mag-inner">
                <div class="col-md-8 mag-innert-left" style="background-color: #f8f8f8;">
                    <!--/start-section-->
                    <?php
                    for ($i=0; $i < count($arrayNoticias); $i++) {
                        $elemento = $arrayNoticias[$i]; ?>
                        <div class="divSeccion">
                        <h2 class="tituloSeccion"><?php echo $elemento->seccion; ?></h2>
                        </div>
                        <div class="divNoticia">
                        <img class="imgNoticia" src="images/placeholder.png" alt="imgNiggas" />
                        <div class="datosNoticia">
                        <span class="txtTitulo"><?php echo $elemento->titulo; ?></span>
                        <p class="txtDescripcion"><?php echo $elemento->descripcion; ?></p>
                        <a class="leerMas" href="noticiaDetalle.php?id=<?php echo $elemento->idNoticia; ?>">Leer mas</a>
                        </div>
                        </div>
                    <?php } ?>
                    <!--//end-section-->
                </div>

                <div class="col-md-4 mag-inner-right">
                    <!--/start-sign-up-->
                    <div class="sign_main" style="background-color: #f8f8f8;">
                        <h4 class="side">Bloque opcional</h4>
                        <div class="sign_up">
                            <p class="sign">Registra tu correo para recibir noticias al minuto!</p>
                            <form>
                                <input type="text" class="text" value="Correo electronico">
                                <input type="submit" value="submit">
                            </form>
                        </div>
                    </div>
                    <!--//end-sign-up-->	
                </div>
            </div>
        </div>
    </div>
    <!--//end-main-->
    <?php
    include_once("footer.php");
    ?>
</body>
</html>