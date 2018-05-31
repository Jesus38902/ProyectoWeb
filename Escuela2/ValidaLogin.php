<?php
session_start();
include 'PHP/Tools.php';
$usuario=$_POST['Usuario'];
$clave=$_POST['Clave'];
$_SESSION['Usuario']=$_POST['Usuario'];
$_SESSION['Clave']=$_POST['Clave'];

//Conectar a la Base de Datos
$conexion = Conecta();
$consulta="SELECT * FROM usuario WHERE id_user='$usuario' and contrasena='$clave'";
$resultado=pg_query($conexion,$consulta);
$filas=pg_num_rows($resultado);
$fila=pg_fetch_assoc($resultado);

if($filas>0){ /* Revisamos si es un administrador que llame al php que gurda los datos de menuadministrador*/
	if($fila['tipo_user']=='ADMINISTRADOR       '){
	?>   
	     <html>
		 <head>
         <script language="javascript" type="text/javascript">
         function mandar(){
         document.f0.submit();
         }    
		 </script>
		 <head>
		 <body onLoad="javascript:mandar();">
		 <form name="f0" id="f0" method="post" action="MenuAdministrador.php">
		 <input type="hidden" name="<?php echo (session_name()); ?>" value="<?php echo (session_id()); ?>">
		 </form>
		 </body>
	<?php
	}else{
	if($fila['tipo_user']=='ALUMNO              '){/* Una vez la consulta lo que hacemos es mostrar el menu referente a alumno*/
	?>
	     <html>
		 <head>
         <script language="javascript" type="text/javascript">
         function mandar(){
         document.f0.submit();
         }    
		 </script>
		 <head>
		 <body onLoad="javascript:mandar();">
		 <form name="f0" id="f0" method="post" action="MenuAlumno.php">
		 <input type="hidden" name="<?php echo (session_name()); ?>" value="<?php echo (session_id()); ?>">
		 </form>
		 </body>
		 <?php
    	}else{
				?>
			<html>
			<head>
			<script language="javascript" type="text/javascript">
			function mandar(){
			document.f0.submit();
			}    
			</script>
			<head>
			<body onLoad="javascript:mandar();">
			<form name="f0" id="f0" method="post" action="MenuCatedratico.php">
			<input type="hidden" name="<?php echo (session_name()); ?>" value="<?php echo (session_id()); ?>">
			</form>
			</body>
			<?php
		}
	}
}
else{
   ?>
   <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=ErrorSesion.html">
<?php
}
pg_free_result($resultado);
pg_close($conexion);
?>
