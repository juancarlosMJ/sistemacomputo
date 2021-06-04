<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$t=$_POST['telefono'];
	$no=$_POST['nombreequipo'];
	$mo=$_POST['modelo'];
	$nu=$_POST['numeroserie'];

	$sql="INSERT into t_computadora (nombre,apellido,email,telefono,nombreequipo,modelo,numeroserie)
								values ('$n','$a','$e','$t','$no','$mo','$nu')";
	echo $result=mysqli_query($conexion,$sql);

 ?>
 