/* button ir arriba */
window.onscroll = function(){
    if(document.documentElement.scrollTop > 100){
        document.querySelector('.container-arriba')
        .classList.add('show');
    }
    else{
        document.querySelector('.container-arriba')
        .classList.remove('show');
    }
}

document.querySelector('.container-arriba')
.addEventListener('click', () =>{
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});


//redireccion
function redireccion(){
    location.href = "menu.html"
}




class Carrito{
    //añadir producto al carrito
    comprarProducto(e){
        e.preventDefault();
        if(e.target.classList.contains('cta-carrito')){
            const producto = e.target.parentElement;
            this.leerDatosProducto(producto);
        }
    }

    leerDatosProducto(producto){
        const infoProducto ={
            imagen: producto.querySelector('.img__cake').src,
            titulo: producto.querySelector('.paragraph__cake').textContent,
            precio: producto.querySelector('.prec__cake').textContent,
            id: producto.querySelector('button').getAttribute('data-id'),
            cantidad: 1
        }
        let productosLS;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function(productoLS){
            if(productoLS.id === infoProducto.id){
                productosLS = productoLS.id;
            }
        });
        if(productosLS === infoProducto.id){
            Swal.fire({
                type: 'info',
                title: 'Oo...',
                text: 'El producto ya se encuentra en el carrito',
                timer: 2000,
                showConfirmButton: false
            })
        }
        else{
            
            this.insertarCarrito(infoProducto);
        }
    }

    insertarCarrito(producto){
        const row = document.createElement('tr');
        row.innerHTML = ` 
        <td>
        <img src="${producto.imagen}" width=100>
        </td>
        <td>${producto.titulo}</td>
        <td>${producto.precio}</td>
        <td>
            <a href="#" class="borrar-producto" data-id="${producto.id}">X</a>
        </td>
        `;
        listaProductos.appendChild(row);
        this.guardarProductosLocalStorage(producto);
    }

    eliminarProducto(e){
        e.preventDefault();
        let producto, productoID;
        if(e.target.classList.contains('borrar-producto')){
            e.target.parentElement.parentElement.remove();
            producto = e.target.parentElement.parentElement;
            productoID = producto.querySelector('a').getAttribute('data-id');
        }
        this.eliminarProductoLocalStorage(productoID);
        this.calcularTotal();
    }

    vaciarCarrito(e){
        e.preventDefault();
        while(listaProductos.firstChild){
            listaProductos.removeChild(listaProductos.firstChild);
        }
        this.vaciarLocalStorage();
        return false;
    }

    guardarProductosLocalStorage(producto){
        let productos;
        productos = this.obtenerProductosLocalStorage();
        productos.push(producto);
        localStorage.setItem('productos', JSON.stringify(productos));
    }

    obtenerProductosLocalStorage(){
        let productoLS;

        if(localStorage.getItem('productos') === null){
            productoLS = [];
        }
        else{
            productoLS = JSON.parse(localStorage.getItem('productos'));
        }
        return productoLS;
    }

    eliminarProductoLocalStorage(productoID){
        let productosLS;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function(productoLS, menu){
            if(productoLS.id === productoID){
                productosLS.splice(menu, 1);
            }
        });

        localStorage.setItem('productos', JSON.stringify(productosLS));
    }

    leerLocalStorage(){
        let productosLS;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function(producto){
            const row = document.createElement('tr');
            row.innerHTML = ` 
            <td>
            <img src="${producto.imagen}" width=100>
            </td>
            <td style="text-align:center; padding:10px;">${producto.titulo}</td>
            <td>${producto.precio}</td>
            <td>
                <a href="#" class="borrar-producto" data-id="${producto.id}">X</a>
            </td>
            `;
            listaProductos.appendChild(row);
        });
    }

    leerLocalStorageCompra(){
        let productosLS;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function(producto){
            const row = document.createElement('tr');
            row.innerHTML = ` 
            <td>
            <img src="${producto.imagen}" width=100>
            </td>
            <td style="padding:0 20px;">${producto.titulo}</td>
            <td style="padding:0px 20px;">${producto.precio}</td>
            <td>
                <input type="number" class="cantidad" style="width:100px; margin:10px; text-align:center; border-radius:20px; background:transparent; padding:5px;" min="1" value=${producto.cantidad}>
            </td>
            <td>${(producto.precio * producto.cantidad)}</td>
            <td>
                <a href="#" class="borrar-producto" style="font-size:20px; color:#000; text-decoration:none;" data-id="${producto.id}">X</a>
            </td>
            `;
            listaCompra.appendChild(row);
        });
    }

    vaciarLocalStorage(){
        localStorage.clear();
    }

    procesarPedido(e){
        e.preventDefault();
        if(this.obtenerProductosLocalStorage().length === 0){
            Swal.fire({
                icon: 'error',
                title:  'Oops...',
                text: 'Debe agregar productos al carrito',
                timer: 2000,
                showConfirmButton: false
            })
        }
        else{
            location.href = "factura.html";     
        }
    }

    calcularTotal(){
        let productoLS;
        let total = 0, subtotal = 0, iva = 0;
        productoLS = this.obtenerProductosLocalStorage();
        for(let i = 0; i < productoLS.length; i++){
            let element = Number(productoLS[i].precio * productoLS[i].cantidad);
            total = total + element;
        }
        iva = parseFloat(total * 0.18).toFixed(2);
        subtotal = parseFloat(total-iva).toFixed(2);

        document.getElementById('subtotal').innerHTML = "S/. " + subtotal;
        document.getElementById('iva').innerHTML = "S/. " + iva;
        document.getElementById('total').innerHTML = "S/. " + total.toFixed(2);
    }
}

