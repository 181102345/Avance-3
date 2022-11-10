<?php

include_once('validar.php');
$usuario=$_POST['usuario'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];

//guardar datos
$conectar=conn();
$sql="INSERT INTO usuarios (Usuario, Email, Contraseña)
VALUES ('$usuario', '$email', '$contraseña')";
$resul = mysqli_query($conectar , $sql)or trigger_error("Query failed! SQL- ERROR: ".mysqli_error($conectar));

?>
