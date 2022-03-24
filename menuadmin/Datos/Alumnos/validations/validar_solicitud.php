<?php

require'../../conexion.php';

$id_solicitud = $_POST['id_solicitud'];
$Nombre_alumno_sol = $_POST['Nombre_alumno_sol'];
$Ap_paterno_alumno_sol = $_POST['Ap_paterno_alumno_sol'];
$Ap_materno_alumno_sol = ['Ap_materno_alumno_sol'];
$Domicilio_alumno = $_POST['Domicilio_alumno'];
$Sexo_alumno = $_POST['Sexo_alumno'];
$IMSS = $_POST['IMSS'];
$CURP = $_POST['CURP'];
$Matricula_fk = $_POST['Matricula_fk'];
$correo_electronico_fk = $_POST['correo_electronico_fk'];
$id_telefono_al_fk = $_POST['id_telefono_al_fk'];
$Fecha_elaboracion = $_POST['Fecha_elaboracion'];
$Programa_educativo = $_POST['Programa_educativo'];
$Cuatrimestre = $_POST['Cuatrimestre'];
$Grupo = $_POST['Grupo'];
$Modalidad = $_POST['Modalidad'];
$Nombre_asesor = $_POST['Nombre_asesor'];
$Ap_paterno_asesor = $_POST['Ap_paterno_asesor'];
$Ap_materno_asesor = $_POST['Ap_materno_asesor'];
$Nombre_proyecto = $_POST['Nombre_proyecto'];

$insertar_sol = "CALL insertar_solicitud()";

?>