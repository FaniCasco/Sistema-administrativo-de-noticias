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
    $fecha=date("Y-m-d");
    $id_usuario=$_SESSION['id_usuario'];
    //metodo 1
    $titulo=mysqli_real_escape_string($conexion,$titulo);
    $copete=mysqli_real_escape_string($conexion,$copete);
    $cuerpo=mysqli_real_escape_string($conexion,$cuerpo);

    //subir imagen
    $copiarArchivo=false;
    if(is_uploaded_file($_FILES['imagen']['tmp_name']))
    {
        $nombreDirectorio="../imagenes_subidas/";
        $idUnico=time();
        $nombrefichero=$idUnico. "-" .$_FILES['imagen']['name'];
        $copiarArchivo=true;
    }
        else 
         $nombrefichero="";
   
         if($copiarArchivo)
             move_uploaded_file($_FILES['imagen']['tmp_name'],$nombreDirectorio.$nombrefichero);
    
    $instruccion="insert into noticias (titulo,copete,cuerpo,imagen,categoria,id_usuario,fecha,autor) values ('$titulo','$copete','$cuerpo','$nombrefichero','$categoria','$id_usuario','$fecha','$autor')";
    $consulta=mysqli_query($conexion,$instruccion) 
            or die("no pudo insertar");
            
    //metodo 2
    /*$stmt=mysqli_prepare($conexion,"insert into noticias (titulo,copete,cuerpo,imagen,categoria,id_usuario,fecha) values (?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt,'sssssds', $titulo,$copete,$cuerpo,$imagen,$categoria,$id_usuario,$fecha);
   mysqli_stmt_execute($stmt);*/
    mysqli_close($conexion);
    header("location:noticias.php?mensaje=NOTICIA GUARDADA CON ÉXITO");
?>  