async function validarFormulario() {
    var nombres = document.forms["registro1"]["nombres"].value;
    var apellidos = document.forms["registro1"]["apellidos"].value;
    var email = document.forms["registro1"]["email"].value;
    var celular = document.forms["registro1"]["celular"].value;
    var password = document.forms["registro1"]["password"].value;

    var tipoDoc = document.forms["registro2"]["tipoDoc"].value;
    var numDoc = document.forms["registro2"]["numDoc"].value;
    var direccion = document.forms["registro2"]["direccion"].value;
    var ciudad = document.forms["registro2"]["ciudad"].value;
    var fecha = document.forms["registro2"]["fecha"].value;

    var foto1 = document.forms["registro3"]["foto1"].value;
    var foto2 = document.forms["registro3"]["foto2"].value;
    var foto3 = document.forms["registro3"]["foto3"].value;
    var foto4 = document.forms["registro3"]["foto4"].value;
    var checkbox = document.getElementById("termsCheckbox").checked;

    var errorNombres = document.getElementById("errorNombres");
    var errorApellidos = document.getElementById("errorApellidos");
    var errorEmail = document.getElementById("errorEmail");
    var errorCelular = document.getElementById("errorCelular");
    var errorPassword = document.getElementById("errorPassword");
    var errorTipoDoc = document.getElementById("errorTipoDoc");
    var errorDocumento = document.getElementById("errorDocumento");
    var errorDireccion = document.getElementById("errorDireccion");
    var errorCiudad = document.getElementById("errorCiudad");

    var errores = [];

    function mostrarError(elemento, mensaje) {
        elemento.innerHTML = mensaje;
        elemento.style.display = "block";
    }

    function ocultarError(elemento) {
        elemento.innerHTML = "";
        elemento.style.display = "none";
    }

    if (nombres === "") {
        errores.push("nombres");
        mostrarError(errorNombres, "No ha ingresado sus nombres");
    } else {
        ocultarError(errorNombres);
    }

    if (apellidos === "") {
        errores.push("apellidos");
        mostrarError(errorApellidos, "No ha ingresado sus apellidos");
    } else {
        ocultarError(errorApellidos);
    }

    if (email === "") {
        errores.push("email");
        mostrarError(errorEmail, "No ha ingresado un correo electrónico válido");
    } else {
        ocultarError(errorEmail);
    }

    if (celular === "") {
        mostrarError(errorCelular, "Por favor, ingresa tu número de celular.");
        return false;
    } else if (celular.length !== 10) {
        mostrarError(errorCelular, "El número de celular debe tener exactamente 10 dígitos.");
        return false;
    } else {
        ocultarError(errorCelular);
    }

    if (password === "") {
        mostrarError(errorPassword, "Por favor, ingresa tu contraseña.");
        return false;
    } else if (!/[A-Z]/.test(password)) {
        mostrarError(errorPassword, "La contraseña debe contener al menos una letra mayúscula.");
        return false;
    } else if (!/[0-9]/.test(password)) {
        mostrarError(errorPassword, "La contraseña debe contener al menos un número.");
        return false;
    } else if (password.length < 8) {
        mostrarError(errorPassword, "La contraseña debe tener al menos 8 caracteres.");
        return false;
    } else {
        ocultarError(errorPassword);
    }

    if (tipoDoc === "") {
        errores.push("tipoDoc");
        mostrarError(errorTipoDoc, "No ha elegido un tipo de documento");
    } else {
        ocultarError(errorTipoDoc);
    }

    if (numDoc === "") {
        errores.push("numDoc");
        mostrarError(errorDocumento, "No ha ingresado su número de documento");
    } else {
        ocultarError(errorDocumento);
    }

    if (direccion === "") {
        errores.push("direccion");
        mostrarError(errorDireccion, "No ha ingresado su dirección");
    } else {
        ocultarError(errorDireccion);
    }

    if (ciudad === "") {
        errores.push("ciudad");
        mostrarError(errorCiudad, "No ha elegido una ciudad");
    } else {
        ocultarError(errorCiudad);
    }

    if (foto1 === "" || foto2 === "" || foto3 === "" || foto4 === "") {
        errores.push("fotos");
        console.log("No ha subido todas las fotos requeridas");
    }

    if (!checkbox) {
        errores.push("terms");
        console.log("Debe aceptar términos y condiciones");
    }

    if (errores.length === 0) {
        alert("Usuario en proceso de validación");
        // Redireccionar a la página de inicio de sesión
    } else {
        for (var i = 0; i < errores.length; i++) {
            switch (errores[i]) {
                case "nombres":
                    console.log("No ha ingresado sus nombres");
                    break;
                case "apellidos":
                    console.log("No ha ingresado sus apellidos");
                    break;
                case "email":
                    console.log("No ha ingresado un correo electrónico válido");
                    break;
                case "celular":
                    console.log("No ha ingresado un número de celular válido");
                    break;
                case "password":
                    console.log("No ha ingresado una contraseña válida");
                    break;
                case "tipoDoc":
                    console.log("No ha elegido un tipo de documento");
                    break;
                case "numDoc":
                    console.log("No ha ingresado su número de documento");
                    break;
                case "direccion":
                    console.log("No ha ingresado su dirección");
                    break;
                case "ciudad":
                    console.log("No ha elegido una ciudad");
                    break;
                case "fotos":
                    console.log("No ha subido ninguna foto aún");
                    break;
                case "terms":
                    console.log("Debe aceptar los términos y condiciones");
                    break;
                default:
                    break;
            }
        }
    }
}
