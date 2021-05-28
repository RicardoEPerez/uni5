<?php
    //variables que se toman del post
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    
    //Conexion a DB
    include 'conexion.php';

    //inicio de sesion
    session_start();
    $_SESSION['usuario']=$usuario;
    
    //query para consultar el usario en DB
    $query="select * from usuarios where usuario = '$usuario' and contraseña='$contraseña'";
    $resultado = mysqli_query($db,$query);
    
    $registro = mysqli_num_rows($resultado);

    if($registro){
        header("location:bienvenido.php");
    }
    else{
        echo "<h1>Error de autentificación</h1>";
    }
    mysqli_close($db);
?>