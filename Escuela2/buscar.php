<html>
   <head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <style type="text/css">
   input {outline:none;border:0px;}
   #busqueda{background:#585858;color:#fff;}
   #cdr{padding:5px;background:gray;width:220px;border-radius:10px 0px 0px 10px;}
   </style>
   <h1>Ingresa el numero de Control </h1>
       <form method="post" action="buscar.php">
	       <input name="buscar" id="busqueda">
		   <input type="submit" value="Buscar Alumno" id="bus">
	   </form>
   </body>
</html>

<?php
    session_start();
	include 'PHP/Tools.php';
	$usua=$_SESSION["Usuario"];
	$usuario=$_POST["buscar"];
	$conexion=Conecta();
	if(!empty($_POST['buscar'])){
	    $consulta="select id_pagoa, id_periodo, mes from pago_alumno 
               where id_estpago='02' and matricula = '$usuario'";
	    $resultado=pg_query($conexion,$consulta);
	    $NF=pg_num_rows($resultado);
	    $C2="select nombre,apepat,apemat from alumno where matricula='$usuario'";
	    $R2=pg_query($conexion,$C2);
		//------------------------------
		?>
	<html>
	<head>
		<title>Registro Pagos Adeudados</title>
			<style type="text/css">
				/* Datagrid */

				.descripcion{
				  font-family: verdana;
				  font-size: 12px;
				}

				.centradoAzul{
				  font-family: verdana;
				  font-size: 15px;
				  text-align: center;
				  background-color: #66AEF6;
				  height: 40px;
				}
	      </style>
	</head>
	<body>
	<div>
		<div class="descripcion">
		<center><h1>Pagos Adeudados</h1></center>
		<?php
		$F=pg_fetch_assoc($R2);
		echo "<center><h1>";
		echo $F['nombre']." ".$F['apepat']." ".$F['apemat'];
		echo "</h1></center>";
		if($R2==0){
		  echo "Este Alumno no existe";
		}
		if( $NF>0){
		?>
		     <table border="1px" align="center">
			<thead>
				<tr class="centradoAzul">
					<td>Folio</td>
					<td>Periodo</td>
					<td>Mes</td>
				</tr>
				<tbody>
					<?php
					//id_pagoa, id_periodo, mes 
					while($row=pg_fetch_assoc($resultado)){ ?>
						<tr>
							<td class="descripcion">
							    <?php echo "F-".$row['id_pagoa'];?>
							</td>
							<td class="descripcion">
								<?php 
								if($row['id_periodo']=='01'){
								   echo "1 ENE-JUN";                                                                                           "";
								}else{
								    echo "2 AGO-DIC";                                                                                          "";
								}
								//echo $row['id_periodo'];
								?>
							</td>
							<td class="descripcion">
								<?php echo $row['mes'];?>
							</td>
						</tr>
					<?php 
					} 
					?>
				</tbody>
			</table>
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<link rel="stylesheet" href="CSS/RegistroAlumnos.css">
			<script language="javascript" type="text/javascript">
				 function mandar(){
				 document.f0.submit();
			 }    
		 </script>
			<title>Registros Pagos Bancarios</title>	
			</head>
			<body>
				  <div id="header">
					  <form name="formRegistro" action="ValidaPagoAlumno.php" method="post">
					  <br>
					  <br>
					  <br>
							<table border="0" align="center">
								<tr>
									<td class="centradoAzul" colspan="2">Registro Pago Bancario</td>
								</tr>
								<tr>
									 <td class="descripcion">Folio Baucher:</td>
									 <td class="valor">
										<input type="text" name="txtFolBaucher" maxlength="5" size="5"/>
									 </td>
								</tr>
								<tr>
									 <td class="descripcion">Sucursal:</td>
									 <td class="valor">
										<input type="text" name="txtSucursal" maxlength="50"/>
									 </td>
								</tr>
								<tr>
									 <td class="descripcion">Importe: </td>
									 <td class="valor">
										<input type="text" name="txtImporte" maxlength="10"/>
									 </td>
								</tr>
								<tr>
									 <td class="descripcion">Fecha Pago: </td>
									 <td class="valor">
										 <input type="text" name="txtFecha" maxlength="15"/>
									 </td>
								</tr>
								<tr>
									 <td class="descripcion">Folio Ficha:</td>
									 <td class="valor">
										 <input type="text" name="txtFicha" maxlength="6" size="15"/>
									 </td>
								</tr>
								<tr>
									<td class="centradoAzul" colspan="2">
										<input type="submit" name="btnRegistrar" value="Registrar Pago"/>
									</td>
								</tr>
							</table>
					  </form>
				  </div>
				  <h2><a href="MenuAdministrador.php">Regresar al Menu Principal</a></h2>
			</body>			
			</div>
			</center>
			</div>
			</body>
			</html>	
		
		
	<?php
	//------------------------------
	}else{
	    if( $R2==0){
	      echo "Te has equibocado al introducir datos o el Alumno no se encuentra";
		  }
	}
	}else{
	   echo "Area de busquda vacia favor de llenarla";
	   pg_close($conexion);
	}
?>