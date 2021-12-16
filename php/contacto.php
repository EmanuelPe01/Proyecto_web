<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>America móvil</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <style>
        section {
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <header>
        <header>
            <nav class="light-blue darken-4 nav-extended">
                <div class="nav-wrapper container nav">
                    <a href="../index.php" class="brand-logo">
                        <img src="../img/logo.png" alt="">
                    </a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a class="flow-text" href="../index.php">Inicio</a></li>
                        <li><a class="dropdown-button flow-text" data-activates="Nosotros-d" href="#">Nosotros</a></li>
                        <li><a class="flow-text" href="../html/corporativo.html">Corporativo</a></li>
                        <li><a class="btn white black-text waves-effect waves-grey" href="#">Contacto</a></li>
                    </ul>

                    <ul class="side-nav" id="mobile-demo">
                        <li>
                            <div class="user-view">
                                <div class="background">
                                    <img src="../img/sid-1.jpg">
                                </div>
                                <a><img class="circle" src="../img/logo-1.png"></a>
                                <a><span class="white-text name">CONTACTANOS</span></a>
                            </div>
                        </li>
                        <li><a class="flow-text" href="../index.php">Inicio</a></li>
                        <li><a class="dropdown-button flow-text" data-activates="Nosotros-d1" href="#">Nosotros <i class="material-icons">arrow_drop_down</i></a></li>
                        <li><a class="flow-text" href="../html/corporativo.html">Corporativo</a></li>
                        <li><a class="btn btn-large white black-text waves-effect waves-grey" href="#">Contacto</a></li>
                    </ul>

                    <ul class="dropdown-content" id="Nosotros-d">
                        <li><a href="../html/presencia.html"><span class="grey-text text-darken-4">Presencia</span></a></li>
                        <li><a href="../html/Nosotros.html"><span class="grey-text text-darken-4">Nuestra empresa</span></a></li>
                    </ul>
                    <ul class="dropdown-content" id="Nosotros-d1">
                        <li><a href="../html/presencia.html"><span class="grey-text text-darken-4">Presencia</span></a></li>
                        <li><a href="../html/Nosotros.html"><span class="grey-text text-darken-4">Nuestra empresa</span></a></li>
                    </ul>
                </div>
            </nav>
            <div class="parallax-container">
                <div class="parallax"><img src="../img/parallax-contacto.jpg"></div>
            </div>
        </header>
        <main>
            <section class="container">
                <h1 class="center">Contacto</h1>
                <div class="row">
                    <!--Formulario de contacto------------------- Puedes cambiarle el nombre al action pero en el archivo debes incluir la linea de codigo que está ahí -->
                    <form class="col s12 m12 l6" action="validar.php">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="nombre" type="text" class="validate">
                                <label for="nombre">Nombre(s) </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 l6">
                                <input id="apellido_p" type="text" class="validate">
                                <label for="apellido_p">Apellido paterno </label>
                            </div>
                            <div class="input-field col s12 l6">
                                <input id="apellido_m" type="text" class="validate">
                                <label for="apellido_p">Apellido materno </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="e-mail" type="email" class="validate">
                                <label for="e-mail">Correo electrónico</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="mensaje" class="materialize-textarea"></textarea>
                                <label for="mensaje">Escriba aquí su mensaje</label>
                            </div>
                        </div>
                        <a class="center light-blue darken-4 waves-effect waves-light btn modal-trigger" href="#modal1">Enviar <i class="material-icons right">send</i></a>
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                                <p class="flow-text">Gracias por contactarnos</p>
                            </div>
                            <div class="modal-footer">
                                <a class="modal-action modal-close waves-effect waves-green btn-flat"><input type="submit" value="Cerrar"></a>
                            </div>
                        </div>
                    </form>

                    <div class="center col s12 m12 l6">
                        <div class="col s12">
                            <h4>Correo electrónico</h4>
                            <img src="../img/icon-correo.png" width="100px" height="100px">
                            <h5>investor.relations@americamovil.com</h5>
                            <h4>Teléfono</h4>
                            <img src="../img/icon-tel.png" width="100px" height="100px">
                            <h5>+52 5525813700</h5>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="light-blue darken-4 page-footer">
        <div class="container">
          <div class="row">
            <div class="col l4">
                <a href="#" class="brand-logo">
                    <img src="../img/logo.png" alt="">
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
            $(document).ready(function() {
                $('.parallax').parallax();
                $('.modal').modal();
            });
        </script>
</body>