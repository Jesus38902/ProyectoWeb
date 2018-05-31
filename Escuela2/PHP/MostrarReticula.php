<?php
/* Inciamos nuestra cnexion a la base de datos*/
session_start();
include 'Tools.php';
$usuario=$_SESSION["Usuario"];
$conexion = Conecta();/* Hacemos la consulta para poder ver la licenciatura  la cual pertenece*/
$consulta="SELECT id_lic FROM alumno WHERE matricula='$usuario'";
$resultado=pg_query($conexion,$consulta);
$fila=pg_fetch_assoc($resultado);/* Desplejamos el la reticula dependiendo del resultado de la consulta*/
/*print "<img src=IMG/".$fila['id_lic'].".png width=1000 height=800 >";*/
?> 

<img src="IMG/<?php echo ''.$fila['id_lic'].'' ?>.png" width="800px" height="800px">
