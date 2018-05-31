<?php 
include 'PHP/Tools.php';
$txtClave=$_POST['txtClave'];
$txtPass = $_POST['txtPass'];
$txtPass2 = $_POST['txtPass2'];

if(!empty($_POST['txtClave']) and $txtPass==$txtPass2){
	$conexion = Conecta();
	$consulta="update usuario set contrasena = $txtPass where id_user = '$txtClave'";
	$resultado=pg_query($conexion,$consulta);
	pg_free_result($resultado);
	pg_close($conexion);
	echo "Contraseña Cambiada Correctamente";
	?>
	<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=MenuAlumno.php">
	<?php
}else{
   echo "Datos incorrectos";
   ?>
	<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=MenuAlumno.php">
	<?php
}
?>