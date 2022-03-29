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
    <form id="contenedor" method="post" action="validar/validarDatosper.php">
        <h1 class="encabezado">DATOS PERSONALES</h1>
        <input type="text" id="matricula" name="matricula" placeholder="matricula" class="input" required autofocus><br>
        <input type="text" id="nombre" name="nombre" placeholder="nombre" class="input" required><br>
        <input type="text" id="appaterno" name="appaterno" placeholder="apellido paterno" class="input" required><br>
        <input type="text" id="apmaterno" name="apmaterno" placeholder="apellido materno" class="input" required><br>
        <input type="text" id="domicilio" name="domicilio" placeholder="domicilio" class="input" required><br>
        <input type="text" id="sexo" name="sexo" placeholder="sexo" class="input" required><br>
        <input type="text" id="imss" name="imss" placeholder="num. imss" class="input" required><br>
        <input type="text" id="curp" name="curp" placeholder="curp" class="input" required><br>
        <input type="email" id="correo" name="correo" placeholder="&#64 correo electronico" class="input" required><br>
        <input type="tel" id="telefono" name="telefono" placeholder="&#9743 telefono" class="input" required><br>
        <input type="tel" id="telefono_mov" name="telefono_mov" placeholder="&#9743 telefono movil" class="input" required><br>
        <input type="text" id="asesor" name="asesor" placeholder="asesor academico" class="input" required><br></br>
        <br>

        <input type="submit" id="enviar" name="Enviar" value="Siguiente">
        <input type="submit" name="Menu" onclick="location.href='menualum.php'" value="Menú">

        <p class="warning" id="warning" ></p>
    </form>

    <script src="js/validaralumno.js"></script>

</body>
</html>
