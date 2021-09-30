<?php
require 'conexion.php';

$usuario=$_POST['users'];
$clave=$_POST['pass'];


$query="SELECT * FROM Usuarios WHERE users='$usuario' AND pass='$clave'";
$consulta=pg_query($con,$query);
$cantidad=pg_num_rows($consulta);
if($cantidad>0){
	session_start();
	$_SESSION['nombre_usuario']=$usuario;
	header("location:login_carga.php");
}else{
	echo "Datos Incorrectos";
	header('location:login.php');
}


?>