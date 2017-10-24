<?php
    
    session_start();
        require("Conexion.php");
        
        $email = $_POST['email2'];
        $pass = $_POST['pass3'];
        
        /* Validación de Administrador */
        $sql = mysqli_query($mysqli, "SELECT * FROM login WHERE email='$email'");
            if($gl=mysqli_fetch_assoc($sql)){
                if($pass==$gl['pasadmin']){
                    $_SESSION['id']=$gl['id'];
                    $_SESSION['user']=$gl['user'];
                    $_SESSION['rol']=$gl['rol'];
                    
                    echo '<script>alert("Bienvenido Administrador")</script>';
                    echo "<script>location.href='Admin.php'</script>";
                }
            }
        /* Validanción usuario standart*/
        $sql2 = mysqli_query($mysqli,"SELECT * FROM login WHERE email='$email'");
            if($vampire=mysqli_fetch_assoc($sql2)){
                if($pass==$vampire['password']){
                    $_SESSION['id']=$vampire['id'];
                    $_SESSION['user']=$vampire['user'];
                    $_SESSION['rol']=$vampire['rol'];
                    
                    header("location:Web.php");
                }else{
                    echo '<script>alert("Clave Incorrecta")</script>';
                    
                    echo "<script>location.href='Login.php'</script>";
                }
            }else{
                echo '<script>alert("El usuario no existe por favor,registrarse para vovler a iniciar")</script>';
                echo "<script>location.href='Login.php'</script>";
            }

