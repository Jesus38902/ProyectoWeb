<?php
include 'PHP/Tools.php';
$txtClave=$_POST['txtClave'];
$txtNombre=$_POST['txtNombre'];
$txtHorario=$_POST['txtHorario'];
$txtMaestro=$_POST['txtMaestro'];
$txtSalon=$_POST['txtSalon'];

if(!empty($txtClave)){
    $conexion = Conecta();
    $consulta="UPDATE materias
                SET nombre = '$txtNombre',
                    horario = '$txtHorario',
                    maestro = '$txtMaestro',
                    salon = '$txtSalon'
                where clave = '$txtClave'";
    $resultado=pg_query($conexion, $consulta);
    pg_free_result($resultado);
    pg_close($conexion);
    echo "Datos Modificados con Exito";
    ?>
    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=MenuAdministrador.php">
    <?php
}else{
    echo "Datos incorrectos";
    ?>
    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=MenuAdministrador.php">
    <?php
}
?>