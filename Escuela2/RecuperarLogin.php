<?php
session_start();
include 'PHP/Tools.php';
$usuario=$_POST['Usuario'];
$_SESSION['Usuario']=$_POST['Usuario'];

//Conectar a la Base de Datos
$conexion = Conecta();
$consulta="SELECT contrasena FROM usuario WHERE id_user='$usuario'";
$resultado=pg_query($conexion,$consulta);
$filas=pg_num_rows($resultado);
$fila=pg_fetch_assoc($resultado);

if($filas>0){
    echo "Tu contraseña es:".$fila['contrasena']." ";
  ?> 
  <a class="active" href="index.html"><center><H4>Regresar a Inicio</H4></center0></a> 
  <?php
}
	
pg_free_result($resultado);
pg_close($conexion);
?>

