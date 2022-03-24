<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Solicitud de Estancia</title>
    <link rel="stylesheet" href="css/styles.css"/>
</head>

<body>
    <form id="contenedor" method="post" action="validarDatosper.php">
        <h1 class="encabezado">Encuesta de satisfacción de las Empresas receptoras de estudiantes que realizaron Estancias Profesionales</h1>
        <input type="text" id="matricula" name="matricula" placeholder="matricula" class="input" required autofocus><br>
        <input type="text" id="lugar" name="lugar" placeholder="lugar" class="input" required><br>
        <input type="date" name="fecha_dia" placeholder="fecha" class="input" required><br>
        <input type="text" name="nombre_empresa" placeholder="nombre de la empresa" class="input" required><br>
        <input type="text" id="nombre" name="nombre" placeholder="nombre" class="input" required><br>
        <input type="text" id="appaterno" name="appaterno" placeholder="apellido paterno" class="input" required><br>
        <input type="text" id="apmaterno" name="apmaterno" placeholder="apellido materno" class="input" required><br>
        <input type="text" name="programaedu" placeholder="programa educativo" class="input" required><br>
        <br>

        <input type="submit" id="enviar" name="Enviar"  value="Descargar">
        <input type="submit" name="Menu" onclick="location.href='menualum.php'" value="Menú">

        <p class="warning" id="warning"></p>
    </form>

    <script src="js/validaralumno.js"></script>

</body>
</html>