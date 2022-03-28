<?php
require '../../../conexion.php';
$id_empresa = $_GET['id_empresa'];
$Nombre_empresa = $_GET['Nombre_empresa'];
$Domicilio_empresa = $_GET['Domicilio_empresa'];
$Telefono_empresa = $_GET['Telefono_empresa'];
$Correo_electronico = $_GET['Correo_electronico'];

$actualizar_emp = "CALL actualizar_empresa('$id_empresa','$Nombre_empresa','$Domicilio_empresa','$Telefono_empresa','$Correo_electronico')";

if (mysqli_query($conn, $actualizar_emp)) {
header("Location: ../em-consultar.php", true, 301);
exit();

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
