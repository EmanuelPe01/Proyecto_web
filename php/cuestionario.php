<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
        <title>Cuestionario - America móvil</title>
    
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    </head>
    <body>
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
                        <li><a class="btn white black-text waves-effect waves-grey" href="contacto.php">Contacto</a></li>
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
                        <li><a class="dropdown-button flow-text" data-activates="Nosotros-d1" href="">Nosotros <i class="material-icons">arrow_drop_down</i></a></li>
                        <li><a class="flow-text" href="../html/corporativo.html">Corporativo</a></li>
                        <li><a class="btn btn-large white black-text waves-effect waves-grey" href="contacto.php">Contacto</a></li>
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
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="indigo-text text-darken-4 "><h3 class="center-align">Cuestionario</h3></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                        <form  class="col s12" name="forma" action ="resp.php" enctype="multipart/form-data" method="POST">
                        <div class = "col s12 m6"> 
                            <div class="indigo-rext text-darken-4"><h5>¿Cual de las siguientes compañías NO PERTENECE a America Movil?</h5></div>
                            <p>
                     <input class="with-gap" name="preg1" id="preg1res1" type="radio" value="Telmex" checked/>
                      <label for="preg1res1">Telmex</label>
                     </p>
                     <p>
                     <input class="with-gap" name="preg1" id="preg1res2" type="radio" value="Telnor" />
                      <label for="preg1res2">Telnor</label>
                     </p>
                     <p>
                     <input class="with-gap" name="preg1" id="preg1res3" type="radio" value="Telcel" />
                      <label for="preg1res3">Telcel</label>
                     </p>
                     <p>
                     <input class="with-gap" name="preg1" id="preg1res4" type="radio" value="Telefónica" />
                      <label for="preg1res4">Telefónica</label>
                     </p>
                        </div>
                        <div class = "col s12 m6"> 
                            <div class="indigo-rext text-darken-4"><h5>¿En cuál de estas regiones América Móvil es el líder en servicios integrados de telecomunicaciones?</h5></div>
                            <p>
                     <input class="with-gap" name="preg2" id="preg2res1" type="radio" value="India" checked />
                      <label for="preg2res1">India</label>
                     </p>
                     <p>
                     <input class="with-gap" name="preg2" id="preg2res2" type="radio" value="Latinoamerica"/>
                      <label for="preg2res2">Latinoamérica</label>
                     </p>
                     <p>
                     <input class="with-gap" name="preg2" id="preg2res3" type="radio" value="China"/>
                      <label for="preg2res3">China</label>
                     </p>
                     <p>
                     <input class="with-gap" name="preg2" id="preg2res4" type="radio" value="ninguna" />
                      <label for="preg2res4">Ninguna de las anteriores</label>
                     </p>
                        </div>
                        <div class = "col s12 m6"> 
                            <div class="indigo-rext text-darken-4"><h5>¿En donde se encuentra la sede de America Movil?</h5></div>
                            <p>
                     <input class="with-gap" name="preg3" id="preg3res1" type="radio" value="Torre mayor, Paseo de la Reforma" checked />
                      <label for="preg3res1">Torre mayor, Paseo de la Reforma</label>
                     </p>
                     <p>
                     <input class="with-gap" name="preg3" id="preg3res2" type="radio" value="Plaza Carso, Polanco" />
                      <label for="preg3res2">Plaza Carso, Polanco</label>
                     </p>
                     <p>
                     <input class="with-gap" name="preg3" id="preg3res3" type="radio" value="Torre Latinoamericana, Centro Histórico" />
                      <label for="preg3res3">Torre Latinoamericana, Centro Histórico</label>
                     </p>
                     <p>
                     <input class="with-gap" name="preg3" id="preg3res4" type="radio" value="Pabellon M, Monterrey" />
                      <label for="preg3res4">Pabellon M, Monterrey</label>
                     </p>
                        </div>
                        <!--Copiar todo desde aqui-->
                        <div class = "col s12 m6"> 
                            <div class="indigo-rext text-darken-4"><h5>¿Nombre de nuestro socio fundador?</h5></div>
                            <p>
                     <input class="with-gap" name="preg4" id="preg4res1" type="radio" value="Carlos Slim Helu" checked />
                      <label for="preg4res1">Carlos Slim Helú</label>
                     </p>
                     <p>
                     <input class="with-gap" name="preg4" id="preg4res2" type="radio" value="Daniel Hajj Aboumrad" />
                      <label for="preg4res2">Daniel Hajj Aboumrad</label>
                     </p>
                     <p>
                     <input class="with-gap" name="preg4" id="preg4res3" type="radio" value="Arturo Elías Ayub" />
                      <label for="preg4res3">Arturo Elías Ayub</label>
                     </p>
                     <p>
                     <input class="with-gap" name="preg4" id="preg4res4" type="radio" value="Ninguno de los anteriores" />
                      <label for="preg4res4">Ninguno de los anteriores</label>
                     </p>
                        </div>
                        
                        <div class="col s12 center">
                            <br/><br/>
                            <a class="center light-blue darken-4 waves-effect waves-light btn modal-trigger" href="#modal2">Enviar <i class="material-icons right">send</i></a>
                            <div id="modal2" class="modal">
                                <div class="modal-content">
                                    <p class="flow-text">Gracias por contestar</p>
                                </div>
                                <div class="modal-footer">
                                    <a class="modal-action modal-close waves-effect waves-green btn-flat"><input type="submit" value="Cerrar"></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <footer class="light-blue darken-4 page-footer">
        <div class="container">
          <div class="row">
            <div class="col l4">
                <a href="../index.php" class="brand-logo">
                    <img src="../img/logo.png" alt="">
                </a>
            </div>
            <div class="col l5">
                    <a href="../html/corporativo.html" class="light-blue-text text-lighten-5 waves-effect btn-flat"> Aviso
                        legal</a>
                    <a href="../html/Nosotros.html" class="light-blue-text text-lighten-5 waves-effect btn-flat">
                        Servicios</a>
                    <a href="contacto.php" class="light-blue-text text-lighten-5 waves-effect btn-flat">
                        Contacto</a>
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
                $('.modal').modal();
            });
        </script>
    </body>
</html>