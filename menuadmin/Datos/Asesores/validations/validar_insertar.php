<?php
require '../../../conexion.php';
$Nombre_asesor = $_POST['Nombre_asesor'];
$Ap_paterno_asesor = $_POST['Ap_paterno_asesor'];
$Ap_materno_asesor = $_POST['Ap_materno_asesor'];

$PA_ins_as = "CALL insertar_asesor('$Nombre_asesor',
'$Ap_paterno_asesor','$Ap_materno_asesor')";

if (mysqli_query($conn, $PA_ins_as)) {
    header("Location: ../as-consultar.php", true, 301);
    exit();
} else {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
    require '../as-insertar.php';
}
