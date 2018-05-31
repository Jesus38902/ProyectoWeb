<?php 
include 'PHP/Tools.php';
$txtClave=$_POST['txtClave'];
$txtDescripcion = $_POST['txtDescripcion'];
$txtCantidad = $_POST['txtCantidad'];

if(!empty($_POST['txtClave']) and !empty($_POST['txtDescripcion']) and !empty($_POST['txtCantidad'])){
	$conexion = Conecta();
	$consulta="INSERT INTO concepto (id_concepto,descripcion,cantidad) VALUES ('$txtClave','$txtDescripcion','$txtCantidad')";
	$resultado=pg_query($conexion,$consulta);
	pg_free_result($resultado);
	pg_close($conexion);
	echo "Concepto de Pago Guardado Correctamente";
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