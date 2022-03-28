<?php 
require '../../../conexion.php';

$id_empresa = $_POST['id_empresa'];

$eliminar_emp = "CALL eliminar_empresa('$id_empresa')";

if(mysqli_query($conn,$eliminar_emp)){
    header("Location: ../em-consultar.php", true, 301);
exit();

}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>