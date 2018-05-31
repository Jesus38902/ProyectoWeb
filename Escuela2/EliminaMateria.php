<?php
include 'PHP/Tools.php';
$txtClave = $_POST['txtClave'];


if(!empty($txtClave)){
    $conexion = Conecta();
    $consulta="DELETE FROM materias WHERE clave = '$txtClave'";
    $resultado=pg_query($conexion, $consulta);
    pg_free_result($resultado);
    pg_close($conexion);
    echo "Materia Eliminada con Exito";
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