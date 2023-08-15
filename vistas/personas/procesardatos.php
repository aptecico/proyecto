<?php
include("../../conexion/conexion.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$ciudad=$_POST['ciudad'];
$genero=$_POST['genero'];

$accion=$_REQUEST['accion'];

switch ($accion) {
	case 'Guardar':
		$sql="INSERT INTO personas (nombre,apellido,edad,genero,ciudad) VALUES ('$nombre','$apellido','$edad','$genero','$ciudad')";
			if(mysqli_query($conn,$sql)){
				echo "Los datos se ingresaron correctamente";
				header('Location: ./lista.php');
			}else{
				echo "Error ".$sql."<br>".mysqli_error($conn);
			}
		break;
	case 'Eliminar':
		$id=$_GET['id'];
		$sql="DELETE FROM PERSONAS WHERE id=$id";
		if(mysqli_query($conn,$sql)){
				echo "Los datos se Eliminaron correctamente";
				header('Location: ./lista.php');
			}else{
				echo "Error ".$sql."<br>".mysqli_error($conn);
			}
	break;

	case 'Actualizar':
		$id=$_POST['id'];
		$sql= "UPDATE personas SET nombre= '$nombre' , apellido='$apellido', edad='$edad', genero='$genero',ciudad='$ciudad' where id=$id";
			if(mysqli_query($conn,$sql)){
				echo "Los datos se Actualizaron correctamente";
				header('Location: ./lista.php?up=s');
			}else{
				echo "Error ".$sql."<br>".mysqli_error($conn);
			}
	break;
	
	default:
		# code...
		break;
}



mysqli_close($conn);
?>