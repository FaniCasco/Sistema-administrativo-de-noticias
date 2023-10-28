

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/styles.css">
    <title>Menu</title>
</head>
<body>

<div >
        
    </div>
<ul class="nav-menu">
    
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="noticias.php">Noticias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="usuarios_nueva.php">Registrarse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="usuarios.php">Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Salir</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php" target="_blank">Ver portada</a>
            </li>
            <li class="nav-item">
                <?php 
                       print("<a class='nav-link disabled'>".$_SESSION['nombre']." ".$_SESSION['apellido']."</a>");
                ?>
            </li>
        </ul>
</body>
</html>


