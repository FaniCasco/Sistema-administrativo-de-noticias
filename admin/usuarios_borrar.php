<?php
    session_start();
        extract($_REQUEST);
    if (!isset($_SESSION['usuario_logueado']))
        header("location:index.php");

    require("conexion.php");
    $conexion = mysqli_connect($server_db, $usuario_db, $password_db)
        or die("No se puede conectar con el servidor");
    mysqli_select_db($conexion, $base_db)
        or die("No se puede seleccionar la base de datos");
    
    $instruccion="delete from usuarios where id_usuario='$id_usuario'";

  
    $consulta=mysqli_query($conexion,$instruccion);
    
    mysqli_close($conexion);
    header("location:usuarios.php?mensaje=Usuario borrado");
?>   