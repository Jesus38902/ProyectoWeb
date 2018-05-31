<?php
session_start();
include 'PHP/Tools.php';
$usuario=$_SESSION["Usuario"];
$conexion = Conecta();
$consulta="SELECT nombre,apepat,apemat FROM catedratico WHERE matricula='$usuario'";
$resultado=pg_query($conexion,$consulta);
$fila=pg_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sesion de Alumno</title>
		<link rel="stylesheet" type="text/css" href="CSS/Menu.css">
	    <link rel="stylesheet" type="text/css" href="CSS/botones.css">
	</head>
	<body>
	<center>
	<table border="0px" width="900px">
      <tr>
      <td bgcolor="#FFF"><strong><font color="#000" face="Arial, Helvetica" size="4">Sistema de Gestion</font></strong></td>
      <td bgcolor="#FFF" rowspan="2"><strong><font color="#000" face="Arial, Helvetica" size="3">Bienvenido:<?php
	  echo " ".$fila['nombre']." ".$fila['apepat']." ".$fila['apemat'] ?></strong></td>
      </tr>
      <tr>
      <td bgcolor="#FFF"><strong><font color="#000" face="Arial, Helvetica" size="2">Acceso al sistema</font></strong></td>
      </tr>
    </table>
	</center>
		<script src="jquery.js"></script>
		<script>
		    /* Funcion que permite al alumno poder ver su catedratico actual*/
		$(function(){
				$("#btn-16").on("click",function(){
					$.post("MostrarHorarioCatedratico.php",function(datos){
					$("#formulario").html(datos);
					});
				});
			});

			/*Funcion para mostrar el Formulario cambio de contrase�a*/
			$(function(){
				$("#btn-5").on("click",function(){
					$.post("Formularios/FormularioCambioPassword.html",function(datos){
					$("#formulario").html(datos);
					});
				});
			});
		</script>
	</head>

	<body>
		<ul id="menu">
		<li><a><button type="button" id="btn-1">INICIO</button></a></li>
		<li>
			<a>Servicios</a>
			<ul>
				<li>
					<a><button type="button" id="btn-16">Ver Horario Actual</button></a>				
				</li>
			</ul>
		</li>
		<li>
			<a>Utilerias</a>
			<ul>
			    <li><a><button type="button" id="btn-5">Cambio de Password</button></a></li>
			</ul>	
		</li>
		<li>
		    <a>AYUDA</a>
		</li>
		<li>
			<a href="index.html">Salir</a>	
		</li>
	    </ul><br><br><br><br>
	    <div id="buscar">
					
		</div>
		<div id="formulario">	
		</div>	
	</body>
</html>