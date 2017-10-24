<?php
    
    $nombre = $_POST['name'];
    $email = $_POST['mail'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    
    /* Vinculando la conexión*/
    require("Conexion.php");
    
    /* Validando el email*/
    $checkemail = mysqli_query($mysqli,"SELECT * FROM login WHERE email='$email'");
        $check_mail = mysqli_num_rows($checkemail);
            if($pass==$pass2){
                if($check_mail>0){
                    echo '<script language="javascript">alert("El usuario ya existe, por favor verificar sus datos");</script>';
                }else{
                    mysqli_query($mysqli,"INSERT INTO login(user,password,email,pasadmin,rol) VALUES('$nombre','$pass','$email','','2')");
                    
                    echo '<script language="javascript">alert("Usuario registrado correctamente");</script>';
                    echo "<script languague='javascript'>location.href='Login.php'</script>";
                }
            }else{
                
                echo "Las Claves son incorrectas";
            }
    



