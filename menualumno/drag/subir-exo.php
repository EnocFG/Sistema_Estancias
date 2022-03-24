<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Solitud</title>
    <link rel="stylesheet" href="drag.css">
</head>
<body>
    <h1 class="encabezado">Subir Carta de Exoneración</h1>
    <div>
    <div class="drop-area">
        <h2>Arrastra y Suelta el archivo <br>
        O
        </h2>
        <button>Selecciona el archivo</button>
        <input type="file" name="" id="input-file" hidden multiple />
    </div>
    <div id="preview"></div>

    <input type="submit" name="Exit" onclick="location.href='../menualum.php'" value="Salir">

    </div>

    <script src="drag.js"></script>
</body>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="drag.js"></script>

</html>