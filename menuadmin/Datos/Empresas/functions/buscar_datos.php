<?php

    include ("../../conexion.php");

    if (isset($_POST['buscar'])) 
    {
        $id_empresa = $_POST['id_empresa'];
        $valores = array();
        $valores['existe'] = "0";
        
        $resultados = mysqli_query($conexion, "SELECT * FROM $empresa WHERE id_empresa = '$id_empresa' ");
        while($consulta = mysqli_fetch_array($resultados))
        {
            $valores['existe'] = "1";
            $valores['Nombre_empresa'] = $consulta['Nombre_empresa']; 
            $valores['Domicilio_empresa'] = $consulta['Domicilio_empresa']; 
            $valores['Telefono_empresa'] = $consulta['Telefono_empresa']; 
            $valores['Correo_electronico'] = $consulta['Correo_electronico']; 
        }
        $valores = json_encode($valores);
        echo $valores;
    }

?>