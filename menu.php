<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Coffe Sweet/Menu</title>
</head>
<body>


    <?php 

        $carrito_mio = $_SESSION['carrito'];
        $_SESSION['carrito']=$carrito_mio;

        //conteo de carrito
        if(isset($_SESSION['carrito'])){
            for($i=0;$i<=count($carrito_mio)-1;$i ++){
                if($carrito_mio[$i]!=null){
                    $total_cantidad = $carrito_mio['cantidad'];
                    $total_cantidad ++ ;
                    $total_cantidad += $total_cantidad;
                }
            }
        }
    
    ?>
    
    <header class="header">
        <div class="logo-content">
            <a href="" class="logo"><img src="./img/Mi proyecto (5).png"></a>
            <p>COFFE SWEET</p>
        </div>

        <nav class="nav-bar">
            <a href="">Menu</a>
            <a href="">Ingresar</a>
            <span class="car" id="icon-car">
                <ion-icon name="cart-outline"></ion-icon>
                <div id="carrito">
                    <table id="lista-carrito">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <a href="" id="borrar" class="btn">Vaciar Carro</a>
                </div>
            </span>
        </nav>
    </header>

    <div class="text-container">
        <h3>Disfruta de Nuestros Productos!</h3>
        <p>Conoce todo nuestro contenido</p>
    </div>

    <div class="menu-container">
        <h1>Pasteles</h1>
        <div class="pastel-container">

            <div class="cake">
                <form action="cart.php" id="formulario" name="formulario" method="post">
                    <input name="precio" type="hidden" id="precio" value="400">
                    <input name="titulo" type="hidden" id="titulo" value="articulo 1">
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="p1-2">
                    <div class="container-cake">
                        <img src="./img/cajeta (1).png" class="img__cake">
                    </div>
                    <p class="paragraph__cake">CAJETA TRES LECHES</p>
                    <p class="prec__cake">$400.00</p>
                    <button class="cta-carrito" type="submit">Agregar al Carrito</button>
                </form>
            </div>

            <div class="cake">
                <form action="cart.php" id="formulario" name="formulario" method="post">
                    <input name="precio" type="hidden" id="precio" value="450">
                    <input name="titulo" type="hidden" id="titulo" value="articulo 2">
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="p1-2">
                    <div class="container-cake">
                        <img src="./img/chocolate.png" class="img__cake">
                    </div>
                    <p class="paragraph__cake">CHOCOLATE TRES LECHES</p>
                    <p class="prec__cake">$450.00</p>
                    <button class="cta-carrito" type="submit">Agregar al Carrito</button>
                </form>
            </div>

            <div class="cake">
                <form action="cart.php" id="formulario" name="formulario" method="post">
                    <input name="precio" type="hidden" id="precio" value="350">
                    <input name="titulo" type="hidden" id="titulo" value="articulo 3">
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="p1-2">
                    <div class="container-cake">
                        <img src="./img/durazno.png" class="img__cake">
                    </div>
                    <p class="paragraph__cake">DURAZNO TRES LECHES</p>
                    <p class="prec__cake">$350.00</p>
                    <button class="cta-carrito" type="submit">Agregar al Carrito</button>
                </form>
            </div>

            <div class="cake">
                <form action="cart.php" id="formulario" name="formulario" method="post">
                    <input name="precio" type="hidden" id="precio" value="400">
                    <input name="titulo" type="hidden" id="titulo" value="articulo 4">
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="p1-2">
                    <div class="container-cake">
                        <img src="./img/fresas1.jpg" class="img__cake">
                    </div>
                    <p class="paragraph__cake">FRESA TRES LECHES</p>
                    <p class="prec__cake">$400.00</p>
                    <button class="cta-carrito" type="submit">Agregar al Carrito</button>
                </form>
            </div>

            <div class="cake">
                <form action="cart.php" id="formulario" name="formulario" method="post">
                    <input name="precio" type="hidden" id="precio" value="375">
                    <input name="titulo" type="hidden" id="titulo" value="articulo 5">
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="p1-2">
                    <div class="container-cake">
                        <img src="./img/zana.jpg" class="img__cake">
                    </div>
                    <p class="paragraph__cake">ZANAHORIA</p>
                    <p class="prec__cake">$375.00</p>
                    <button class="cta-carrito" type="submit">Agregar al Carrito</button>
            </div>

            <div class="cake">
                <form action="cart.php" id="formulario" name="formulario" method="post">
                    <input name="precio" type="hidden" id="precio" value="300">
                    <input name="titulo" type="hidden" id="titulo" value="articulo 6">
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="p1-2">
                    <div class="container-cake">
                        <img src="./img/flan1.jpg" class="img__cake">
                    </div>
                    <p class="paragraph__cake">CHOCOFLAN</p>
                    <p class="prec__cake">$300.00</p>
                    <button class="cta-carrito" type="submit">Agregar al Carrito</button>
                </form>
            </div>

        </div>

        
          
    </div>

    <div class="menu-container">
        <h1>Cafés</h1>
        <div class="pastel-container">

            <div class="cake">
                <div class="container-cake">
                    <img src="./img/americano.jpg" class="img__cake">
                </div>
                <p class="paragraph__cake">Café Americano</p>
                <p class="prec__cake">$50.00</p>
                <button class="cta-carrito">Agregar al Carrito</button>
            </div>

            <div class="cake">
                <div class="container-cake">
                    <img src="./img/frappe.jpg" class="img__cake">
                </div>
                <p class="paragraph__cake">Frappe</p>
                <p class="prec__cake">$60.00</p>
                <button class="cta-carrito">Agregar al Carrito</button>
            </div>

            <div class="cake">
                <div class="container-cake">
                    <img src="./img/frappuccino.jpg" class="img__cake">
                </div>
                <p class="paragraph__cake">Frappucino</p>
                <p class="prec__cake">$60.00</p>
                <button class="cta-carrito">Agregar al Carrito</button>
            </div>

            <div class="cake">
                <div class="container-cake">
                    <img src="./img/latte.png" class="img__cake">
                </div>
                <p class="paragraph__cake">Latte Frío</p>
                <p class="prec__cake">$70.00</p>
                <button class="cta-carrito">Agregar al Carrito</button>
            </div>

            <div class="cake">
                <div class="container-cake">
                    <img src="./img/mocha.jpg" class="img__cake">
                </div>
                <p class="paragraph__cake">Mocha</p>
                <p class="prec__cake">$55.00</p>
                <button class="cta-carrito">Agregar al Carrito</button>
            </div>

            <div class="cake">
                <div class="container-cake">
                    <img src="./img/olla1.png" class="img__cake">
                </div>
                <p class="paragraph__cake">Café de Olla</p>
                <p class="prec__cake">$60.00</p>
                <button class="cta-carrito">Agregar al Carrito</button>
            </div>

        </div>

        
          
    </div>

    <div class="menu-container">
        <h1>Licuados</h1>
        <div class="pastel-container">

            <div class="cake">
                <div class="container-cake">
                    <img src="./img/descarga.jpg" class="img__cake">
                </div>
                <p class="paragraph__cake">Fresa</p>
                <p class="prec__cake">$40.00</p>
                <button class="cta-carrito">Agregar al Carrito</button>
            </div>

            <div class="cake">
                <div class="container-cake">
                    <img src="./img/licuadochocolate.jpg" class="img__cake">
                </div>
                <p class="paragraph__cake">Chocolate</p>
                <p class="prec__cake">$50.00</p>
                <button class="cta-carrito">Agregar al Carrito</button>
            </div>

            <div class="cake">
                <div class="container-cake">
                    <img src="./img/mango.jpg" class="img__cake">
                </div>
                <p class="paragraph__cake">Mango</p>
                <p class="prec__cake">$40.00</p>
                <button class="cta-carrito">Agregar al Carrito</button>
            </div>

            <div class="cake">
                <div class="container-cake">
                    <img src="./img/naranja.jpg" class="img__cake">
                </div>
                <p class="paragraph__cake">Naranja</p>
                <p class="prec__cake">$45.00</p>
                <button class="cta-carrito">Agregar al Carrito</button>
            </div>

            <div class="cake">
                <div class="container-cake">
                    <img src="./img/platano.jpg" class="img__cake">
                </div>
                <p class="paragraph__cake">Platano</p>
                <p class="prec__cake">$40.00</p>
                <button class="cta-carrito">Agregar al Carrito</button>
            </div>

            <div class="cake">
                <div class="container-cake">
                    <img src="./img/verde.jpg" class="img__cake">
                </div>
                <p class="paragraph__cake">Licuado Verde</p>
                <p class="prec__cake">$60.00</p>
                <button class="cta-carrito">Agregar al Carrito</button>
            </div>

        </div>

        
          
    </div>

    



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>