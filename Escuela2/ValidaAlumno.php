<?php 
include 'PHP/Tools.php';
$txtMatricula=$_POST['txtMatricula'];
$txtNombre=$_POST['txtNombre'];
$txtApePat=$_POST['txtApePat'];
$txtApeMat=$_POST['txtApeMat'];
$txtTelefono=$_POST['txtTelefono'];
$txtDireccion=$_POST['txtDireccion'];
$txtCP=$_POST['txtCP'];
$opSexo=$_POST['opSexo'];
$txtCarrera=$_POST['txtCarrera'];

if(!empty($_POST['txtMatricula']) and
!empty($_POST['txtNombre'])and
!empty($_POST['txtApePat'])and
!empty($_POST['txtApeMat'])and
!empty($_POST['txtTelefono'])and
!empty($_POST['txtDireccion'])and
!empty($_POST['txtCP'])and
!empty($_POST['opSexo'])and!empty($_POST['txtCarrera'])
){
    $con=Conecta();
	$C1="SELECT * FROM alumno where matricula='$txtMatricula'";
	$R1=pg_query($con,$C1);
	$NF=pg_num_rows($R1);
	$F=pg_fetch_assoc($R1);
	if($NF>0){
	     echo "El Alumno con la Matricula: ".$txtMatricula." Ya esta Registrado <br>";
		 echo "Es el Alumno: ".$F['nombre']." ".$F['apepat']." ".$F['apemat']."<br>";
		 ?>
		<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=MenuAdministrador.php">
	<?php
	}else{
		$C2="INSERT INTO alumno
		(matricula,nombre,apepat,apemat,telefono,direccion,cp,genero,id_lic) 
		VALUES
		('$txtMatricula','$txtNombre','$txtApePat','$txtApeMat','$txtTelefono','$txtDireccion','$txtCP','$opSexo','$txtCarrera')";
		$R2=pg_query($con,$C2);
		$C3="INSERT INTO usuario (id_user,contrasena,tipo_user)
		VALUES ('$txtMatricula','$txtMatricula','ALUMNO')";
		$R3=pg_query($con,$C3);
		echo "Alumno Registrado Correctamente";
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

	