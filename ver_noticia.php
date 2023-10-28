<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver noticia</title>
    <link href="lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./admin/CSS/styles.css">


</head>

<body>
    <div class="container-fluid">
        <?php // require("menu.php"); 
        ?>
        <div id="fecha">
            <?php
            // zona horaria para Argentina
            date_default_timezone_set('America/Argentina/Buenos_Aires');

            // Días de la semana 
            $dias_semana = [
                'Domingo',
                'Lunes',
                'Martes',
                'Miércoles',
                'Jueves',
                'Viernes',
                'Sábado'
            ];

            // Meses
            $meses = [
                'Enero',
                'Febrero',
                'Marzo',
                'Abril',
                'Mayo',
                'Junio',
                'Julio',
                'Agosto',
                'Septiembre',
                'Octubre',
                'Noviembre',
                'Diciembre'
            ];

            // Obtener el nombre del día, día del mes, nombre del mes y año de la fecha actual
            $nombre_dia = $dias_semana[date("w")];
            $dia_mes = date("j");
            $nombre_mes = $meses[date("n") - 1]; // Restamos 1 porque los índices de los meses comienzan en 0
            $año = date("Y");

            // Mostrar la fecha en el formato deseado
            echo "$nombre_dia $dia_mes de $nombre_mes de $año";
            ?>
        </div>
        <img class="logo" src="./images/logo.png" alt="logo de diario">

        <nav class="nav">

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://www.clarin.com/economia/dolar-hoy-dolar-blue-hoy-vivo-cotiza-precio-5-octubre-minuto-minuto_0_qTeOKjHs4x.html">Dólar blue hoy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.clarin.com/politica/voto-elecciones-2023-consulta-padron-electoral_0_RwE4OhewbK.html">Dónde voto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.clarin.com/juegos">Juegos</a>
            </li>
            <li>
                <a class="nav-link" href="https://el-periodico.com.ar/mascotas_c60cfb9c615f9b452215df1ed">Mascotas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./login.php">Salir</a>
            </li>

        </nav>



        <div class="row">
            <?php
            extract($_REQUEST);
            require("admin/conexion.php");
            $conexion = mysqli_connect($server_db, $usuario_db, $password_db)
                or die("No se puede conectar con el servidor");
            mysqli_select_db($conexion, $base_db)
                or die("No se puede seleccionar la base de datos");
            $instruccion = "select * from noticias  where id_noticia=" . $id_noticia;

            $consulta = mysqli_query($conexion, $instruccion) or die("no puedo consultar");

            $nfilas = mysqli_num_rows($consulta);
            for ($i = 0; $i < $nfilas; $i++) {
                $resultado = mysqli_fetch_array($consulta);
                $inst2 = "select * from usuarios where id_usuario=" . $resultado['id_usuario'];

                $consulta2 = mysqli_query($conexion, $inst2) or die("no puedo consultar");
                $autor = mysqli_fetch_array($consulta2);

                print('
            <div class="col-12">
                <div class="card">
                <img src="imagenes_subidas/' . $resultado['imagen'] . '" class="card-img-top img-noticia" alt="' . $resultado['titulo'] . '">
                    <div class="card-body">
                            <h2 class="card-title">' . $resultado['titulo'] . '</h2>
                        <h4 class="card-text">' . substr($resultado['copete'], 0, 200) . '</h4>
                        <p class="card-text">' . substr($resultado['cuerpo'], 0, 1000) . '</p>
                        <h4 class="card-text">' . $resultado['autor'] . '</h4>
                
                        <a href="javascript:history.back()" class="btn btn-volver">Volver</a>
                    </div>
                 </div>
            </div>           
            
            ');
            }
               

            mysqli_close($conexion);
            ?>
        </div>
        <footer>
            <p> - Sitio hecho por Fani Mariel Casco - <br>
                <a href="https://www.linkedin.com/in/fani-casco/"><img src="./images/linkedin.png" alt="icono de linkedin"></a>&nbsp;&nbsp;
                <a href="https://github.com/FaniCasco"><img src="./images/github.png" alt="icono de github"></a><br>
            <p>Argentina Programa 4.0 © 2023 - Php </p>
        </footer>
        <script src="lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>