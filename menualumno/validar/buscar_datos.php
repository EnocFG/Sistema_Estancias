<?php
include './conexion_bd.php';
if (isset($_POST['buscar'])) {
    $Matricula = $_POST['Matricula'];
    $valores = [];
    $valores['existe'] = 0;

    $resultados = mysqli_query(
        $conn,
        "SELECT * FROM alumno WHERE Matricula = '$Matricula'"
    );
    while ($consulta = mysqli_fetch_array($resultados)) {
        $valores['existe'] = 1;
        $valores['Matricula'] = $consulta['Matricula'];
        $valores['Nombre_alumno'] = $consulta['Nombre_alumno'];
        $valores['Ap_paterno_alumno'] = $consulta['Ap_paterno_alumno'];
        $valores['Ap_materno_alumno'] = $consulta['Ap_materno_alumno'];
        $valores['Domicilio'] = $consulta['Domicilio'];
        $valores['Sexo'] = $consulta['Sexo'];
        $valores['IMSS'] = $consulta['IMSS'];
        $valores['CURP'] = $consulta['CURP'];
        $valores['Correo_electronico'] = $consulta['Correo_electronico'];
        $valores['id_grupo_fk'] = $consulta['id_grupo_fk'];
        $valores['id_cuatrimestre_fk'] = $consulta['id_cuatrimestre_fk'];
        $valores['id_campus_fk'] = $consulta['id_campus_fk'];
    }
    sleep(1);
    $valores = json_encode($valores);
    echo $valores;
}
