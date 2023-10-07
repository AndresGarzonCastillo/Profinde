const tableLista = document.querySelector('#tableListaProductos tbody');

document.addEventListener('DOMContentLoaded', function()
{
    if (tableLista) {
        getListaProductos();
    }
});

function getListaProductos()
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
            tableLista.innerHTML = html;
            document.querySelector('#totalProducto').textContent = 'Total a Pagar ' + res.moneda + ' ' + res.total;
            btnEliminarCarrito();
        }
    }
}