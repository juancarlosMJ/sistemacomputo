<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$t=$_POST['telefono'];
	$no=$_POST['nombreequipo'];
	$mo=$_POST['modelo'];
	$nu=$_POST['numeroserie'];


	$sql="UPDATE t_computadora set nombre='$n',
								apellido='$a',
								email='$e',
								nombreequipo='$no',
								modelo='$mo',
								numeroserie='$nu'
				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>

