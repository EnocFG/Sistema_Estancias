//declarar variables
const dropArea = document.querySelector(".drop-area");
const dragText = dropArea.querySelector("h2");
const button = dropArea.querySelector("button");
const input = dropArea.querySelector("#input-file");
let files;

//arrastrar o elegir archivos
button.addEventListener("click", (e) => {
    input.click();
});

input.addEventListener("change", (e) => {
    files = input.files;
    dropArea.classList.add("active");
    showFiles(files);
    dropArea.classList.remove("active");
});

//mostrar archivos
function showFiles(files){
    if(files.length == undefined){
        processFile(files);
    }else{
        for(const file of files){
            processFile(file);
        }
    }
}

//archivos por encima
dropArea.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropArea.classList.add("active");
    dragText.textContent = "Suelta para subir el archivo";
});

//archivos fuera del cuadro
dropArea.addEventListener("dragleave", (e) => {
    e.preventDefault();
    dropArea.classList.remove("active");
    dragText.textContent = "Arrastra y suelta el documento";
});

//soltar archivos
dropArea.addEventListener("drop", (e) => {
    e.preventDefault();
    files = e.dataTransfer.files;
    showFiles(files);
    dropArea.classList.remove("active");
    dragText.textContent = "Arrastra y suelta el documento";
})

//procesar los archivos
function  processFile(file){
    const docType =  file.type;
    const validExten = ['application/pdf'];

    if (validExten.includes(docType)){
        //archivo válido
        const fileReader = new FileReader();
        const id = `file-${Math.random().toString(32).substring(7)}`;

        fileReader.addEventListener("load", (e) => {
            const fileUrl = fileReader.result;
            const pdf = `
                <div id="${id}" class="file-container">
                    <application src="${fileUrl}" alt="${file.name}" width="5">
                    <div class="status" style="color:gainsboro">
                        <span>${file.name}</span>
                        <span class="status-text">
                            Cargando Archivo...
                        </span>
                    </div>
                </div>
            `;

            const html = document.querySelector('#preview').innerHTML;
            document.querySelector('#preview').innerHTML = pdf + html;

            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Archivo Enviado',
                showConfirmButton: false,
                timer: 2500
              })
        });

        fileReader.readAsDataURL(file);
        //uploadFile(file, id);
    }else{
        //no es un archivo válido
        //alert("No es un archivo válido");
        function alError(){
            swal.fire({
                icon: 'error',
                title: 'ERROR!!!',
                text: 'Lo sentimos, formato incorrecto',
                confirmButtonColor: '#76a06d'
            }
            )
        };

        return alError();
    }
};
/*
//función para subir archivos
async function uploadFile(file, id){
    const formData = new formData();
    formData.append("file", file);

    try {
        const response = await fetch("https:http://127.0.0.1/Estancias/server/", {
            method: "POST",
            body: formData,
        });

            const responseText = await response.text();
            console.log(responseText);

            document.querySelector(
                `#${id} .status-text`).innerHTML = `<span class="success"> Archivo Subido correcatamente...</span>;`;
    } catch (error) {
        document.querySelector(`#${id} .status-text`).innerHTML = `<span class="failure"> El archivo no pudo subirse...</span>;`;
    }
}*/