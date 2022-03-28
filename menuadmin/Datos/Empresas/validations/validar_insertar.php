<?php
require '../../../conexion.php';

$Nombre_empresa = $_POST['Nombre_empresa'];
$Domicilio_empresa = $_POST['Domicilio_empresa'];
$Telefono_empresa = $_POST['Telefono_empresa'];
$Correo_electronico = $_POST['Correo_electronico'];

$procedimiento = "CALL insertar_empresa('$Nombre_empresa',
    '$Domicilio_empresa','$Telefono_empresa','$Correo_electronico')";

if (mysqli_query($conn, $procedimiento)) {
header("Location: ../em-consultar.php", true, 301);
exit();

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



