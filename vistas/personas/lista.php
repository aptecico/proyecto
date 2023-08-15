<?php
include("../../conexion/conexion.php");
 $consulta="SELECT * FROM personas";

 $resultado=mysqli_query($conn,$consulta);

if($genero=='m')$genero='Masculino';
if($genero=='f')$genero='Femenino';
if($genero=='o')$genero='Otros';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Proyecto</title>
	<link rel="stylesheet" type="text/css" href="../../plugins/bootstrap4/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<a class="btn btn-warning" href="./">Atrás</a>
		<h3>Lista de Personas</h3>
		<?php
		if(isset($_GET['up']) && $_GET['up']=='s'){
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong> El registro se actualizó correctamente</strong> 
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>';
		}
		?>
		<table class="table">
			<thead class="thead-light"><!-- cabecera de la tabla-->
				<tr><!--Fila-->
					<th>#</th>
					<th>Nombre</th><!--Columna-->
					<th>Apellido</th>
					<th>Edad</th>
					<th>Genero</th>
					<th>Ciudad</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$htm='';
				$ndatos=1;
					while ( $columna=mysqli_fetch_array($resultado)) {
							if($columna['genero']=='m')$columna['genero']='Masculino';
							if($columna['genero']=='f')$columna['genero']='Femenino';
							if($columna['genero']=='o')$columna['genero']='Otros';
						$htm.='<tr><!--Fila-->';
							$htm.='<td>'.$ndatos.'</td>';
							$htm.='<td>'.$columna['nombre'].'</td>';
							$htm.='<td>'.$columna['apellido'].'</td>';
							$htm.='<td>'.$columna['edad'].'</td>';
							$htm.='<td>'.$columna['genero'].'</td>';
							$htm.='<td>'.$columna['ciudad'].'</td>';
							$htm.='<td><a class="btn btn-info" href="./index.php?id='.$columna['id'].'">Actualizar</a><a class="btn btn-danger" href="procesardatos.php?accion=Eliminar&id='.$columna['id'].'" onClick="return confirm(\'Eliminar elemento\');">Eliminar</a></td>';
						$htm.='</tr>';
						$ndatos++;
					}
					echo $htm;
				?>
			</tbody>
		</table>
	</div>
<!--scripts-->
<script type="text/javascript" src="../../plugins/bootstrap4/js/jquery3.5min.js"></script>
	<script type="text/javascript" src="../../plugins/bootstrap4/js/popper.min.js"></script>
	<script type="text/javascript" src="../../plugins/bootstrap4/js/bootstrap.js"></script>
</body>
</html>