<?php 
include 'PHP/Tools.php';
$txtClave=$_POST['txtClave'];
$txtDescripcion = $_POST['txtDescripcion'];

if(!empty($_POST['txtClave']) and $txtDescripcion){
	$conexion = Conecta();
	$consulta="INSERT INTO licenciatura (id_lic,descripcion) VALUES ('$txtClave','$txtDescripcion')";
	$resultado=pg_query($conexion,$consulta);
	pg_free_result($resultado);
	pg_close($conexion);
	echo "Licenciatura Guardada Correctamente";
	?>
	<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=MenuAdministrador.php">
	<?php
}else{
   echo "Datos incorrectos";
   ?>
	<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=MenuAAdministrador.php">
	<?php
}
?>