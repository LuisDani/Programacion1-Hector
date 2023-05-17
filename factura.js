const compra = new Carrito();
const listaCompra = document.querySelector('#lista-compra tbody');
const carrito = document.getElementById('carrito');
const procesarCompraBtn = document.getElementById('procesar-compra');

cargarEventos();

function cargarEventos(){
    document.addEventListener('DOMContentLoaded', compra.leerLocalStorageCompra());

    carrito.addEventListener('click', (e)=>{compra.eliminarProducto(e)});
    compra.calcularTotal();
    procesarCompraBtn.addEventListener('click', procesarCompra);
}

function procesarCompra(e){
    e.preventDefault();

    if(compra.obtenerProductosLocalStorage().length === 0){
        Swal.fire({
            icon: 'error',
            title:  'Oops...',
            text: 'Debe agregar productos al carrito',
            timer: 2000,
            showConfirmButton: false
        }).then(function(){
            window.location = "menu.html";
        })
    }
    else{
        const cargandoGif = document.querySelector('#cargando');
        cargandoGif.style.display = 'block';

        const enviado = document.createElement('img');
        enviado.src = 'img/compra en camino.gif';
        enviado.style.display = 'block';
        enviado.width = '200';

        setTimeout(()=>{
            cargandoGif.style.display ='none'
            document.querySelector('#loaders').appendChild(enviado);
            setTimeout(()=>{
                enviado.remove();
                compra.vaciarLocalStorage();
                window.location = "menu.html";
            },2000);
        },3000);
    }
}