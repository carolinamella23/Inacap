<!DOCTYPE html>
<?php
    session_start();
if (@!$_SESSION['user']) {
	header("Location:Login.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ACTUALIZAR</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Carolina Mella">
        <!--Estilos-->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">   
    </head>
    <body data-offset="40" background="Fotos/Foto.jpg" style="background-attachment: fixed">
        <div class="container">
            <header class="header">
                <div class="row">
                    <?php
                        include("Include/Cabecera.php");
                    ?>
                </div>
            </header>
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <div class="nav-collapse">
                            <ul class="nav">
                                <li class=""><a href="Admin.php">ADMINISTRADOR DEL SITIO</a></li>
                            </ul>
                            <form action="#" class="navbar-search form-inline" style="margin-top:6px">
                            </form>
                            <ul class="nav pull-right">
                                <li><a href="">Bienvenido(a)<strong><?php echo $_SESSION['user'];?></strong> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
