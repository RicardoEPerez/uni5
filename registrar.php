<?php
    //variables del post
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    
    //Conexion a DB
    include 'conexion.php';

    
    //query para consultar el usario en DB
    $query="Insert into usuarios (usuario, contraseña) values ('$usuario', '$contraseña')";
    $resultado = mysqli_query($db,$query);
    
    if($resultado){
        header("location:index.html");
    }
    else{
        echo "<h1>Error de Registro</h1>";
    }
    mysqli_close($db);
?>