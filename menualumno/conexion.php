<?php
$dbhost = "localhost";
$dbname = "estancia_roles";
$dbuser = "root";
$dbpass = "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){
    die("conexion fallida: ".mysqli_connect_error());
}echo "";
//mysqli_close($conn);
?>