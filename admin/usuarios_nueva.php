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
    <title>Usuarios-nuevo</title>
    <link href="../lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../lib/bootstrap-5.3.2/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/styles.css">

</head>

<body>
    <div class="container">
        <?php require("menu.php"); ?>
        <h1 id="title-nuevo-usuario">Nuevo Usuario</h1>

        <form class="form-usuario" action="usuarios_nueva_guardar.php" method="post">

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
            </div>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" onkeyup="comprobar_usuario(this.value)" required>
                <span id="mensaje"></span>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>

         

            <div class="mb-3">
            
    <!-- Campos del formulario aquí -->
    <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar" onclick="this.disabled=true; this.form.submit();"></div>

        </form>


        <div id="librerias">
            <script>
                function comprobar_usuario(str) {

                    if (str.length == 0) {
                        document.getElementById("mensaje").innerHTML = "";

                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {

                                if (this.responseText == 1) {
                                    document.getElementById("enviar").disabled = true;
                                    document.getElementById("mensaje").innerHTML = "<p style='color:red'>Usuario No Disponible</p>";
                                } else {
                                    document.getElementById("enviar").disabled = false;
                                    document.getElementById("mensaje").innerHTML = "";
                                }
                            }
                        };



                        xmlhttp.open("GET", "ajax_comprobar_usuario.php?usuario=" + str, true);
                        xmlhttp.send();
                    }
                }
            </script>

        </div>

    </div>
    <script src="../lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</body>

</html>