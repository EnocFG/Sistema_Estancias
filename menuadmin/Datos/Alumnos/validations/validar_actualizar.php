<?php

include '../../conexion.php';

$Matricula = $_POST['Matricula'];
$Nombre_alumno = $_POST['Nombre_alumno'];
$Ap_paterno_alumno = $_POST['Ap_paterno_alumno'];
$Ap_materno_alumno = $_POST['Ap_materno_alumno'];
$Domicilio = $_POST['Domicilio'];
$Sexo = $_POST['Sexo'];
$IMSS = $_POST['IMSS'];
$CURP = $_POST['CURP'];
$Correo_electronico = $_POST['Correo_electronico'];
$id_grupo_fk = $_POST['id_grupo_fk'];
$id_cuatrimestre_fk = $_POST['id_cuatrimestre_fk'];
$id_campus_fk = $_POST['id_campus_fk'];

$Actualizar = "CALL actualizar_alumno('$Matricula','$Nombre_alumno','$Ap_paterno_alumno','$Ap_materno_alumno','$Domicilio','$Sexo','$IMSS','$CURP','$Correo_electronico','$id_grupo_fk','$id_cuatrimestre_fk','$id_campus_fk')";

if (mysqli_query($conn, $Actualizar)) {
    require '../Alumnos/menu_alumnos.php';
} else {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
}

?>
