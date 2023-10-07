const btnAddDeseo = document.querySelectorAll('.btnAddDeseo');
const btnAddCarrito = document.querySelectorAll('.btnAddCarrito');
const btnDeseo = document.querySelector('#btnCantidadDeseo');
const btnCarrito = document.querySelector('#btnCantidadCarrito');
const verCarrito = document.querySelector('#verCarrito');
const tableListaCarrito = document.querySelector('#tableListaCarrito tbody');
const myModal = new bootstrap.Modal(document.getElementById('myModal'))
let listaDeseo, listaCarrito;

document.addEventListener('DOMContentLoaded', function()
{
    if (localStorage.getItem('listaDeseo') != null){
        listaDeseo = JSON.parse(localStorage.getItem('listaDeseo'));
    }
    
    if (localStorage.getItem('listaCarrito') != null){
        listaCarrito = JSON.parse(localStorage.getItem('listaCarrito'));
    }

    for (let i = 0; i < btnAddDeseo.length; i++) {
        btnAddDeseo[i].addEventListener('click', function(){
            let id_Producto = btnAddDeseo[i].getAttribute('prod');
            agregarDeseo(id_Producto);
        });
    }
    
    for (let i = 0; i < btnAddCarrito.length; i++) {
        btnAddCarrito[i].addEventListener('click', function(){
            let id_Producto = btnAddCarrito[i].getAttribute('prod');
            agregarCarrito(id_Producto, 1);
        });
    }
    cantidadDeseo();
    cantidadCarrito();

    verCarrito.addEventListener('click', function(){
        getListaCarrito();
        myModal.show();
    })
})

function agregarDeseo(id_Producto)
{
    if (localStorage.getItem('listaDeseo') == null){
        listaDeseo = [];
    } else {
        let existe = JSON.parse(localStorage.getItem('listaDeseo'));
        for (let i = 0; i < existe.length; i++) {
            if (existe[i]['id_Producto'] == id_Producto){
                Swal.fire(
                    'Aviso',
                    'El Producto ya esta en la lista de deseos',
                    'warning'
                  )
                  return;
            }
        }
        listaDeseo.concat(localStorage.getItem('listaDeseo'));
    }
    listaDeseo.push({
        "id_Producto" : id_Producto,
        "cantidad" : 1
    })
    localStorage.setItem('listaDeseo', JSON.stringify(listaDeseo));
    Swal.fire(
        'Aviso',
        'Producto agregado a la lista de deseos',
        'success'
      )
    cantidadDeseo();
}

function cantidadDeseo()
{
    let listas = JSON.parse(localStorage.getItem('listaDeseo'));
    if (listas != null){
        btnDeseo.textContent = listas.length;
    } else {
        btnDeseo.textContent = 0;
    }
}

function agregarCarrito(id_Producto, cantidad, accion = false)
{
    if (localStorage.getItem('listaCarrito') == null){
        listaCarrito = [];
    } else {
        let existe = JSON.parse(localStorage.getItem('listaCarrito'));
        for (let i = 0; i < existe.length; i++) {
            if (accion) {
                //btnEliminarDeseo(id_Producto);
                eliminarListaDeseo(id_Producto);
            }
            if (existe[i]['id_Producto'] == id_Producto){
                Swal.fire(
                    'Aviso',
                    'El Producto ya esta en el carrito de compras',
                    'warning'
                  )
                  return;
            }
        }
        listaCarrito.concat(localStorage.getItem("listaCarrito"));
    }
    listaCarrito.push({
        id_Producto : id_Producto,
        cantidad : cantidad,
    });
    localStorage.setItem('listaCarrito', JSON.stringify(listaCarrito));
    Swal.fire(
        'Aviso',
        'Producto agregado al carrito de compras',
        'success'
      )
    cantidadCarrito();
}

function cantidadCarrito()
{
    let listas = JSON.parse(localStorage.getItem('listaCarrito'));
    if (listas != null){
        btnCarrito.textContent = listas.length;
    } else {
        btnCarrito.textContent = 0;
    }
}

function getListaCarrito()
{
    const url = base_url + 'principal/listaProductos';
    const http = new XMLHttpRequest();
    http.open('POST', url, true);
    http.send(JSON.stringify(listaCarrito));
    http.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            const res = JSON.parse(this.responseText);
            let html = '';
            res.productos.forEach(producto => {
                html += `<tr>
                            <td>
                                <img class="img-thumbnail rounded-circle" src="${producto.productoImagen}" alt="" width="100">
                            </td>
                            <td>${producto.productoNombre}</td>
                            <td>
                                <span class="badge bg-info">${res.moneda + ' ' + producto.productoPrecio}</span>
                            </td>
                            <td>${producto.cantidad}</td>
                            <td>${producto.subTotal}</td>
                            <td>
                                <button class="btn btn-danger btnEliminarCarrito" type="button" prod="${producto.idProducto}">
                                    <i class="fas fa-trash"></i>
                                </button>                                
                            </td>
                        </tr>
                `;
            });
            tableListaCarrito.innerHTML = html;
            document.querySelector('#totalGeneral').textContent = 'Subtotal ' + res.moneda + ' ' + res.total;
            btnEliminarCarrito();
        }
    }
}

function btnEliminarCarrito()
{
    let listaEliminar = document.querySelectorAll('.btnEliminarCarrito');
    for (let i = 0; i < listaEliminar.length; i++) {
        listaEliminar[i].addEventListener('click', function(){
            let idProducto = listaEliminar[i].getAttribute('prod');
            eliminarListaCarrito(idProducto);
        })       
    }
}
    
function eliminarListaCarrito(idProducto)
{
    for (let i = 0; i < listaCarrito.length; i++) {
        if (listaCarrito[i]['id_Producto'] == idProducto){
                listaCarrito.splice(i, 1);
        }       
    }
    localStorage.setItem('listaCarrito', JSON.stringify(listaCarrito));
    getListaCarrito();
    cantidadCarrito();
    Swal.fire(
        'Aviso',
        'Se elimino producto del carrito',
        'success'
    )
}    
