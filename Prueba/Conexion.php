<?php
$host 	= 'localhost';
$nom 	= 'root';
$pass 	= '1234';
$db 	= 'prueba';

$conn = mysqli_connect($host, $nom, $pass, $db);

if (!$conn) 
{
  die("Error en la conexión: " . mysqli_connect_error());
}	
?>