<!DOCTYPE HTML>
<?  error_reporting(E_ALL); ?>
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
                        <div class="divSeccion">
                            <h2 class="tituloSeccion">Nacional</h2>
                        </div>
                        <div class="divNoticia">	
                            <img class="imgNoticia" src="images/pic.jpg" alt="imgNiggas" />
                            <div class="datosNoticia">
                                <span class="txtTitulo">Lorem ipsum dolor sit amet,interdum ullamcorper consectetur </span>
                                <p class="txtDescripcion">Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                                <a class="leerMas" href="noticiaDetalle.php">Leer mas</a>
                            </div>					
                        </div>
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