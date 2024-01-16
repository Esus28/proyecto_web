function validarFormulario() {
    var nombre = document.getElementById("nombre");
    var apellidos = document.getElementById("apellidos");
    var genero = document.querySelector('input[name="genero"]:checked');
    var usuario = document.getElementById("usuario");
    var contrasena = document.getElementById("pwd");
    var aceptarTerminos = document.getElementById("checkbox");

    var regexNombre = /^[A-Z][a-zA-Záéíóú]{2,}([ ]?[A-Z][a-zA-Záéíóú]{2,})?$/;
    var regexApellidos = /^[A-Z][a-zA-Záéíóú]+ [A-Z][a-zA-Záéíóúìàèòù]+$/;
    var regexUsuario = /^[a-zA-Z0-9]{10,500}$/;
    var regexContrasena = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

    resetValidationStyles();

    var isValid = true;
    
    if (!nombre.value.match(regexNombre)) {
        setValidationError(nombre, "nombreError");
        isValid = false;
    }

    if (!apellidos.value.match(regexApellidos)) {
        setValidationError(apellidos, "apellidosError");
        isValid = false;
    }
     
    if (!genero) {
        setValidationError(document.querySelector('.radio'), "generoError");
        isValid = false;
    }

    if (!usuario.value.match(regexUsuario)) {
        setValidationError(usuario, "usuarioError");
        isValid = false;
    }

    if (!contrasena.value.match(regexContrasena)) {
        setValidationError(contrasena, "contrasenaError");
        isValid = false;
    }
    
    if (!aceptarTerminos.checked) {
        setValidationError(document.querySelector('.checkbox'), "terminosError");
        isValid = false;
    }

    return isValid;
}

function setValidationError(inputElement, errorElementId) {
    inputElement.classList.add("invalid");
    var errorElement = document.getElementById(errorElementId);
    errorElement.style.display = "block";
}

function resetValidationStyles() {
    var formElements = document.querySelectorAll(".form-control");
    formElements.forEach(function (element) {
        element.classList.remove("invalid");
    });

    var errorElements = document.querySelectorAll(".error-message");
    errorElements.forEach(function (element) {
        element.style.display = "none";
    });

}
