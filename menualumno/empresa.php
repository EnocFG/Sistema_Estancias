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
    <form id="contenedor" method="post" action="validar/validarDatosempresa.php" >
        <h1 class="encabezado">DATOS DE LA EMPRESA</h1>
        <input type="text" name="modalidad" placeholder="modalidad" class="input" required autofocus><br>
        <input type="text" name="nombre_proyecto" placeholder="nombre del proyecto" class="input" required><br>
        <input type="text" name="nombre_empresa" placeholder="nombre de la empresa" class="input" required><br>
        <input type="text" name="domicilio_empresa" placeholder="domicilio" class="input" required><br>
        <input type="tel" name="telefono_empresa" placeholder="&#9743 telefono de la empresa" class="input" required><br>
        <input type="email" name="correo_empresa" placeholder="&#64 correo de la empresa" class="input" required><br>
        <input type="text" name="nombre_con_empresarial" placeholder="nombre del contacto empresarial" class="input" required><br>
        <input type="date" name="fecha_ini" placeholder="fecha de inicio" class="input" required><br>
        <input type="date" name="fecha_ter" placeholder="fecha de terminación" class="input" required><br>
        <input type="text" name="activ_desarrollar" placeholder="actividades a desarrollar" rows="10" cols="30" class="input" required><br>
        <br>

        <input type="submit" name="Enviar" value="Obtener">
        <input type="submit" name="Regresar" onclick="location.href='solicitud.php'" value="Regresar">
        <input type="submit" name="Menú" onclick="location.href='menualum.php'" value="Menú">
       </form>

       

</body>

</html>