<?php
//funcion para llamar el archivo conexion
require('conexion.php');
//variables del formulario
//el post sirve para colocar en la bd los datos


$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$ap_paterno = $_POST['appaterno'];
$ap_materno = $_POST['apmaterno'];
$domicilio = $_POST['domicilio'];
$sexo = $_POST['sexo'];
$imss = $_POST['imss'];
$curp = $_POST['curp'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$telefono_movil = $_POST['telefono_mov'];
$asesor = $_POST['asesor'];
 

//Variable de insertar   con la funcion del insert into
//el mismo orden de los procedimientos almacenados
//en caso de no tener registros almacenados podemos colocar un insert into usuarios values
$insertar = "INSERT INTO alumno VALUES ('$matricula','$nombre','$ap_paterno','$ap_materno','$domicilio','$sexo','$imss','$curp','$correo','$telefono','$telefono_movil','$asesor')";

$query = mysqli_query($conn, $insertar);

if ($query) {//en caso de error no se realiza la insertar 
     //echo "Error al realizar un registro";
     require("empresa.php");
}else{
    //require("empresa.php");
    echo "Error";
}

mysqli_close($conn);//cierre de la variable conn
?>
