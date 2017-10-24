<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:Login.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:Web.php");
}
?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>ADMINISTRACIÓN</title>
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
                            <form action="" class="navbar-search form-inline" style="margin-top:6px">
                            </form>
                            <ul class="nav pull-right">
                                <li><a href="">Bienvenido(a)<strong><?php echo $_SESSION['user'];?></strong> </a></li>
                                <li><a href="Desconectar.php">Cerrar Sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="span12">
                    <div class="caption">
                        <h2>Administración de Usuarios</h2>
                        <div class="well well-small">
                            <hr class="soft"/>
                            <h4>Registro</h4>
                            <div class="row-fluid">
                                <!-- Mostrará los nombres de la tabla que se mostrará en pantalla-->
                                <?php
                                    // Importar conexión
                                    require("Conexion.php");
                                    $sql=("SELECT * FROM login"); // Seleccionando la tabla
                                    
                                    // Consulta 
                                    $query= mysqli_query($mysqli,$sql);
                                    
                                    //Mostrar datos
                                    
                                    echo "<table border='1'; class='table table-hover';>";
                                        echo "<tr class='warning'>";
                                            echo "<td>Id</td>";
                                            echo "<td>Usaurio</td>";
                                            echo "<td>Password</td>";
                                            echo "<td>Correo</td>";
                                            echo "<td>Password del administrador</td>";
                                            echo "<td>Editar</td>";
                                            echo "<td>Borrar</td>";
                                        echo "</tr>"; 
                                ?>
                                <!-- Mostrara los datos en pantalla en la tabla-->
                                <?php
                                    //Arreglo WHILEW
                                    while ($arreglo=mysqli_fetch_array($query)){
                                        echo "<tr class='success'>";
                                            echo "<td>$arreglo[0]</td>";
                                            echo "<td>$arreglo[1]</td>";
                                            echo "<td>$arreglo[2]</td>";
                                            echo "<td>$arreglo[3]</td>";
                                            echo "<td>$arreglo[4]</td>";
                                            
                                            echo "<td><a href='Actualizar.php?id=$arreglo[0]'><img src='Fotos/actualizar.gif' class='img-rounded'></td>";
                                            echo "<td><a href='Admin.php?id=$arreglo[0]&idborrar=2'><img src='Fotos/eliminar.png' class='img-rounded'/></a></td>";
                                            
                                        echo "</tr>";    
                                    }
                                    echo "</table>";
                                    // Metodo para eliminar usuarios del administrador
                                    
                                    extract($_GET);
                                        if(@$idborrar==2){
                                            $delete="DELETE * FROM login WHERE id='$id'";
                                            $resbo=mysqli_query($mysqli,$delete);
                                                echo '<script>alert("Registro Eliminado")</script>';
                                                echo "<script>location.href='admin.php'</script>";
                                            
                                        }
                                ?>
                                <div class="span8">
                                    
                                </div> 
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer-->
            <hr class="soften"/>
            <footer class="footer">
                <hr class="soften"/>
                <p>&copy;  Carolina Mella 2017<br/><br/></p>
            </footer>
        </div>
        <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