/* 
//carrito
const carrito = document.getElementById('carrito');
const elementos1 = document.getElementById('lista-1');
const elementos2 = document.getElementById('lista-2');
const elementos3 = document.getElementById('lista-3');
const lista = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn = document.getElementById('vaciar-carrito');

cargarEventListeners();

function cargarEventListeners(){
    elementos1.addEventListener('click', comprarElemento);
    elementos2.addEventListener('click', comprarElemento);
    elementos3.addEventListener('click', comprarElemento);
    carrito.addEventListener('click', eliminarElemento);
    vaciarCarritoBtn.addEventListener('click', vaciarCarrito);
}

function comprarElemento(e){
    e.preventDefault();
    if(e.target.classList.contains('cta-carrito')){
        const elemento = e.target.parentElement;
        leerDatosElemento(elemento);
    }
}

function leerDatosElemento(elemento){
    const infoElemento ={
        imagen: elemento.querySelector('.img__cake').src,
        titulo: elemento.querySelector('.paragraph__cake').textContent,
        precio: elemento.querySelector('.prec__cake').textContent,
        id: elemento.querySelector('button').getAttribute('data-id')
    }

    insertarCarrito(infoElemento);
}

function insertarCarrito(elemento){
    const row = document.createElement('tr');
    row.innerHTML = `
        <td>
            <img src="${elemento.imagen}" width=100>
        </td>
        <td>${elemento.titulo}</td>
        <td>${elemento.precio}</td>
        <td>
            <a href="#" class="borrar" data-id="${elemento.id}">X</a>
        </td>
    `;
    lista.appendChild(row);
}

function eliminarElemento(e){
    e.preventDefault();

    let elemento,
    elementoId;
    if(e.target.classList.contains('borrar')){
        e.target.parentElement.parentElement.remove();
        elemento = e.target.parentElement.parentElement;
        elementoId = elemento.querySelector('a').getAttribute('data-id');
    }

    actualizarTotalCarrito();
}

//total carrito
function actualizarTotalCarrito(){
    //container del carrito
    var carritoContenedor = document.getElementsByClassName('carrito')[0];
    var carritoItems = carritoContenedor.getElementsByClassName('carrito-item');
    var total = 0;
    
    for(var i=0; i < carritoItems.length;i++){
        var item = carritoItems[i];
        var precioElemento = item.getElementsByClassName('prec__cake')[0];
        console.log(precioElemento);

        var precio = parseFloat(precioElemento.innerText.replace('$','').replace('.',''));
        console.log(precio);
        var cantidadItem = item.getElementsByClassName('cta-carrito')[0];
        var cantidad = cantidadItem.value;
        total = total + (precio*cantidad);
    }

    total = math.round(total*100)/100;
    document.getElementsByClassName('total-pagar')[0].innerText = total;
}

function vaciarCarrito(){
    while(lista.firstChild){
        lista.removeChild(lista.firstChild);
    }
    return false;
}
 */