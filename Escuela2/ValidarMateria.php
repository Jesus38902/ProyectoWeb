<?php 
include 'PHP/Tools.php';
$txtClave=$_POST['txtClave'];
$txtNombre=$_POST['txtNombre'];
$txtHorario=$_POST['txtHorario'];
$txtMaestro=$_POST['txtMaestro'];
$txtSalon=$_POST['txtSalon'];


if(!empty($_POST['txtClave']) and
!empty($_POST['txtNombre'])and
!empty($_POST['txtHorario'])and
!empty($_POST['txtMaestro'])and
!empty($_POST['txtSalon']))
{
    $con=Conecta();
	$C1="SELECT * FROM Materias where clave='$txtClave'";
	$R1=pg_query($con,$C1);
	$NF=pg_num_rows($R1);
	$F=pg_fetch_assoc($R1);
	if($NF>0){
	     echo "La Materia con la Clave: ".$txtMatricula." Ya esta Registrada <br>";
		 echo "Es la Materia: ".$F['nombre']." ".$F['horario']." ".$F['maestro']."<br>";
		 ?>
		<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=MenuAdministrador.php">
	<?php
	}else{
		$C2="INSERT INTO materias
		(clave,nombre,horario,maestro,salon) 
		VALUES
		('$txtClave','$txtNombre','$txtHorario','$txtMaestro','$txtSalon')";
		$R2=pg_query($con,$C2);
		?>
		<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=MenuAdministrador.php">
	<?php
	}
}else{
   echo "Datos incorrectos";
   ?>
	<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=MenuAdministrador.php">;
	<?php
pg_close($conexion);
}
?>