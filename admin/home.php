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
    <title>Home</title>
    <link href="../lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/styles.css">


</head>

<body>
   <div class="container-fluid">
        <?php require("menu.php"); ?>
    </div>
    


    <script src="../lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>