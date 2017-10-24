<!DOCTYPE html>
<?php
    session_start();
        if(@!$_SESSION['user']){
            header("location:Login.php");
        }elseif($_SESSION['rol']==2){
            header("location:Web.php");
        }
 ?>
<html lan="es">
    <head>
        <meta charset="UTF-8">
        <title>ADMINISTRADOR</title>
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
            <?php
                include("Include/Menu.php");
            ?>
            <div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="Fotos/pascomputacion.jpg" alt="" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>X-men</h4>
                                        <p>
                                            Disfruta la mejor calidad de la serie de películas que x.men
                                            tiene para ti.
                                        </p>
			</div>
		  </div>
		  <div class="item">
			<img src="Fotos/pastopografia.jpg" alt="" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Elenco</h4>
                                        <p>
                                            Conoce al elenco que esta detrás de esta espectacular saga.
                                        </p>
			</div>
		  </div>
		  <div class="item">
			<img src="Fotos/pasalgebra.jpg" alt="" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Comic</h4>
                                        <p>
                                           Disfruta además de todos los comic disponibles, solamente en este sitio.
                                        </p>
			</div>
		  </div>
		</div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
        </div>
         <h3>ACTIVIDADES DEL ADMINISTRADOR</h3>
         <div class="row" style="text-align:center">
             <div class="span2">
                 <div class="well well-small">
                     <h4>Administración</h4>
                     <a href="Usuarios.php"><small>Ingresar</small></a>  
                 </div> 
             </div>
             <div class="span2">
                 <div class="well well-small">
                     <h4>Ventas</h4>
                     <a href="Vetas.php"><small>Ingresar</small></a>
                 </div>
             </div>
              <div class="span2">
                 <div class="well well-small">
                     <h4>Factura</h4>
                     <a href="Factura.php"><small>Ingresar</small></a>
                 </div>
             </div>
               <div class="span2">
                 <div class="well well-small">
                     <h4>Contacto</h4>
                     <a href="Contacto.php"><small>Ingresar</small></a>
                 </div>
             </div>
              <div class="span2">
                 <div class="well well-small">
                     <h4>Galería</h4>
                     <a href="Galeria.php"><small>Ingresar</small></a>
                 </div>
             </div>
              <div class="span2">
                 <div class="well well-small">
                     <h4>Inventario</h4>
                     <a href="Inventario.php"><small>Ingresar</small></a>
                 </div>
             </div>
         </div>
         <center>
             <img src="Fotos/Tiburon.gif" alt="Tiburon">
         </center>    
        </div>
        <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
