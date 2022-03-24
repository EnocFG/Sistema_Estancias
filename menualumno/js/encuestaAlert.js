document.querySelector(".Satisfaccion").addEventListener('click', function(){
    Swal.fire({
      title: '<strong> Encuesta de Satisfacción <br> <span style="font-size: 20px; margin: 5px 0;">Elige el apartado</span> </strong>',
      icon: false,
      html:
        '<input type="submit" class="btn" onclick=location.href="../menualumno/encuesta.php" value="Obtener Encuesta de Satisfacción">' +
        '<input type="submit" class="btn" onclick=location.href="../menualumno/drag/subir-encuesta.php" value="Subir Encuesta de Satisfacción">' ,

      showCloseButton: true,
      showCancelButton: false,

      showConfirmButton: false
    })
});
