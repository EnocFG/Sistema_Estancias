function loadImage(url) {
    return new Promise(resolve => {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.responseType = "blob";
        xhr.onload = function (e) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const res = event.target.result;
                resolve(res);
            }
            const file = this.response;
            reader.readAsDataURL(file);
        }
        xhr.send();
    });
}

let signaturePad = null;

window.addEventListener('load', async () => {

    /*const canvas = document.querySelector("canvas");
    canvas.height = canvas.offsetHeight;
    canvas.width = canvas.offsetWidth;*/

    signaturePad = new SignaturePad(canvas, {});

    const form = document.querySelector('#form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        let matricula = document.getElementById('matricula').value;
        let nombre = document.getElementById('nombre').value;
        let appaterno = document.getElementById('appaterno').value;
        let apmaterno = document.getElementById('apmaterno').value;
        let domicilio = document.getElementById('domicilio').value;
        let sexo = document.getElementById('sexo').value;
        let imss = document.getElementById('imss').value;
        let curp = document.getElementById('curp').value;
        let correo = document.getElementById('correo').value;
        let telefono = document.getElementById('telefono').value;
        let telefono_mov = document.getElementById('telefono_mov').value;
        let asesor = document.getElementById('asesor').value;
        /*let hijos = document.querySelector('input[name="hijos"]:checked').value;
        let numeroHijos = document.getElementById('numeroHijos').value;
        let discapacidad = document.querySelector('input[name="discapacidad"]:checked').value;
        let discapacidadDesc = document.getElementById('discapacidad-desc').value;*/

        generatePDF(matricula, nombre, appaterno, apmaterno, domicilio, sexo, imss, curp, correo, telefono, telefono_mov, asesor);
    })

});

async function generatePDF(matricula, nombre, appaterno, apmaterno, domicilio, sexo, imss, curp, correo, telefono, telefono_mov, asesor) {
    const image = await loadImage("formulario.jpg");
    const signatureImage = signaturePad.toDataURL();

    const pdf = new jsPDF('p', 'pt', 'letter');

    pdf.addImage(image, 'PNG', 0, 0, 610, 792);
    pdf.addImage(signatureImage, 'PNG', 200, 605, 300, 60);

    pdf.setFontSize(12);
    pdf.text(curso, 260, 125);

    const date = new Date();
    pdf.text(date.getDate().toString(), 460, 230);
    pdf.text((date.getMonth() + 1).toString(), 480, 230);
    pdf.text(date.getFullYear().toString(), 495, 230);

    pdf.setFontSize(10);
    pdf.text(nombres, 140, 150);
    pdf.text(apellidos, 305, 150);
    pdf.text(apellidos, 450, 150);
    pdf.text(direccion, 150, 170);
    pdf.text(telefono, 80, 230);
    pdf.text(email, 305, 230);

    pdf.setFillColor(0,0,0);

    if (parseInt(hijos) === 0) {
        //pdf.text(285, 718, 4, 'X');
        pdf.circle(255, 374, 4, 'FD');
    } else {
        pdf.circle(190, 374, 4, 'FD');
        pdf.text(numeroHijos.toString(), 355, 378);
    }

    if (parseInt(discapacidad) === 0) {
        
        pdf.circle(285, 718, 4, 'FD');
    } else {
        pdf.circle(240, 718, 4, 'FD');
        pdf.text(discapacidadDesc, 350, 720);
    }



    pdf.save("Solicitud_Estancia.pdf");

}