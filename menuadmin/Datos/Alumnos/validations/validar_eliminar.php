<?php

include '../../../conexion.php';

$Matricula = $_POST['Matricula'];

$Eliminar = "CALL eliminar_alumno('$Matricula')";

if (mysqli_query($conn,$Eliminar)) {
   header("Location: ../al-consultar.php",TRUE, 301);
   exit();

}

?>