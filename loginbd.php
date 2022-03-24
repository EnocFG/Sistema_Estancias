<?php
//variables para conectar base de datos
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "estancia_roles";

//se crea la variable para la conexión, con los parámetros solicitados
$conn = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);

//corrobora si hay conexión
if (!$conn){
    die("no hay conexión: ".mysqli_connect_error()); //muestra el eror en caso de que lo haya
}

//variables de login
$usuario = $_POST["txtUsuario"];
$pass = $_POST["txtContrasena"];

session_start();
$_SESSION['txtusuario'] = $usuario;

//hace la consulta
$consulta="SELECT * FROM usuarios WHERE usuario = '".$usuario."' and password = '".$pass."'";
$query = mysqli_query ($conn, $consulta);
//comprueba el número de filas correctas
//$nr = mysqli_num_row ($query)
$nr = mysqli_fetch_array ($query);

//si los datos son correctos da acceso 
if(($nr ['rol_id'] == 1)){//envia al apartado administrador - admin (admin-admin1234)
    header ("Location: menuadmin/dashboard-admin.php");
    //echo "Bienvenido: ".$nombre;
    //echo ['success_msg'];
    }else if (($nr ['rol_id'] == 2)){//envia al apartado - alumno (alumno1-alumno1234)
    header ("Location: menualumno/menualum.php");
    //echo "No ingresó";
    }else{
    //muestra alerta de error;
    echo "<script> alert('Error al iniciar sesión');
     location.href='login.html';
     </script>";
    //echo sweetalert2("atención");
    //return alertaE();
    //echo "<alertaE>";
    //require ('login.html');
}
mysqli_close($conn);/*Cierre de la variable de 
conexión*/
?>