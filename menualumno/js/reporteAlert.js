document.querySelector(".Reporte").addEventListener('click', function(){
    Swal.fire({
      title: '<strong> Reporte de Estancia o Estadía Profesional <br> <span style="font-size: 20px; margin: 5px 0;">Elige el apartado</span> </strong>',
      icon: false,
      html:
        '<input type="submit" class="btn" onclick=location.href="../menualumno/reporte.php" value="Obtener Reporte de Estancia o Estadía Profesional">' +
        '<input type="submit" class="btn" onclick=location.href="../menualumno/drag/subir-reporte.php" value="Subir Reporte de Estancia o Estadía Profesional">' ,
  
      showCloseButton: true,
      showCancelButton: false,
  
      showConfirmButton: false
    })
  });