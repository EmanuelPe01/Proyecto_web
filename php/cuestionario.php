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
            <div class="container center">
                <div class="row">
                        <form metod="post" action="resp.php" class="col s12">
                        <div class = "col s12 m6"> 
                            <div class="indigo-rext text-darken-4"><h5>Pregunta Random</h5></div>
                            <p>
                                <input name="pregunta1" type="radio" id="r1-p1" />
                                <label for="r1-p1">Opcion 1</label>
                            </p>
                            <p>
                                <input name="pregunta1" type="radio" id="r2-p1"/>
                                <label for="r2-p1">Opcion 2</label>
                            </p>
                            <p>
                                <input name="pregunta1" type="radio" id="r3-p1"/>
                                <label for="r3-p1">Opcion 3</label>
                            </p>
                            <p>
                                <input name="pregunta1" type="radio" id="r4-p1"/>
                                <label for="r4-p1">Opcion 4</label>
                            </p>
                        </div>
                        <div class = "col s12 m6"> 
                            <div class="indigo-rext text-darken-4"><h5>Pregunta Random 2</h5></div>
                            <p>
                                <input name="pregunta2" type="radio" id="r1-p2" />
                                <label for="r1-p2">Opcion 1</label>
                            </p>
                            <p>
                                <input name="pregunta2" type="radio" id="r2-p2"/>
                                <label for="r2-p2">Opcion 2</label>
                            </p>
                            <p>
                                <input name="pregunta2" type="radio" id="r3-p2"/>
                                <label for="r3-p2">Opcion 3</label>
                            </p>
                            <p>
                                <input name="pregunta2" type="radio" id="r4-p2"/>
                                <label for="r4-p2">Opcion 4</label>
                            </p>
                        </div>
                        <div class = "col s12 m6"> 
                            <div class="indigo-rext text-darken-4"><h5>Pregunta Random 3</h5></div>
                            <p>
                                <input name="pregunta3" type="radio" id="r1-p3" />
                                <label for="r1-p3">Opcion 1</label>
                            </p>
                            <p>
                                <input name="pregunta3" type="radio" id="r2-p3"/>
                                <label for="r2-p3">Opcion 2</label>
                            </p>
                            <p>
                                <input name="pregunta3" type="radio" id="r3-p3"/>
                                <label for="r3-p3">Opcion 3</label>
                            </p>
                            <p>
                                <input name="pregunta3" type="radio" id="r4-p3"/>
                                <label for="r4-p3">Opcion 4</label>
                            </p>
                        </div>
                        <!--Copiar todo desde aqui-->
                        <div class = "col s12 m6"> 
                            <div class="indigo-rext text-darken-4"><h5>Pregunta Random n</h5></div>
                            <p>
                                <input name="pregunta4" type="radio" id="r1-p4" />
                                <label for="r1-p4">Opcion 1</label>
                            </p>
                            <p>
                                <input name="pregunta4" type="radio" id="r2-p4"/>
                                <label for="r2-p4">Opcion 2</label>
                            </p>
                            <p>
                                <input name="pregunta4" type="radio" id="r3-p4"/>
                                <label for="r3-p4">Opcion 3</label>
                            </p>
                            <p>
                                <input name="pregunta4" type="radio" id="r4-p4"/>
                                <label for="r4-p4">Opcion 4</label>
                            </p>
                        </div>
                        <!-- para agregar más preguntas al cuestionario y cambiar el id de cada opcion rn-pm 
                        n -> numero de opción
                        m -> numero de la pregunta
                        además, cambiar el name de las opciones; en cada pregunta las opciones deben tener el mismo name
                        -->
                        <div class="col s12">
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
                $('.modal').modal();
            });
        </script>
    </body>
</html>