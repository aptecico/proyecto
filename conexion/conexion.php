<?php
$usuario='root';
$pw='';
$servidor='localhost';
$basedatos='proyectolp2';

$conn=mysqli_connect($servidor,$usuario,$pw) or die("No se puede conectar con el servidor $servidor del motor de base de datos ");
$db=mysqli_select_db($conn,$basedatos);
?>