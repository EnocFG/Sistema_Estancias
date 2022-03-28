<?php
require '../../../conexion.php';

$Id_asesor = $_POST['Id_asesor'];

$Eliminar_asesor = "CALL eliminar_asesor('$Id_asesor')";

if (mysqli_query($conn, $Eliminar_asesor)) {
    header("Location: ../as-consultar.php", true, 301);
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
