document.querySelector(".Terminacion").addEventListener('click', function(){
    Swal.fire({
      title: '<strong> Carta de Terminación <br> <span style="font-size: 20px; margin: 5px 0;">Elige el apartado</span> </strong>',
      icon: false,
      html:
        '<input type="submit" class="btn" onclick=location.href="../menualumno/cterminacion.php" value="Obtener Carta de Terminación">' +
        '<input type="submit" class="btn" onclick=location.href="../menualumno/drag/subir-cterminacion.php" value="Subir Carta de Terminación">' ,
  
      showCloseButton: true,
      showCancelButton: false,
  
      showConfirmButton: false
    })
  });