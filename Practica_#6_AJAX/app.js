document.getElementById('cargar').addEventListener('click', cargarDatos);

function cargarDatos() {
    // Se le asigna ese nombre como norma. En ese Objeto "XMLHttpRequest()", se encuentran todos los metodos para trabajar con AJAX

    // Paso 1: Crear el objeto XMLHttpRequest
    const xhr = new XMLHttpRequest();

    // Paso 2: Abrir una conexion
    xhr.open('GET', 'datos.txt', true);

    // Paso 3: Una vez que carga
    /* xhr.onload = function() {
        // Revisar el estado (Status)
        // 200: Correcto | 403 : Prohibido | 404: No    encontrado
        // "This" se refiere a la conexion de XMLHttpRequest que es esta haciendo
        if (this.status === 200) {
            document.getElementById('listado').innerHTML = `<h1>${this.responseText}</h1>`;
        }
    } */

    // Paso 3: Otra variante del paso 3
    xhr.onreadystatechange = function() {
        console.log(`Status: ${this.readyState}`);

        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('listado').innerHTML = `<h1>${this.responseText}</h1>`;
            //console.log(this.responseText);
        }
    }

    // Ready Status
    /*
    0 - No Inicializado
    1 - Conexion Establecida
    2 - Recibido
    3 - Procesando
    4 - Respuesta Lista
    */

    // Paso 4: Enviar el Request
    xhr.send();
}