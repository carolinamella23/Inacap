<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOGIN</title>
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Estilos/style.css">
    </head>
    <body>
        <div class="form">
            <ul class="tab-group">
                <li class="tab active"><a href="#signup">Registrar</a></li>
                <li class="tab"><a href="#login">Ingresar</a></li>
            </ul>
            <div class="tab-content">
                <!--Formulario de registro-->
                <div id="signup">
                    <h1>Registrate Gratis</h1>
                    <form action="Registro.php" method="post">
                        <div class="top-row">
                            <div class="field-wrap">
                                <label>
                                    Nombre<span class="req">*</span>
                                </label>
                                <input type="text" name="name" id="name" required autocomplete="off" />
                            </div>
                            <div class="field-wrap">
                                <label>
                                    Correo Electronico<span class="req">*</span>
                                </label> 
                                <input type="email" name="mail" id="mail" required autocomplete="off" />
                            </div>
                            <div class="field-wrap">
                                <label>
                                    Ingresa Clave<span class="req">*</span>
                                </label>
                                <input type="password" name="pass" id="pass" required autocomplete="off" />
                            </div>
                            <div class="field-wrap">
                                <label>
                                  Repite Clave<span class="req">*</span>  
                                </label>
                                <input type="password" name="pass2" id="pass2" required autocomplete="off" />
                            </div>
                        </div>
                        <button type="submit" class="button button-block"/>Registrar</button>
                    </form>
                </div>
                <!-- Login -->
                <div id="login">
                    <h1>Bienvenido(a) nuevamente</h1>
                    <form action="Validar.php" method="post">
                        <div class="field-wrap">
                            <label>
                                Correo Electronico<span class="req">*</span>
                            </label>
                            <input type="email" name="email2" id="email2" required autocomplete="off"/>
                        </div>
                        <div class="field-wrap">
                            <label>
                                Clave<span class="req">*</span>
                            </label>
                            <input type="password" name="pass3" id="pass3" required autocomplete="off"/>
                        </div>
                        <p class="forgot"><a href="#">Olvidaste tu clave?</a></p>
                        
                        <button type="submit" class="button button-block"/>Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
            /* Validación para ver si existe el usuario*/
                if(isset($_POST['sumbit'])){
                    require("Registro.php");
                }
        ?>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="Js/index.js"></script>
    </body>
</html>
