/*function solicitud(){
    swal("Solicitud de Estancias"{
        buttons: ["Obtener Solicitud","Subir Solicitud"]
    });
}*/

/*document.querySelector(".solicitud").addEventListener('click', function(){
    Swal.fire("dsa");
  });*/

document.querySelector(".solicitud").addEventListener('click', function(){
    Swal.fire({
        title: 'Solicitud de Estancia',
        text: "Elige el apartado",
        showCancelButton: true,
        confirmButtonColor: '#76a06d',
        cancelButtonColor: '#76a06d',
        confirmButtonText: 'Obtener Solicitud',
        cancelButtonText: 'Subir Solicitud'
      }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "../menualumno/solicitud.php";
        }else{

            //Subir Solicitud de Estancia
            /*const { value: file } = await Swal.fire({
                title: 'Sube tu Solicitud de Estancia',
                input: 'file',
                inputAttributes: {
                  'accept': 'pdf/*',
                  'aria-label': 'Sube tu Solicitud de Estadia'
                }
              })
              
              if (file) {
                const reader = new FileReader()
                reader.onload = (e) => {
                  Swal.fire({
                    title: 'Has Subido tu Solicitud',
                  })
                }
                reader.readAsDataURL(file)
              }*/
        }
      })
  });