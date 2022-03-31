<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Solicitud de Estancia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css" />

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="cargando row">
      <div class="d-flex justify-content-center">
        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden">Cargando...</span>
        </div>
      </div>
    </div>
    <form class="formulario" method="post" action="validar/validarDatosper.php">
      <h1 class="encabezado">DATOS PERSONALES</h1>
      <input type="text" id="Matricula" name="Matricula" placeholder="Matricula" class="input" required autofocus
        onblur="buscar_datos();"><br>
      <input type="text" id="Nombre_alumno" name="Nombre_alumno" placeholder="Nombre" class="input" required><br>
      <input type="text" id="Ap_paterno_alumno" name="Ap_paterno_alumno" placeholder="apellido paterno" class="input"
        required><br>
      <input type="text" id="Ap_materno_alumno" name="Ap_materno_alumno" placeholder="apellido materno" class="input"
        required><br>
      <input type="text" id="Domicilio" name="Domicilio" placeholder="Domicilio" class="input" required><br>
      <input type="text" id="Sexo" name="Sexo" placeholder="Sexo" class="input" required><br>
      <input type="text" id="IMSS" name="IMSS" placeholder="num. IMSS" class="input" required><br>
      <input type="text" id="CURP" name="CURP" placeholder="CURP" class="input" required><br>
      <input type="email" id="Correo_electronico" name="Correo_electronico" placeholder="&#64 Correo_electronico"
        class="input" required><br>
      <input type="tel" id="Telefono_casa_al" name="Telefono_casa_al" placeholder="&#9743 Telefono Casa" class="input"
        required><br>
      <input type="tel" id="Telefono_celular_al" name="Telefono_celular_al" placeholder="&#9743 Telefono Movil"
        class="input" required><br>
      <label for="">Asesor</label>
      <select class="form-select" name="asesores">
        <?php
          require './validar/conexion_bd.php';
          $obtenerAsesores = 'SELECT * FROM asesor_academico';
          $obtenerAsesores2 = mysqli_query($conn, $obtenerAsesores);
          while ($row = mysqli_fetch_array($obtenerAsesores2)) {

              $Id_asesor = $row['Id_asesor'];
              $Nombre_asesor = $row['Nombre_asesor'];
              $Ap_paterno_asesor = $row['Ap_paterno_asesor'];
              $Ap_materno_asesor = $row['Ap_materno_asesor'];
              ?>
        <option value="<?php echo $Id_asesor; ?>"> <?php echo $Nombre_asesor; ?> <?php echo $Ap_paterno_asesor; ?>
          <?php echo $Ap_materno_asesor; ?></option>
        <?php
          }
          ?>
      </select><br>

      <input type="submit" id="enviar" name="Enviar" value="Siguiente">
      <input type="button" name="Menu" onclick="location.href='menualum.php'" value="Menú">

      <p class="warning" id="warning"></p>
    </form>
  </div>

  <script type="text/javascript">
  $(document).ready(function() {
    $('.cargando').hide(); //ocultar
  });

  function buscar_datos() {

    Matricula = $("#Matricula").val();

    var parametros = {
      "buscar": "1",
      "Matricula": Matricula

    };
    $.ajax({
      data: parametros,
      dataType: 'json',
      url: './validar/buscar_datos.php',
      type: 'post',
      beforeSend: function() {
        $('.formulario').hide();
        $('.cargando').show();

      },
      error: function() {
        alert("Error");
      },
      complete: function() {
        $('.formulario').show();
        $('.cargando').hide();
      },
      success: function(valores) {
        $("#Nombre_alumno").val(valores.Nombre_alumno);
        $("#Ap_paterno_alumno").val(valores.Ap_paterno_alumno);
        $("#Ap_materno_alumno").val(valores.Ap_materno_alumno);
        $("#Domicilio").val(valores.Domicilio);
        $("#Sexo").val(valores.Sexo);
        $("#IMSS").val(valores.IMSS);
        $("#CURP").val(valores.CURP);
        $("#Correo_electronico").val(valores.Correo_electronico);
        $("#id_grupo_fk").val(valores.id_grupo_fk);
        $("#id_cuatrimestre_fk").val(valores.id_cuatrimestre_fk);
        $("#id_campus_fk").val(valores.id_campus_fk);
      }
    })
  }

  function limpiar() {
    $("#Matricula").val("");
    $("#Nombre_alumno").val("");
    $("#Ap_paterno_alumno").val("");
    $("#Ap_materno_alumno").val("");
    $("#Domicilio").val("");
    $("#Sexo").val("");
    $("#IMSS").val("");
    $("#CURP").val("");
    $("#Correo_electronico").val("");
    $("#id_grupo_fk").val("");
    $("#id_cuatrimestre_fk").val("");
    $("#id_campus_fk").val("");

  }
  //
  </script>
</body>

</html>