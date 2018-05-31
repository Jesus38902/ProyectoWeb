<?php
	include'Tools.php';/* Hacemos la conexion a ala base de datos*/
	$conexion=Conecta();
	$consulta="SELECT *  FROM alumno order by matricula";
	$resultado=pg_query($conexion,$consulta);
	$NF=pg_num_rows($resultado);
?>

<html>
	<head>
		<title>Registro de Alumnos</title>
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
	<script>
		    /*Funcion para generar PDF*/
			$(function(){
			    $("#b1").on("click",function(){
				      $(".descripcion").html("<center><embed src=ReporteAlumnosPDF.php type=application/pdf width=800 height=400></embed></center>");
			    });
			});
	</script>
	</head>
	<body>
	<div>
		<div class="descripcion">
		<center><button type="button" id="b1">Generar PDF</button></center>
		<center><h1>Registro de Alumnos</h1></center>
		<?php
		if( $NF>0){
		?>
		<table border="1px" align="center">
			<thead>
				<tr class="centradoAzul">
					<td>Matricula</td>
					<td>Nombre</td>
					<td>Apellido Paterno</td>
					<td>Apellido Materno</td>
					<td>Telefono</td>
					<td>Direccion</td>
				</tr>
				<tbody>
					<?php
					while($row=pg_fetch_assoc($resultado)){ ?>
						<tr>
							<td class="descripcion">
							    <?php echo $row['matricula'];?>
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
								<center><?php echo $row['telefono'];?></center>
							</td>
							<td class="descripcion">
								<center><?php echo $row['direccion'];?></center>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
         <?php
		}else{
		     echo "<center><h1>";
		     echo "No hay Alumnos Registrados";
		     echo "</h1></center>";
		}
		?>			
			
		</div>
		</center
		</div>
		</body>
	</html>	
	
