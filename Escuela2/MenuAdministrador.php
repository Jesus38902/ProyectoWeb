<?php
session_start();
include 'PHP/Tools.php';
$usuario=$_SESSION["Usuario"];
$conexion = Conecta();
$consulta="SELECT tipo_user FROM usuario WHERE id_user='$usuario'";
$resultado=pg_query($conexion,$consulta);
$fila=pg_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Menu Administrador</title>
	    <link rel="stylesheet" type="text/css" href="CSS/Menu.css">
	    <link rel="stylesheet" type="text/css" href="CSS/botones.css">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="author" content="Laptop">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<script src="jquery.js"></script>
		<script>
		    /*Funcion para mostrar el Formulario de Alumnos*/
			$(function(){
				$("#btn-1").on("click",function(){
					$.post("Formularios/FormularioAlumno.html",function(datos){
					$("#formulario").html(datos);
					});
				});
			});
			
			/*Funcion para mostrar el Formulario de Licenciaturas*/
			$(function(){
				$("#btn-2").on("click",function(){
					$.post("Formularios/FormularioRegistroMateria.html",function(datos){
					$("#formulario").html(datos);
					});
				});
			});
			/*Funcion para mostrar el Formulario de Periodos*/
			$(function(){
				$("#btn-3").on("click",function(){
					$.post("Formularios/FormularioPeriodo.html",function(datos){
					$("#formulario").html(datos);
					});
				});
			});
			/*Funcion para mostrar el Formulario de Conceptos Pagos*/
			$(function(){
				$("#btn-4").on("click",function(){
					$.post("Formularios/FormularioConcepto.html",function(datos){
					$("#formulario").html(datos);
					});
				});
			});
			$(function(){
				$("#btn-5").on("click",function(){
					/*$.post("Formularios/FormularioRegistroPago.html",function(datos){*/
					$.post("buscar.html",function(datos){
					$("#buscar").html(datos);
					});
				});
			});
			
			/*Funcion para mostrar el Reporte de Pagos Realizados*/
			$(function(){
				$("#btn-6").on("click",function(){
					$.post("PHP/RegistroPagosPagadosAlumnos.php",function(datos){
					$("#formulario").html(datos);
					});
				});
			});
			
			/*Funcion para mostrar el Reporte de Pagos Atrasados*/
			$(function(){
				$("#btn-7").on("click",function(){
					$.post("PHP/RegistroPagosNoPagadosAlumnos.php",function(datos){
					$("#formulario").html(datos);
					});
				});
			});
			
			/*Funcion para Generar Fichas*/
			$(function(){
				$("#btn-8").on("click",function(){
					$.post("ControlSistema/AgregarMes.php",function(datos){
					$("#formulario").html(datos);
					});
				});
			});
			
			/*Funcion para mostrar el Reporte de Alumnos*/
			$(function(){
				$("#btn-9").on("click",function(){
					$.post("PHP/RegistroAlumnos.php",function(datos){
					$("#formulario").html(datos);
					});
				});
			});
			/* Funcion para mostrar el formulario de registro de Catedratico*/
			$(function(){
				$("#btn-10").on("click",function(){
					$.post("Formularios/FormularioCatedratico.html",function(datos){
						$("#formulario").html(datos);
					});
				});
			});
			/*Formulario para mostrar el formulario para cambios de datos Catedaticos*/
            $(function(){
                $("#btn-11").on("click",function(){
                    $.post("Formularios/FormularioModificaCatedratico.html",function(datos){
                        $("#formulario").html(datos);
                    });
                });
            });
			/*Funcion que despliega formulario para eliminar Catedratico*/
            $(function(){
                $("#btn-12").on("click",function(){
                    $.post("Formularios/FormularioEliminaCatedratico.html",function(datos){
                        $("#formulario").html(datos);
                    });
                });
            });
			/* Funcion que despliega formulario para Modificar Datos de Materia*/
            $(function(){
                $("#btn-13").on("click",function(){
                    $.post("Formularios/FormularioModificarMateria.html",function(datos){
                        $("#formulario").html(datos);
                    });
                });
            });
			/* Funcion que despliega formulario para Eliminar Materia de la Base de Datos*/
            $(function(){
                $("#btn-14").on("click",function(){
                    $.post("Formularios/FormularioEliminarMateria.html",function(datos){
                        $("#formulario").html(datos);
                    });
                });
            });
		</script>
	</head>

	<body>
		<center>
		<table border="0px" width="900px">
		  <tr>
		  <td bgcolor="#FFF"><strong><font color="#000" face="Arial, Helvetica" size="4">Sistema Pagos Escolares</font></strong></td>
		  <td bgcolor="#FFF" rowspan="2"><strong><font color="#000" face="Arial, Helvetica" size="3">Bienvenido:<?php
		  echo " ".$fila['tipo_user']?></strong></td>
		  </tr>
		  <tr>
		  <td bgcolor="#FFF"><strong><font color="#000" face="Arial, Helvetica" size="2">Acceso al sistema</font></strong></td>
		  </tr>
		</table>
		</center>
		<ul id="menu">
		<li><a href="">Inicio</a></li>
		<li>
			<a href="">Altas</a>
			<ul>
				<li>
					
					<a>Alumnos</a>
					<ul>
						<li><a><button type="button" id="btn-1">Dar Alta Alumnos</button></a></li>
						<li><a>Dar Baja Alumnos</a></li>
					</ul>				
				</li>
				<li>
					<a>Catedraticos</a>
					<ul>
						<li><a><button type="button" id="btn-10">Registrar Catedratico</button></a></li>
                        <li><a><button type="button" id="btn-12">Eliminar Catedratico</button></a></li>
                        <li><a><button type="button" id="btn-11">Modificar Catedratico</button></a></li>
					</ul>				
				</li>
				<li>
					<a>Materias</a>
					<ul>
						<li><a><button type="button" id="btn-2">Registrar Materia</button></a></li>
                        <li><a><button type="button" id="btn-13">Modificar Materia</button></a></li>
                        <li><a><button type="button" id="btn-14">Eliminar Materia</button></a></</li>
					</ul>				
				</li>
				<li>
					<a>Periodo</a>
					<ul>
						<li><a><button type="button" id="btn-3">Dar Alta Periodo</button></a></li>
					</ul>				
				</li>
				<li>
					<a>Concepto Pago</a>				
					<ul>
						<li><a><button type="button" id="btn-4">Dar Alta Concepto</button></a></li>
					</ul>	
				</li>
			</ul>
		</li>
		<li>
			<a>Pagos</a>
			<ul>
			    <li><a><button type="button" id="btn-5">Registro Pago</button></a></li>
				<li><a><button type="button" id="btn-6">Pagos Realizados</button></a></li>
				<li><a><button type="button" id="btn-7">Pagos Atrazados</button></a></li>
				<li><a><button type="button" id="btn-8">Generar Fichas</button></a></li>
			</ul>	
		</li>
		<li>
			<a>Reportes</a>	
			<ul>
				<li><a><button type="button" id="btn-9">Registro Alumnos</button></a></li>
			</ul>
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
