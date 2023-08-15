<?php
include('../../conexion/conexion.php'); 
//isset es un método para verificar si una variable esta definida
	if(isset($_GET['id'])){
		$consulta="SELECT * FROM personas where id=".$_GET['id'];
 		$resultado=mysqli_query($conn,$consulta);
 		$datos = $resultado->fetch_array(MYSQLI_ASSOC);
 		//asignar los dato de las base de datos  a las variables

 		$id=$datos['id'];
 		$nombre=$datos['nombre'];
 		$apellido=$datos['apellido'];
 		$edad=$datos['edad'];
 		$genero=$datos['genero'];
 		$ciudad=$datos['ciudad'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Proyecto</title>
	<link rel="stylesheet" type="text/css" href="../../plugins/bootstrap4/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h3>Formulario de datos</h3>
		<a href="lista.php" class="btn btn-warning">Ver datos</a>
		<form action="procesardatos.php" method="post">
			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input class="form-control" type="text" name="nombre" id="nombre" value="<?php if(isset($nombre))echo $nombre; else echo ''; ?>">
			</div>
			<div class="form-group">
				<label for="apellido">Apellido:</label>
				<input class="form-control" type="text" name="apellido" id="apellido" value="<?php if(isset($apellido)) echo $apellido; else echo '';?>">
			</div>
			<div class="form-group">
				<label for="edad">Edad: </label>
				<input class="form-control" type="number" name="edad" id="edad" value="<?php if(isset($edad))echo $edad; else echo ''; ?>">
			</div>
			<div class="form-group">
				<label for="ciudad">Ciudad:</label>
				<input class="form-control" type="text" name="ciudad" id="ciudad" value="<?php if(isset($ciudad))echo $ciudad; else echo ''; ?>">
			</div>
			<div class="form-group">
				<label for="genero">Genero:</label>
				<select class="form-control" name="genero" id="genero">
					<option value="m" <?php if($genero=='m') echo "selected"; ?> >Masculino</option>
					<option value="f" <?php if($genero=='f') echo "selected"; ?> >Femenino</option>
					<option value="o" <?php if($genero=='o') echo "selected"; ?> >Otros</option>
				</select>
			</div>
			<input class="btn btn-primary" type="submit" name="accion" value="<?php if(isset($id)) echo 'Actualizar'; else echo 'Guardar'; ?>">
			<?php
				if (isset($id)) {
					echo '<input type="hidden" name="id" id="id" value="'.$id.'">';
				}
			?>
		</form>
	</div>

<!--scripts-->
<script type="text/javascript" src="../../plugins/bootstrap4/js/jquery3.5min.js"></script>
	<script type="text/javascript" src="../../plugins/bootstrap4/js/popper.min.js"></script>
	<script type="text/javascript" src="../../plugins/bootstrap4/js/bootstrap.js"></script>
</body>
</html>