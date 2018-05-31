<?php 
include 'PHP/Tools.php';
$txtFolBaucher=$_POST['txtFolBaucher'];
$txtSucursal=$_POST['txtSucursal'];
$txtImporte=$_POST['txtImporte'];
$txtFecha=$_POST['txtFecha'];
$txtFicha=$_POST['txtFicha'];





if(!empty($_POST['txtFolBaucher']) and
!empty($_POST['txtSucursal'])and
!empty($_POST['txtImporte'])and
!empty($_POST['txtFecha'])and
!empty($_POST['txtFicha'])
){
    $con=Conecta();
	$C1="SELECT * FROM baucher_pago where id_baucher='$txtFolBaucher'";
	$R1=pg_query($con,$C1);
	$NF=pg_num_rows($R1);
	$F=pg_fetch_assoc($R1);
	if($NF>0){
	     echo "El Baucher de pago con el Folio: ".$txtFolBaucher." Ya esta Registrado <br>";
		 ?>
		<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=MenuAdministrador.php">
	<?php
	}else{
	    ///INTRODUCIR VALORES EN LA TABLA baucher_pago
		$C2="INSERT INTO baucher_pago
		(id_baucher,sucursal,importe,fecha) 
		VALUES
		('$txtFolBaucher','$txtSucursal','$txtImporte','$txtFecha')";
		$R2=pg_query($con,$C2);
		///INTRODUCIR VALORES EN LA TABLA registro_baucher
		$C3="INSERT INTO registro_baucher (id_regbau,id_baucher)
		VALUES ('$txtFicha','$txtFolBaucher')";
		$R3=pg_query($con,$C3);
		///ACTUALIZAMOS LA TABLA pago_alumno
		$C4="update pago_alumno set id_estpago = '01' where id_pagoa = '$txtFicha'";
		$R4=pg_query($con,$C4);
		
		echo "Pago de Colegiatura Registrado Correctamente";
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
