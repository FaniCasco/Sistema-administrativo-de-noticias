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
    
    $instruccion="delete from noticias where id_noticia='$id_noticia'";

    unlink("../imagenes_subidas/".$imagen);
    $consulta=mysqli_query($conexion,$instruccion);
    
    mysqli_close($conexion);
    header("location:noticias.php?mensaje=Noticia guardada");
?>  