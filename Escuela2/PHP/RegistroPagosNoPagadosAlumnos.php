<?php
    session_start();
	include'Tools.php';
	$usuario=$_SESSION["Usuario"];
	$conexion=Conecta();
	////CONSULTA PARA EXTRAER A LOS ALUMNOS QUE DEBEN MESES DE COLEGIATURA
	$consulta="select A.matricula,id_lic, A.nombre, A.apepat, A.apemat,PA.id_pagoa, PA.id_periodo, PA.mes
               from pago_alumno as PA join alumno as A on PA.matricula=A.matricula 
               where PA.id_estpago='02' order by A.matricula";
	$resultado=pg_query($conexion,$consulta);
	$NF=pg_num_rows($resultado);
?>

<html>
	<head>
		<title>Registro Pagos Adeudados de Alumnos</title>
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

}
	</style>
	</head>
	<body>
	<div>
		<div class="descripcion">
		<center><h1>Pagos Adeudados por Alumno</h1></center>
		<?php
		if( $NF>0){
		?>
		     <table border="1px" align="center">
			<thead>
				<tr class="centradoAzul">
					<td> Matricula </td>
					<td> Carrera </td>
					<td> Nombre </td>
					<td> Apellido Paterno </td>
					<td> Apellido Materno </td>
					<td> Ficha </td>
					<td> Periodo </td>
					<td> Mes </td>
				</tr>
				<tbody>
					<?php
					//id_pagoa, id_periodo, mes 
					while($row=pg_fetch_assoc($resultado)){ ?>
						<tr>
							<td class="descripcion">
							    <?php echo $row['matricula'];?>
							</td>
							<td class="descripcion">
							    <?php echo $row['id_lic'];?>
							</td>
							<td class="descripcion">
							    <?php echo $row['nombre'];?>
							</td>
							<td class="descripcion">
							    <?php echo $row['apepat'];?>
							</td>
							<td class="descripcion">
							    <?php echo $row['apemat'];?>
							</td>
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
					<?php } ?>
				</tbody>
			</table>	
		
		<?php
		}else{
		     echo "<center><h1>";
		     echo "No hay Pagos Atrasados";
		     echo "</h1></center>";
		}
		?>
		</div>
		</center>
		</div>
		</body>
	</html>	
	
