/*const matricula = document.getElementById("matricula");
const nombre = document.getElementById("nombre");
const appaterno = document.getElementById("appaterno");
const apmaterno = document.getElementById("apmaterno");
const domicilio = document.getElementById("domicilio");
const sexo = document.getElementById("sexo");
const imss = document.getElementById("imss");
const curp = document.getElementById("curp");
const correo = document.getElementById("correo");
const telefono = document.getElementById("telefono");
const telefono_mov = document.getElementById("telefono_mov");
const asesor = document.getElementById("asesor");
const form = document.getElementById("form");
const warning = document.getElementById("warning");

form.addEventListener("submit", e=>{
    e.preventDefault();
    let warning = "";
    let regexEmail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

    if(matricula.value.length <10){
        warning += `matrícula no válida <br>`;
    }
    if(matricula.value.length <10){
        warning += `matrícula no válida <br>`
    }

    if(regexEmail.test(correo.value)){

    }
})*/


function validar(){
    //var matricula, nombre, appaterno, apmaterno, domicilio, sexo, imss, curp, correo, telefono, telefono_movil, asesor

    matricula = document.getElementById('matricula').value;
    nombre = document.getElementById('nombre').value;
    appaterno = document.getElementById('appaterno').value;
    apmaterno = document.getElementById('apmaterno').value;
    domicilio = document.getElementById('domicilio').value;
    sexo = document.getElementById('sexo').value;
    imss = document.getElementById('imss').value;
    curp = document.getElementById('curp').value;
    correo = document.getElementById('correo').value;
    telefono = document.getElementById('telefono').value;
    telefono_movil = document.getElementById('telefono_movil').value;
    asesor = document.getElementById('asesor').value;

    val = 0;
    email =/\w+@+[a-z]+\.+[a-z]/;
    //contrasena = /[a-z]+{1} [a-z]{2} [0-9]{4}/;

    if(matricula == "" || nombre == "" || appaterno == "" || apmaterno == "" || domicilio == "" ||
    sexo == "" || imss == "" || curp == "" || correo == "" || telefono == "" ||
    telefono_movil == "" || asesor == ""){
        /*alert  ("Todos los campos son obligatorios");
        return false;*/
        val++;
    }if(val == 0){
        document.getElementById("enviar").disabled = false;
    }else{
        document.getElementById("enviar").disabled = true;
    }
    document.getElementById("matricula").addEventListener("keyup", validar);
    document.getElementById("nombre").addEventListener("keyup", validar);
    document.getElementById("appaterno").addEventListener("keyup", validar);
    document.getElementById("apmaterno").addEventListener("keyup", validar);
    document.getElementById("domicilio").addEventListener("keyup", validar);
    document.getElementById("sexo").addEventListener("keyup", validar);
    document.getElementById("imss").addEventListener("keyup", validar);
    document.getElementById("curp").addEventListener("keyup", validar);
    document.getElementById("correo").addEventListener("keyup", validar);
    document.getElementById("telefono").addEventListener("keyup", validar);
    document.getElementById("telefono_mov").addEventListener("keyup", validar);
    document.getElementById("asesor").addEventListener("keyup", validar);

    /*document.getElementById("enviar").addEventListener("click", () => {
        window.location.href = "../empresa.php";
    });
    /*if(Text(matricula)){
        alert ("La matrícula solo admite números");
        return false;
    }
    if(Number(nombre)){
        alert ("El nombre solo acepta letras");
        return false;
    }
    if(Number(appaterno)){
        alert ("El apelido paterno solo acepta letras");
        return false;
    }
    if(Number(apmaterno)){
        alert ("El apellido materno solo acepta letras");
        return false;
    }
    if(nombre.length>40 || appaterno.length>40 || apmaterno.length>40){
        alert("Estos campos no  deben exceder 40 caracteres")
    }*/
}