<?php
session_start();
extract($_REQUEST);
if (!isset($_SESSION['usuario_logueado']))
    header("location:index.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link href="../lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/styles.css">

</head>

<body>
    <div class="container-fluid">
        <?php require("menu.php"); ?>
        <h1>Usuarios</h1>
        <?php

        if (isset($mensaje))
            print("<h3 style='color:#cc00ff'>" . $mensaje . "</h3>");
        ?>
        <a href="usuarios_nueva.php" class="btn btn-primary">Nuevo Usuario</a>
    </div>
    <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
           
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        require("conexion.php");
        $conexion = mysqli_connect($server_db, $usuario_db, $password_db)
            or die("No se puede conectar con el servidor");
        mysqli_select_db($conexion, $base_db)
            or die("No se puede seleccionar la base de datos");
        $instruccion = "select * from usuarios  order by fecha desc";

        $consulta = mysqli_query($conexion, $instruccion) or die("no puedo consultar");

        while ($resultado = mysqli_fetch_array($consulta)) {
            print('
            <tr>
              <td>' . $resultado['nombre'] . '</td>
              <td>' . $resultado['apellido'] . '</td>
              <td>' . $resultado['usuario'] . '</td>
    
              <td><a href="usuarios_editar.php?id_usuario=' . $resultado['id_usuario'] . '" class="btn btn-primary">Editar</a></td>
              <td><a href="usuarios_eliminar.php?id_usuario=' . $resultado['id_usuario'] . '" class="btn btn-danger">Eliminar</a></td>
            </tr>
            ');
        }

        mysqli_close($conexion);

        ?>
    </table>

    <script src="../lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>

</html>
