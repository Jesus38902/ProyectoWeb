<?php
/* Funcion que nos permite establecer la conexion a la BD*/
session_start();
include 'PHP/Tools.php';
$usuario=$_SESSION["Usuario"];
$conexion = Conecta();
$consulta="SELECT nombre,apepat,apemat FROM alumno WHERE matricula='$usuario'";
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
      <td bgcolor="#FFF"><strong><font color="#000" face="Arial, Helvetica" size="4">Sistema Pagos Escolares</font></strong></td>
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
		    /*Funcion por default de Inicio*/
			$(function(){
					  $.post("logica.php",function(datos){
					  $("#formulario").html(datos);
			    });
			});
		    /*Funcion para mostrar el Inicio por medio del boton 1*/
			$(function(){
			    $("#btn-1").on("click",function(){
				      //$("#formulario").text("HOLA BIENVENIDO");
					  $.post("logica.php",function(datos){
					  $("#formulario").html(datos);
					});
			    });
			});
		    /*Funcion para mostrar la ficha de pago*/
			$(function(){
			    $("#btn-2").on("click",function(){
				      $("#formulario").html("<center><embed src=Ficha.php type=application/pdf width=800 height=400></embed></center>");
			    });
			});
			/*Funcion para mostrar ficha de titulacion*/
			$(function(){
			    $("#btn-9").on("click",function(){
				      $("#formulario").html("<center><embed src=FichaTitulo.php type=application/pdf width=800 height=400></embed></center>");
			    });
			});
			/*Funcion para mostrar los Pagos Realizados*/
			$(function(){
				$("#btn-3").on("click",function(){
					$.post("PHP/RegistroPagosPagados.php",function(datos){
					$("#formulario").html(datos);
					});
				});
			});
			/*Funcion para mostrar los Pagos Adeudados*/
			$(function(){
				$("#btn-4").on("click",function(){
					$.post("PHP/RegistroPagosNoPagados.php",function(datos){
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
			/*Funcion para mostrar la informacion de Ayuda*/
			$(function(){
				$("#btn-6").on("click",function(){
					$.post("PHP/RegistroAlumnos.php",function(datos){
					$("#formulario").html(datos);
					});
				});
			});
			/*Funcion para Solicitar Constancia*/
			$(function(){
				$("#btn-10").on("click",function(){
					$.post("Formularios/FormularioSolicitarConstancia.html",function(datos){
					$("#formulario").html(datos);
					});
				});
			});
	/*Formulario que permite al alumno poder generar ficha de Titulacion*/
            $(function(){
                $("#btn-7").on("click",function(){
                    $.post("Formularios/FormularioSolicitarTitulo.html",function(datos){
                        $("#formulario").html(datos);
                    });
                });
            });
	/* Funcion que permite al Alumno poder ver su reticula de materias*/
			$(function(){
				$("#btn-15").on("click",function(){
					$.post("PHP/MostrarReticula.php",function(datos){
					$("#formulario").html(datos);
					});
				});
			});
/* Funcion que permite al alumno poder ver su horario actual*/
		$(function(){
				$("#btn-16").on("click",function(){
					$.post("MostrarHorario.php",function(datos){
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
					<a><button type="button" id="btn-7">Generar Recibo Titulo</button></a>
				</li>
				<li>
					<a><button type="button" id="btn-10">Solicitar Constancia</button></a>				
				</li>
				<li>
					<a><button type="button" id="btn-15">Mostrar Reticula</button></a>				
				</li>
				<li>
					<li>
					<a><button type="button" id="btn-16">Consultar Horario Actual</button></a>				
				</li>
				<li>
					<li>
					<a><button type="button" id="btn-5">Cambio de Password</button></a>				
				</li>
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
