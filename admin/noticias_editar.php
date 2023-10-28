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
    <title>Admin</title>
    <link href="../lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="../lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


</head>

<body>
    <div class="container">

        <?php require("menu.php"); ?>
        <h1>Noticias Editar</h1>
        <?php

        require("conexion.php");
        $conexion = mysqli_connect($server_db, $usuario_db, $password_db)
            or die("No se puede conectar con el servidor");
        mysqli_select_db($conexion, $base_db)
            or die("No se puede seleccionar la base de datos");
        $instruccion = "select * from noticias where id_noticia=$id_noticia";

        $consulta = mysqli_query($conexion, $instruccion) or die("no pudo consultar");
        $resultado = mysqli_fetch_array($consulta);

        if (isset($mensaje))
            print("<h3 style='color:#cc00ff'>" . $mensaje . "</h3>");
        ?>



        <form action="noticias_editar_guardar.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo" required value="<?php print($resultado['titulo']); ?>">
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Fecha" required value="<?php print($resultado['fecha']); ?>">
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" required value="<?php print($resultado['autor']); ?>">
            </div>
            <div class="mb-3">
                <label for="copete" class="form-label">Copete</label>
                <input type="text" class="form-control" id="copete" name="copete" required value="<?php print($resultado['copete']); ?>">
            </div>
            <div class="mb-3">
                <label for="cuerpo" class="form-label">Cuerpo</label>
                <textarea rows="10" class="form-control" id="cuerpo" name="cuerpo" required><?php print($resultado['cuerpo']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="imagen" name="imagen"></input>
                <img src="../imagenes_subidas/<?php print($resultado['imagen']); ?>" width="80px">
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <select class="form-control" id="categoria" name="categoria" required>
                    <option value="Fauna" <?php if ($resultado['categoria'] == "Fauna") print("selected"); ?>>Fauna</option>
                    <option value="Moda" <?php if ($resultado['categoria'] == "Moda") print("selected"); ?>>Moda</option>
                    <option value="Sociales" <?php if ($resultado['categoria'] == "Sociales") print("selected"); ?>>Sociales</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="hidden" name="imagencita" value="<?php print($resultado['imagen']); ?>">
                <input type="hidden" name="id_noticia" value="<?php print($resultado['id_noticia']); ?>">
                <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="GUARDAR">
                <a href="noticias.php" class="btn btn-info">Regresar</a>
            </div>


        </form>



    </div>

    <div id="librerias">
        <script>
            $(document).ready(function() {
                $('#cuerpo').summernote({
                    height: 200
                });
            });
        </script>

    </div>
</body>

</html>