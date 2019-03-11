<?php 
	require 'conexion.php';
	require 'encriptar.php';
	$nombres 	= $_POST['nombres'];
	$apellidos  = $_POST['apellidos'];
	$email 		= $_POST['email'];
	$password 	= $_POST['password1'];
	$sexo 		= $_POST['sexo'];
	$fecha_nac  = $_POST['fecha_nac'];
	$permiso = 0;
	date_default_timezone_set('America/Tijuana');
	$log_registro = Date("Y-m-d G:i:s");
	/*
	echo "nombres: ".$nombres;
	echo "<br />";
	echo "apellidos: ".$apellidos;
	echo "<br />";
	echo "email: ".$email;
	echo "<br />";
	echo "password: ".$password;
	echo "<br />";
	echo "password_encript: ".encriptar($password);
	echo "<br />";
	echo "sexo: ".$sexo;
	echo "<br />";
	echo "fecha_nac: ".$fecha_nac;
	echo "<br />";	
	*/
	// echo mysqli_query($con, "SELECT CURRENT_TIMESTAMP()");
	mysqli_query($con, "CALL addUser('".$nombres."', '".$apellidos."', '".$email."', '".encriptar($password)."', ".$sexo.", '".$fecha_nac."', '".$log_registro."', ".$permiso.", '".$log_registro."')")or die("Error".mysqli_error($con));
	header("Location: ../index.php");

 ?>