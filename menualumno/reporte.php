<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Solicitud de Estancia</title>
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <form id="contenedor" method="post" action="validarDatosexone.php">
    <h1 class="encabezado">Reporte de Estancia o Estadía Profesiona</h1>

    <input type="text" name="nombre" placeholder="nombre" class="input" required><br>
    <input type="text" name="ap_paterno" placeholder="apellido paterno" class="input" required><br>
    <input type="text" name="ap_materno" placeholder="apellido materno" class="input" required><br>

    <input type="text" name="matricula" placeholder="matricula" class="input" required autofocus><br>
    <input type="text" name="programaedu" placeholder="programa educativo" class="input" required><br>
    <input type="text" name="nombre_empresa" placeholder="nombre de la empresa" class="input" required><br>
    <input type="text" name="nombre_proyecto" placeholder="nombre del proyecto" class="input" required><br>
    <input type="text" name="activ_desarrollar" placeholder="actividades a desarrollar" rows="10" cols="30"
      class="input" required><br>
    <input type="text" id="asesor" name="asesor" placeholder="asesor academico" class="input" required><br>
    <input type="text" name="nombre_con_empresarial" placeholder="nombre del contacto empresarial" class="input"
      required><br>
    <br>

    <input type="submit" name="Enviar" onclick="location.href='#'" value="Descargar">
    <input type="button" name="Menú" onclick="location.href='menualum.php'" value="Menú">
  </form>



</body>
<script src="js/validar.js"></script>

</html>