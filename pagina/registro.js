function validarFormulario() {
    // Obtener valores de los campos
    var nombres = document.getElementById("nombres").value;
    var apellidos = document.getElementById("apellidos").value;
    var email = document.getElementById("email").value;
    var celular = document.getElementById("celular").value;
    var password = document.getElementById("password").value;
    var tipoDoc = document.getElementById("tipoDoc").value;
    var numDoc = document.getElementById("numDoc").value;
    var direccion = document.getElementById("direccion").value;
    var ciudad = document.getElementById("ciudad").value;
    var fechaNacimiento = document.getElementById("fecha_nacimiento").value;
    var foto1 = document.getElementById("foto1").value;
    var foto2 = document.getElementById("foto2").value;
    var foto3 = document.getElementById("foto3").value;
    var foto4 = document.getElementById("foto4").value;
    var terminos = document.getElementById("termsCheckbox").checked;
    
    // Validar campos
    if (nombres === "") {
      alert("El campo Nombres es obligatorio.");
      return false;
    }
    
    if (apellidos === "") {
      alert("El campo Apellidos es obligatorio.");
      return false;
    }
    
    if (email === "") {
      alert("El campo Email es obligatorio.");
      return false;
    } else {
      // Validar estructura de email usando una expresión regular
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert("El campo Email no tiene un formato válido.");
        return false;
      }
    }
    
    if (celular === "") {
      alert("El campo Número de celular es obligatorio.");
      return false;
    } else if (isNaN(celular) || celular.length !== 10) {
      alert("El campo Número de celular debe tener 10 dígitos.");
      return false;
    }
    
    if (password === "") {
      alert("El campo Contraseña es obligatorio.");
      return false;
    } else {
      // Validar estructura de contraseña usando una expresión regular
      var passwordRegex = /^(?=.*\d)(?=.*[A-Z]).{8,}$/;
      if (!passwordRegex.test(password)) {
        alert("El campo Contraseña no cumple con los requisitos mínimos.");
        return false;
      }
    }
    
    if (tipoDoc === "") {
        alert("Debe seleccionar Tipo de Documento.");
        return false;
      }

      if (numDoc === "") {
        alert("El campo Numero de Documento es obligatorio.");
        return false;
      }

      if (direccion === "") {
        alert("El campo Direccion es obligatorio.");
        return false;
      }

    if (ciudad === "") {
      alert("Debe seleccionar una Ciudad.");
      return false;
    }
    
    if (fechaNacimiento === "") {
      alert("El campo Fecha de Nacimiento es obligatorio.");
      return false;
    } else {
      // Obtener fecha actual
      var fechaActual = new Date();
      // Obtener fecha de nacimiento ingresada
      var fechaNacimientoDate = new Date(fechaNacimiento);
      // Calcular la diferencia en milisegundos
      var diferencia = fechaActual - fechaNacimientoDate;
      // Convertir la diferencia a años
      var edad = Math.floor(diferencia / (1000 * 60 * 60 * 24 * 365.25));
      // Validar si es mayor de 18 años
      if (edad < 18) {
        alert("Debe ser mayor de 18 años para registrarse.");
        return false;
      }
    }
    
    if (foto1 === "" && foto2 === "" && foto3 === "" && foto4 === "") {
        alert("Debe adjuntar las fotos requeridas.");
        return false;
    }

    if (!terminos) {
      alert("Debe aceptar los términos y condiciones.");
      return false;
    }
    
    // Si todos los campos son válidos, se envía el formulario
    alert("Se han enviado los datos para validación.");
    window.location.href = "inicioSesion.html";
    return false;
  }
