<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menú Administrador</title>
    <link rel="stylesheet" href="css/menustyle.css" />
  </head>
  <body>
    <div class="window-notice" id="window-notice">
      <div class="content">
        <div class="content-text">
          <span>Elige el apartado</span><br />
          <br/>
          <input type="submit" class="Alumnos" onclick="location.href='#'" value="Alumnos">
          <input type="submit" name="Docentes" onclick="location.href='#'" value="Docentes">
          <input type="submit" name="Empresas" onclick="location.href='#'" value="Empresas">
        </div>

        <div class="content-buttons">
          <br/>
          <input type="submit" name="sesion" onclick="location.href='../login.html'" value="Cerrar Sesión">
        </div>
      </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	  <script src="../js/modal.js"></script>

  </body>
</html>
