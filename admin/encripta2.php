<?php
function encrypt($string, $key) {
   $result = '';
   for($i=0; $i<strlen($string); $i++) {
      $char = substr($string, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)+ord($keychar));
      $result.=$char;
   }
   return base64_encode($result);
   
  
   
}
/*
function decrypt($string, $key) {
   $result = '';
   $string = base64_decode($string);
   for($i=0; $i<strlen($string); $i++) {
      $char = substr($string, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)-ord($keychar));
      $result.=$char;
   }
   return $result;
}*/
///modificar aqui

$usuario="noelia";
$password="noe";
$salt = substr ($usuario, 0, 3);

  $cadena_encriptada = encrypt($password,$salt);
 print($cadena_encriptada);
 //$cadena_desencriptada = decrypt($cadena_encriptada,$salt);
 //print("<br>".$cadena_desencriptada);


?>