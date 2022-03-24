document.querySelector(".exoneracion").addEventListener('click', function(){
      Swal.fire({
        title: '<strong> Carta de Exoneración <br> <span style="font-size: 20px; margin: 5px 0;">Elige el apartado</span> </strong>',
        icon: false,
        html:
          '<input type="submit" class="btn" onclick=location.href="../menualumno/exoneracion.php" value="Obtener Carta de Exoneración">' +
          '<input type="submit" class="btn" onclick=location.href="../menualumno/drag/subir-exo.php" value="Subir Carta de Exoneración">' ,

        showCloseButton: true,
        showCancelButton: false,

        showConfirmButton: false
        /*confirmButtonText:
          '<i class="fa fa-thumbs-up"></i> Great!',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
          '<i class="fa fa-thumbs-down"></i>',
        cancelButtonAriaLabel: 'Thumbs down'
      }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "../menualumno/solicitud.php";
        }else{
          window.location.href = "../menualumno/drag/subir-solicitud.php"        }
        */})
  });
