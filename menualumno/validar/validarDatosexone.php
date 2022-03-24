<?php
//funcion para llamar el archivo conexion
require('conexion.php');
//variables del formulario
//el post sirve para colocar en la bd los datos


$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$programaedu = $_POST['programaedu'];
$fecha_ini = $_POST['fecha_ini'];
$fecha_ter = $_POST['fecha_ter'];
 

//Variable de insertar   con la funcion del insert into
//el mismo orden de los procedimientos almacenados
//en caso de no tener registros almacenados podemos colocar un insert into usuarios values
$insertar = "INSERT INTO exoneracion VALUES ('$matricula','$nombre','$ap_paterno','$ap_materno','$programaedu','$fecha_ini','$fecha_ter')";

$query = mysqli_query($conn, $insertar);

if ($query) {//en caso de error no se realiza la insertar 
     //echo "Error al realizar un registro";
     echo "<script> alert('El documento se descargará en breve');
     location.href='menualum.php';
     </script>";
}else{
    //require("empresa.php");
    echo "Error";
}

mysqli_close($conn);//cierre de la variable conn
?>