<?php
include("conexion.php");
extract($_REQUEST);

$conexion = mysqli_connect($server_db, $usuario_db, $password_db)
    or die("Error, no se puede realizar la conexion al Servidor");
mysqli_select_db($conexion, $base_db)
    or die("No se puede seleecionar la Base de Datos");
mysqli_set_charset($conexion, "utf8");
$usuario_db = mysqli_real_escape_string($conexion,$usuario_db);
//$usuario=mysqli_real_escape_string($conexion,$usuario);

$sql = "select * from usuarios where usuario='$usuario_db'";
$res = mysqli_query($conexion, $sql);
$total = mysqli_num_rows($res);
if ($total > 0) {
    //echo true;  
    // El usuario existe en la Base de Datos  
    echo "1";
} else {
    // Ese nick esta libre  
    echo "0";
}
mysqli_close($conexion);
?>
