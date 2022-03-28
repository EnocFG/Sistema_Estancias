
<?php
    require '../../../conexion.php';
if (isset($_POST['buscar'])) {
    $Id_asesor = $_POST['Id_asesor'];
    $valores = [];
    $valores['existe'] = 0;

    $resultados = mysqli_query(
        $conn,
        "SELECT * FROM asesor_academico WHERE Id_asesor = '$Id_asesor'"
    );
    while ($consulta = mysqli_fetch_array($resultados)) {
        $valores['existe'] = 1;
        $valores['Nombre_asesor'] = $consulta['Nombre_asesor'];
        $valores['Ap_paterno_asesor'] = $consulta['Ap_paterno_asesor'];
        $valores['Ap_materno_asesor'] = $consulta['Ap_materno_asesor'];
    }
    sleep(1);
    $valores = json_encode($valores);
    echo $valores;
}
