<?php

include '../../../conexion.php';

$Matricula = $_POST['Matricula'];

$Eliminar = "CALL eliminar_alumno('$Matricula')";

if (mysqli_query($conn,$Eliminar)) {
   require("../al-eliminar");
}

?>