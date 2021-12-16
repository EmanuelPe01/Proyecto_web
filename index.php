<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>America móvil</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>

<body>
    <header>
        <nav class="light-blue darken-4 nav-extended">
            <div class="nav-wrapper container nav">
                <a href="index.php" class="brand-logo">
                    <img src="img/logo.png" alt="">
                </a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="flow-text" href="index.php">Inicio</a></li>
                    <li><a class="dropdown-button flow-text" data-activates="Nosotros-d" href="#">Nosotros</a></li>
                    <li><a class="flow-text" href="html/corporativo.html">Corporativo</a></li>
                    <li><a class="btn white black-text waves-effect waves-grey" href="php/contacto.php">Contacto</a></li>
                </ul>

                <ul class="side-nav" id="mobile-demo">
                    <li>
                        <div class="user-view">
                            <div class="background">
                                <img src="img/sid-1.jpg">
                            </div>
                            <a><img class="circle" src="img/logo-1.png"></a>
                            <a><span class="white-text name">BIENVENIDO</span></a>
                        </div>
                    </li>
                    <li><a class="flow-text" href="index.php">Inicio</a></li>
                    <li><a class="dropdown-button flow-text" data-activates="Nosotros-d1" href="#">Nosotros <i
                                class="material-icons">arrow_drop_down</i></a></li>
                    <li><a class="flow-text" href="html/corporativo.html">Corporativo</a></li>
                    <li><a class="btn btn-large white black-text waves-effect waves-grey" href="php/contacto.php">Contacto</a></li>
                </ul>

                <ul class="dropdown-content" id="Nosotros-d">
                    <li><a href="html/presencia.html"><span class="grey-text text-darken-4">Presencia</span></a></li>
                    <li><a href="html/Nosotros.html"><span class="grey-text text-darken-4">Nuestra empresa</span></a></li>
                </ul>
                <ul class="dropdown-content" id="Nosotros-d1">
                    <li><a href="html/presencia.html"><span class="grey-text text-darken-4">Presencia</span></a></li>
                    <li><a href="html/Nosotros.html"><span class="grey-text text-darken-4">Nuestra empresa</span></a></li>
                </ul>
            </div>
        </nav>
        <!-- Este es un carrusel automático, pero materialize tiene más y con diferentes opciones-->
        <section class="slider">
            <ul class="slides">
                <li>
                    <img src="img/c_3.jpg">
                    <div class="caption right-align">
                        <h3>Internet de alta velocidad</h3>
                        <a href="#" class="btn btn-large white black-text waves-effect waves-grey">Leer más</a>
                    </div>
                </li>
                <li>
                    <img src="img/c_2.jpg">
                    <div class="caption left-align">
                        <h3>Nuestros servicios</h3>
                    </div>
                </li>
                <li>
                    <img src="img/telefonia1.jpg">
                    <div class="caption center-align">
                        <h1>Telefonía fija y móvil</h3>
                        <a href="#" class="btn btn-large white black-text waves-effect waves-grey">Leer más</a>
                    </div>
                </li>
                <li>
                    <img src="img/tv1.jpg">
                    <div class="caption right-align">
                        <h3>Televisión de paga y plataformas de Streaming</h3>
                        <a href="#" class="btn btn-large white black-text waves-effect waves-grey">Leer más</a>
                    </div>
                </li>
                <li>
                    <img src="img/agency-1.jpg">
                    <div class="caption center-align">
                        <h1>Comunicación Empresarial</h3>
                        <a href="#" class="btn btn-large white black-text waves-effect waves-grey">Leer más</a>
                    </div>
                </li>

            </ul>
        </section>
    </header>
    <main>

    </main>
    <footer class="light-blue darken-4 page-footer">
        <div class="container">
          <div class="row">
            <div class="col l4">
                <a href="#" class="brand-logo">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
            <div class="col l5">
                <a href="#" class="light-blue-text text-lighten-5 waves-effect btn-flat">  Aviso legal</a>
                <a href="#" class="light-blue-text text-lighten-5 waves-effect btn-flat">  Servicios</a>
                <a href="#" class="light-blue-text text-lighten-5 waves-effect btn-flat">  Contacto</a>
            </div>

          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2014 Copyright Text
         
          </div>
        </div>
      </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
        //Aqui se inicializan cada uno de los componentes que tendrá el sitio
        $(".button-collapse").sideNav();
        $('.dropdown-button').dropdown({
            inDuration: 400,
            outDuration: 500,
            constrainWidth: true,
            hover: false,
            gutter: 5,
            belowOrigin: true,
            aligment: 'center',
            stopPropagation: true
        });
        $(document).ready(function () {
            $('.slider').slider();
        });
    </script>
</body>

</html>