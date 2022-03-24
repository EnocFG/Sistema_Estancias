document.querySelector(".Aceptacion").addEventListener('click', function(){
    Swal.fire({
      title: '<strong> Carta de Aceptación <br> <span style="font-size: 20px; margin: 5px 0;">Elige el apartado</span> </strong>',
      icon: false,
      html:
        '<input type="submit" class="btn" onclick=location.href="../menualumno/acep.php" value="Obtener Carta de Aceptación">' +
        '<input type="submit" class="btn" onclick=location.href="../menualumno/drag/subir-acep.php" value="Subir Carta de Aceptación">' ,
  
      showCloseButton: true,
      showCancelButton: false,
  
      showConfirmButton: false
      })
  });
  