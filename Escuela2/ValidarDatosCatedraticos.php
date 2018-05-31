<?php
include 'PHP/Tools.php';
$txtMatricula = $_POST['txtMatricula'];
$txtNombre = $_POST['txtNombre'];
$txtApePat = $_POST['txtApePat'];
$txtApeMat = $_POST['txtApeMat'];
$txtTelefono = $_POST['txtTelefono'];
$txtDireccion = $_POST['txtDireccion'];
$txtCP = $_POST['txtCP'];
$txtCarrera = $_POST['txtCarrera'];


if(!empty($txtMatricula)){
    $conexion = Conecta();
    $consulta="UPDATE catedratico
                SET nombre = '$txtNombre',
                    apepat = '$txtApePat',
                    apemat = '$txtApeMat',
                    telefono = '$txtTelefono',
                    direccion = '$txtDireccion'
                where matricula = '$txtMatricula'";
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