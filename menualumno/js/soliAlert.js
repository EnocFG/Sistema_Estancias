document.querySelector(".solicitud").addEventListener('click', function(){
  Swal.fire({
    title: '<strong> Solicitud de Estancia <br> <span style="font-size: 20px; margin: 5px 0;">Elige el apartado</span> </strong>',
    icon: false,
    html:
      '<input type="submit" class="btn" onclick=location.href="../menualumno/solicitud.php" value="Obtener Solicitud de Estancia">' +
      '<input type="submit" class="btn" onclick=location.href="../menualumno/drag/subir-solicitud.php" value="Subir Solicitud de Estancia">' ,

    showCloseButton: true,
    showCancelButton: false,

    showConfirmButton: false
  })
});

/*document.querySelector(".solicitud").addEventListener('click', function(){
    Swal.fire({
        title: 'Solicitud de Estancia',
        text: "Elige el apartado",
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonColor: '#76a06d',
        cancelButtonColor: '#76a06d',
        confirmButtonText: 'Obtener Solicitud',
        cancelButtonText: 'Subir Solicitud',

        closeOnClickOutside: false,
        closeOnEsc: false,
        allowOutsideClick: false
      }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "../menualumno/solicitud.php";
        }else{
          window.location.href = "../menualumno/drag/subir-solicitud.php"
        }
      })
  });*/