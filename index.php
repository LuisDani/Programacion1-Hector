<?php
session_start();

if (!isset($_SESSION['username'])) {
	header('Location: login.html');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Coffe Sweet</title>
</head>
<body>
    
    <header class="header">
        <div class="logo-content">
            <a href="" class="logo"><img src="./img/Mi proyecto (5).png"></a>
            <p>COFFE SWEET</p>
        </div>

        <nav class="nav-bar">
            <a href="./menu.html">Menu</a>
            <a href="./Login/logout.php">Cerrar sesion</a>
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

    <div class="hero-container">
        <img src="./img/po back.jpg">
        <div class="slogan-container">
            <span class="text first-text">Dale a tu vida</span>
            <span class="text second-text">Sabor</span>
        </div>
    </div>

    <section>
        <div class="container-po">
            <div class="box-img">
                    <div class="absolute-content">
                        <button onclick="redireccion()">Ver más</button>
                    </div>
                <img src="./img/po3.jpg">
            </div>
                <div class="po-text">
                    <h2>Disfruta de Nuestros Postres</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis provident tempore delectus ut, amet illo quod atque vel excepturi molestias beatae adipisci id eius expedita quasi quam obcaecati eos ducimus.</p>
                </div>
        </div>

        <div class="container-po">
            <div class="box-img">
                    <div class="absolute-content">
                        <button onclick="redireccion()">Ver más</button>
                    </div>
                <img src="./img/beb1.webp">
            </div>
                <div class="po-text">
                    <h2>Disfruta de Nuestros Cafés</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis provident tempore delectus ut, amet illo quod atque vel excepturi molestias beatae adipisci id eius expedita quasi quam obcaecati eos ducimus.</p>
                </div>
        </div>

        <div class="container-po">
            <div class="box-img">
                    <div class="absolute-content">
                        <button onclick="redireccion()">Ver más</button>
                    </div>
                <img src="./img/licua.jpg">
            </div>
                <div class="po-text">
                    <h2>Disfruta de Nuestros Licuados</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis provident tempore delectus ut, amet illo quod atque vel excepturi molestias beatae adipisci id eius expedita quasi quam obcaecati eos ducimus.</p>
                </div>
        </div>

    </section>

    <footer>

        <div class="footer__term">
            <a href="./terminos/term.html">Condiciones de uso</a>
            <a href="./terminos/politica.html">Aviso de Privacidad</a>
            <a href="">Gestión del Copyright</a>
        </div>

        <div class="footer__redes">
            <div class="btns">
                <a href="https://es-la.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="https://twitter.com/"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
        </div>

    </footer>

    <div class="container-arriba">
        <div class="button-arriba">
            <i><ion-icon name="arrow-up-outline"></ion-icon></i>
        </div>
    </div>




    <script src="index.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>

</body>
</html>