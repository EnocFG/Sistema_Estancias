<?php
require '../../../conexion.php';
$Id_asesor = $_GET['Id_asesor'];
$Nombre_asesor = $_GET['Nombre_asesor'];
$Ap_paterno_asesor = $_GET['Ap_paterno_asesor'];
$Ap_materno_asesor = $_GET['Ap_materno_asesor'];

$Actualizar_asesor = "CALL actualizar_asesor('$Id_asesor','$Nombre_asesor','$Ap_paterno_asesor','$Ap_materno_asesor')";

if (mysqli_query($conn, $Actualizar_asesor)) {
    header("Location: ../as-consultar.php", true, 301);
    exit();
} else {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
}
