<?php
include_once('validar2.php');
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];

//consultar datos
$consulta="SELECT*FROM usuarios where email='$email' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.html");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>