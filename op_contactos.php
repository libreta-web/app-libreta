<?php
include('conexion.php');
$link = Conectarse();

$msg="";

	// verificar que no alla ningun dato sin rellenar.
	if(!empty($_POST['nombre']) || !empty($_POST['apellido']) || !empty($_POST['telefono']) || !empty($_POST['email']) || !empty($_POST['direccion']))
	{

		$nombre = htmlentities($_POST['nombre']);
		$apellido = htmlentities($_POST['apellido']);
		$telefono = htmlentities($_POST['telefono']);
		$email = htmlentities($_POST['email']);
		$direccion = htmlentities($_POST['direccion']);

		// Insertamos los datos en la base de datos, si da algun error lo muestra. 
		$sql = "INSERT INTO personas (nombre, apellido, telefono, email, direccion) VALUES ('".$nombre."','".$apellido."','".$telefono."','".$email."','".$direccion."')";
		mysql_query($sql,$link) or die(mysql_error());
		// Mostramos un mensaje diciendo que todo salio como lo esperado
		$msg = "Persona agregada correctamente";
	} else { 
		// Si hay un dato sin rellenar mostramos el siguiente texto.
		$msg = "Falta rellenar algun dato"; 
	}
?>