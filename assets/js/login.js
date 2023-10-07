//Los elementos se seleccionan por su identificador (id) y se almacenan en variables
const btnRegister = document.querySelector ('#btnRegister');
const btnLogin = document.querySelector ('#btnLogin');
const frmLogin = document.querySelector ('#frmLogin');
const frmRegister = document.querySelector ('#frmRegister');
const registrarse = document.querySelector ('#registrarse');
const crear = document.querySelector ('#crear');
const nombreSolicitud = document.querySelector ('#specificSizeInputName');
const usuario = document.querySelector ('#specificSizeSelect1');
const categoria = document.querySelector ('#specificSizeSelect2');
const descripcion = document.querySelector ('#exampleFormControlTextarea1');
const login = document.querySelector ('#login');
const nombreRegistro = document.querySelector ('#nombreRegistro');
const correoRegistro = document.querySelector ('#correoRegistro');
const claveRegistro = document.querySelector ('#claveRegistro');
const correoLogin = document.querySelector ('#correoLogin');
const claveLogin = document.querySelector ('#claveLogin');
//const btnModalLogin = document.querySelector ('#btnModalLogin');
const modalLogin = new bootstrap.Modal(document.getElementById('modalLogin'))

//comienza seleccionando varios elementos del Document Object Model (DOM) de la página web utilizando el método document.querySelector()
//Se utiliza el evento DOMContentLoaded para asegurarse de que el código JavaScript se ejecute después de que se haya cargado completamente el DOM de la página
document.addEventListener('DOMContentLoaded', function()
{
    btnRegister.addEventListener('click', function ()
    {
        frmLogin.classList.add('d-none');
        frmRegister.classList.remove('d-none');
    })

    btnLogin.addEventListener('click', function ()
    {
        frmRegister.classList.add('d-none');
        frmLogin.classList.remove('d-none');
    })

    //Al hacer clic en registrarse verifica si los campos del formulario de registro están completos
    registrarse.addEventListener('click', function()
    {
        if (nombreRegistro.value == '' || correoRegistro.value == '' || claveRegistro.value == '') {
            Swal.fire("Aviso", 'Todos los campos son requeridos', 'warning');
            //Si todos los campos están completos, se envían los datos del formulario a través de una solicitud POST a la URL especificada (base_url + 'clientes/registroDirecto')
        } else {
            let formData = new FormData();
            formData.append('nombreCliente', nombreRegistro.value);
            formData.append('passwordCliente', claveRegistro.value);
            formData.append('emailCliente', correoRegistro.value);
            //busca en el controlador clientes el metodo registroDirecto
            const url = base_url + 'clientes/registroDirecto';
            const http = new XMLHttpRequest();
            http.open('POST', url, true);
            http.send(formData);
            http.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200){
                    const res = JSON.parse(this.responseText);
                    Swal.fire("Aviso", res.msg, res.icono);
                    if (res.icono == 'success') {
                        setTimeout(() => {  
                            enviarCorreo(correoRegistro.value, res.token);
                        }, 1000);
                    }
                }
            }
        }
    })

    //Al hacer clic en login verifica si los campos del formulario de registro están completos
    login.addEventListener('click', function()
    {
        if (correoLogin.value == '' || claveLogin.value == '') {
            Swal.fire("Aviso", 'Todos los campos son requeridos', 'warning');
            //Si todos los campos están completos, se envían los datos del formulario a través de una solicitud POST a la URL base_url + 'clientes/loginDirecto'
        } else {
            let formData = new FormData();
            formData.append('correoLogin', correoLogin.value);
            formData.append('claveLogin', claveLogin.value);
            //busca en el controlador clientes el metodo loginDirecto
            const url = base_url + 'clientes/loginDirecto';
            const http = new XMLHttpRequest();
            http.open('POST', url, true);
            http.send(formData);
            http.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200){
                    const res = JSON.parse(this.responseText);
                    Swal.fire("Aviso", res.msg, res.icono);
                    if (res.icono == 'success') {
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    }
                }
            }
        }
    })

    crear.addEventListener('submit', function (e) {
        e.preventDefault(); // Evita que el formulario se envíe automáticamente
    
        if (nombreSolicitud.value == '' || usuario.value == '' || categoria.value == '' || descripcion.value == '') {
            Swal.fire("Aviso", 'Todos los campos son requeridos', 'warning');
        } else {
            let formData = new FormData();
            formData.append('nombreSolicitud', nombreSolicitud.value);
            formData.append('usuario', usuario.value);
            formData.append('categoria', categoria.value);
            formData.append('descripcion', descripcion.value);
    
            const url = base_url + 'clientes/crear';
            const http = new XMLHttpRequest();
            http.open('POST', url, true);
    
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const res = JSON.parse(this.responseText);
                    Swal.fire("Aviso", res.msg, res.icono);
                    if (res.icono == 'success') {
                        setTimeout(function () {
                            // Redirecciona a la página de creación
                            window.location.href = base_url + 'principal/crear';
                        }, 1000);
                    }
                }
            }
    
            http.send(formData);
        }
    });
    

    /*const modalLogin = new bootstrap.Modal(document.getElementById('modalLogin'))
    btnModalLogin.addEventListener('click', function () {
        modalLogin.show();
    })*/
});

function enviarCorreo(correo, token)
{
    //Toma el correo electrónico y el token como parámetros y realiza una solicitud POST a la URL base_url + 'clientes/enviarCorreo'
    let formData = new FormData();
    formData.append('token', token);
    formData.append('emailCliente', correo);
    //busca en el controlador clientes el metodo enviarCorreo
    const url = base_url + 'clientes/enviarCorreo';
    const http = new XMLHttpRequest();
    http.open('POST', url, true);
    http.send(formData);
    http.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            const res = JSON.parse(this.responseText);
            Swal.fire("Aviso", res.msg, res.icono);
            if (res.icono == 'success') {
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            }
        }
    }
}

function abrirModalLogin()
{
    myModal.hide();
    modalLogin.show();
}
