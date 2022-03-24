<?php
//funcion para llamar el archivo conexion
require('conexion.php');
//variables del formulario
//el post sirve para colocar en la bd los datos

//variables
$modalidad = $_POST['modalidad'];
$nombre_proyecto = $_POST['nombre_proyecto'];
$nombre_empresa = $_POST['nombre_empresa'];
$domicilio_empresa = $_POST['domicilio_empresa'];
$telefono_empresa = $_POST['telefono_empresa'];
$correo_empresa = $_POST['correo_empresa'];
$nombre_con_empresarial = $_POST['nombre_con_empresarial'];
$fecha_ini = $_POST['fecha_ini'];
$fecha_ter = $_POST['fecha_ter'];
$activ_desarrollar = $_POST['activ_desarrollar'];
 

//Variable de insertar   con la funcion del insert into
//el mismo orden de los procedimientos almacenados
//en caso de no tener registros almacenados podemos colocar un insert into usuarios values
$insertar = "INSERT INTO empresa VALUES ('$modalidad','$nombre_proyecto','$nombre_empresa','$domicilio_empresa','$telefono_empresa','$correo_empresa','$nombre_con_empresarial','$fecha_ini','$fecha_ter','$activ_desarrollar')";

//llamar conexion y método insertar
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
