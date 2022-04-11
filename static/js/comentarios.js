/* Función que despliega la sección de comentarios */
function abrirComent() {
    var x = document.getElementById("seccioncomentarios");
    if (x.style.display === "") {
        x.style.display = "block";
    } else {
        x.style.display = "";
    }
}

/* EventListener que se queda escuchando al botón de enviar. Cuando se pulsa, se ejecuta la función comentar */
document.getElementById("enviar").addEventListener('click', function () {
    comentar();
});

/* Función que captura los elementos del formulario y, si la validación ha sido correcta, crea un nuevo comentario y lo
añade a la sección de comentarios */
function comentar(event) {

    var validacion = validarFormulario();

    if (validacion) {
        // Variables auxiliares
        let commentText, authorText, seccion, comentario;

        comentario = document.createElement('div');                 // contiene el autor del comentario y el comentario en sí
        comentario.className = "comentario";
        cuerpoComent = document.createElement('div');               // contiene el cuerpo del comentario
        cuerpoComent.className = "cuerpocomentario";
        autor = document.createElement('div');                      // contiene el autor del comenario
        autor.className = "autor";

        // Variables para la fecha
        const fecha = new Date();
        const dia = fecha.getDate();
        const mes = fecha.getMonth() + 1;
        const anio = fecha.getFullYear();


        // Variables para la hora
        const hora = fecha.getHours();
        const min = fecha.getMinutes();


        seccion = document.getElementById("comentarios");           // ha cogido el div en el que estaban los dos comentarios por defecto
        seccion.className = "comentarios";

        commentText = document.getElementById("areaTexto").value;   // coge el comentario del formulario
        document.getElementById("areaTexto").value = "";            // vacía el comentario del formulario

        authorText = document.getElementById("nombre").value        // coge el autor del comentario del formulario
            + " " + dia + "/" + mes + "/" + anio                    // fecha en la que se ha hecho el comentario
            + " " + hora + ":" + min;                               // hora en la que se hizo el comentaio
        document.getElementById("nombre").value = "";               // vacía el autor del comentario del formulario
        document.getElementById("correo").value = "";               // vacía el correo del autor del comentario

        cuerpoComent.innerHTML = commentText;                       // se inserta el comentario en el div correspodiente
        autor.innerHTML = authorText;                               // se inserta el autor en el div correspondiente

        comentario.append(autor, cuerpoComent);                     // se añaden los div de autor y cuerpo del comentario al div de comentario
        seccion.append(comentario);                                 // se añade el comentario a la sección de comentarios 
    }
}

/* Función que comprueba si el valor que se le pasa está vacío o no */
function validarVacio(valor) {
    if (valor === '') {
        return true;
    } else {
        return false;
    }
}

/* Función que comprueba si los campos del formulario están vacíos y si el correo electrónico introducido es válido (si tiene la 
    forma de un correo) */
function validarFormulario() {
    var correo = document.getElementById("correo").value;
    var nombre = document.getElementById("nombre").value;
    var coment = document.getElementById("areaTexto").value;

    // expresión regular para todo tipo de correos
    var expr = /^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/;

    //comprobar si los campos están vacíos
    if (validarVacio(correo) || validarVacio(nombre) || validarVacio(coment)) {
        alert("Los campos nombre, correo y comentario no pueden quedar vacíos");
        return false;
    }

    //comprueba si el correo es válido
    if (!expr.test(correo)) {
        alert("Error: La dirección de correo " + correo + " no es válida.");
        return false;
    }

    return true;
}

var palabrotas = /puto|puta|gilipollas|joder|cago|imbecil|tonto|coño|mierda/gi;

areaTexto = document.getElementById("areaTexto");
areaTexto.addEventListener('keypress', censurar);

function censurar(event) {
    
    if (event.key == " ") {
        var textfield = document.getElementById("areaTexto");    // aqui se va guardando el texto que va escribiendo el usuario
        var cadena = [];                                // cadena string que va guardando las palabrotas que va escribiendo el usuario
        var palabra = "";                              // última palabrota que ha escrito el usuario
        var censura = "";                               // censura que tiene tantos * como caracteres tiene la palabrota

        cadena = textfield.value.match(palabrotas);     // compruebo si el usuario ha escrito una palabrota
        if (cadena != null) {
            palabra = cadena[0];                        // guardo la palabrota en palabra
            for (var i = 0; i < palabra.length; i++) {
                censura += "*";                         // creo la censura
            }
            textfield.value = textfield.value.replace(palabrotas, censura); // aplico la censura al texto
        }
    }
}
