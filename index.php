<?php
    include 'php/data.php';
    $mysqli = new mysqli("sql5.freemysqlhosting.net:3306", "sql5459378", "pd5u6sSVKu", "sql5459378");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $jsonDataGoodPie =  getDataJsonPieChartGood();
    $jsonDataBadPie =  getDataJsonPieChartBad();
    $jsonDataGoodBadBar =  getDataJsonbarChartGood();
?>
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
                    <li><a class="btn white black-text waves-effect waves-grey" href="php/contacto.php">Contacto</a>
                    </li>
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
                    <li><a class="btn btn-large white black-text waves-effect waves-grey"
                            href="php/contacto.php">Contacto</a></li>
                </ul>

                <ul class="dropdown-content" id="Nosotros-d">
                    <li><a href="html/presencia.html"><span class="grey-text text-darken-4">Presencia</span></a></li>
                    <li><a href="html/Nosotros.html"><span class="grey-text text-darken-4">Nuestra empresa</span></a>
                    </li>
                </ul>
                <ul class="dropdown-content" id="Nosotros-d1">
                    <li><a href="html/presencia.html"><span class="grey-text text-darken-4">Presencia</span></a></li>
                    <li><a href="html/Nosotros.html"><span class="grey-text text-darken-4">Nuestra empresa</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Este es un carrusel automático, pero materialize tiene más y con diferentes opciones-->
        <section class="slider">
            <ul class="slides">
                <li>
                    <img src="img/c_2.jpg">
                    <div class="caption left-align">
                        <h3>Nuestros servicios</h3>
                    </div>
                </li>
                <li>
                    <img src="img/c_3.jpg">
                    <div class="caption right-align">
                        <h3>Internet de alta velocidad</h3>
                        <a href="html/Nosotros.html" class="btn btn-large white black-text waves-effect waves-grey">Leer
                            más</a>
                    </div>
                </li>
                <li>
                    <img src="img/telefonia1.jpg">
                    <div class="caption center-align">
                        <h1>Telefonía fija y móvil</h3>
                            <a href="html/Nosotros.html"
                                class="btn btn-large white black-text waves-effect waves-grey">Leer más</a>
                    </div>
                </li>
                <li>
                    <img src="img/tv1.jpg">
                    <div class="caption right-align">
                        <h3>Televisión de paga y plataformas de Streaming</h3>
                        <a href="html/presencia.html"
                            class="btn btn-large white black-text waves-effect waves-grey">Leer más</a>
                    </div>
                </li>
                <li>
                    <img src="img/agency-1.jpg">
                    <div class="caption center-align">
                        <h1>Comunicación Empresarial</h3>
                            <a href="html/presencia.html"
                                class="btn btn-large white black-text waves-effect waves-grey">Leer más</a>
                    </div>
                </li>

            </ul>
        </section>
    </header>
    <main>
        <section class="container">
            <div class="row">
                <h5 class="center">Reportes trimestrales | Q3 2021</h5>
                <div class="col s12">
                    <div class="row">
                        <div class="col s6 m6 l3 center">
                            <p class="flow-text"><a target="_blank" class="black-text"
                                    href="https://s22.q4cdn.com/604986553/files/doc_financials/2020/ar/Reporte-Anual-AMX-2020-VF.pdf">
                                    <i class="large material-icons">assessment</i><br />
                                    Informe anual 2020</a>
                            </p>
                        </div>
                        <div class="col s6 m6 l3 center">
                            <p class="flow-text"><a target="_blank" class="black-text"
                                    href="https://s22.q4cdn.com/604986553/files/doc_financials/2021/q3/3T21.pdf">
                                    <i class="large material-icons">grade</i><br />
                                    3er trimestre 2021</a>
                            </p>
                        </div>
                        <div class="col s6 m6 l3 center">
                            <p class="flow-text"><a target="_blank" class="black-text"
                                    href="https://s22.q4cdn.com/604986553/files/doc_financials/2021/q3/AMX-3Q21-FINAL.pdf">
                                    <i class="large material-icons">airplay</i><br />
                                    Presentación 3T21</a>
                            </p>
                        </div>
                        <div class="col s6 m6 l3 center">
                            <p class="flow-text"><a target="_blank" class="black-text"
                                    href="https://s22.q4cdn.com/604986553/files/doc_financials/2021/q3/AMX-3Q21-Transcript.pdf">
                                    <i class="large material-icons">domain</i><br />
                                    Transcripción 3T21</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <ul class="collapsible popout" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header active">
                        <h4>Ultimas noticias</h4>
                    </div>
                    <div class="collapsible-body center-align flow-text">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                    <div class="col s12 l6">
                                        <p>NOVIEMBRE 23, 2021</p>
                                        <a href="https://s22.q4cdn.com/604986553/files/doc_news/2021/11/20211123-ER-Espa%C3%B1ol-Cierre-Tracfone-(VF).pdf"
                                            target="_blank">América Móvil concluye venta de Tracfone a Verizon </a>
                                    </div>
                                    <div class="col s12 l6">
                                        <p>NOVIEMBRE 22, 2021</p>
                                        <a href="https://s22.q4cdn.com/604986553/files/doc_news/2021/11/20211122-ER-Espa%C3%B1ol-Asamblea-22Nov2021-(VF).pdf"
                                            target="_blank">América Móvil incrementa fondo de recompra y designa nuevas consejeras </a>
                                    </div>
                                    <div class="col s12 l6">
                                        <p>OCTUBRE 22, 2021</p>
                                        <a href="https://s22.q4cdn.com/604986553/files/doc_news/2021/10/20211022-(ESP)-ER-Renovaci%C3%B3n-Concesi%C3%B3n-Telmex.pdf"
                                            target="_blank">Plazo de Concesión de Telmex hasta 2056 </a>
                                    </div>
                                    <div class="col s12 l6">
                                        <p>SEPTIEMBRE 21, 2021</p>
                                        <a href="https://s22.q4cdn.com/604986553/files/doc_news/2021/09/20210929-ER-Espa%C3%B1ol-Asamblea-Sitios-Latam-VF.pdf"
                                            target="_blank">Accionistas de América Móvil aprueban escisión de torres de telecomunicaciones (opens in new window)
                                            Ver todo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header active">
                        <h4>Ultimos eventos</h4>
                    </div>
                    <div class="collapsible-body center-align flow-text">
                        <div class="row">
                            <div class="col s12">
                                <p>OCTURBE 29, 2021</p>
                                <a href="https://www.americamovil.com/Spanish/relacion-con-inversionistas/eventos/calendario-de-eventos/event-details/2021/AMX-reportar-los-resultados-Financieros-y-Operativos-del-3T21/default.aspx">
                                    AMX reportará los resultados Financieros y Operativos del 3T21 el 19 de octubre. La audio conferencia para discutir resultados será el 20 de octubre.
                                </a>
                            </div>
                            <div class="col s12">
                                <p>OCTUBRE 20, 2021</p>
                                <a href="https://www.americamovil.com/Spanish/relacion-con-inversionistas/eventos/calendario-de-eventos/event-details/2021/Amrica-Mvil-Investor-Day-2021-solo-Ingls/default.aspx">
                                    América Móvil Investor Day 2021 (solo Inglés)
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <section class="container-fluid center">
            <div class="row">
                <div class="col s12 l6">
                    <div id="chart_div"></div>
                </div>
                <div class="col s12 l6">
                    <div id="bad_chart_div"></div>
                </div>
                <div class="col s12">
                    <div id="bar_chart_div"></div>
                </div>
            </div> 
        </section>
    </main>
    <footer class="light-blue darken-4 page-footer">
        <div class="container">
            <div class="row">
                <div class="col l4">
                    <a href="index.php" class="brand-logo">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
                <div class="col l5">
                    <a href="html/corporativo.html" class="light-blue-text text-lighten-5 waves-effect btn-flat"> Aviso
                        legal</a>
                    <a href="html/Nosotros.html" class="light-blue-text text-lighten-5 waves-effect btn-flat">
                        Servicios</a>
                    <a href="php/contacto.php" class="light-blue-text text-lighten-5 waves-effect btn-flat">
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
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">

    // Load the Visualization API and the piechart package.
    google.charts.load('current', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);

    google.setOnLoadCallback(drawChartBad);

    google.charts.setOnLoadCallback(drawBarChart);

    function drawChart() {

      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(<?=$jsonDataGoodPie?>);
      var options = {
           title: 'Respuestas Correctas',
          is3D: 'true',
          width: 800,
          height: 600
        };
      // Instantiate and draw our chart, passing in some options.
      // Do not forget to check your div ID
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }

    function drawChartBad() {

    // Create our data table out of JSON data loaded from server.
    var data = new google.visualization.DataTable(<?=$jsonDataBadPie?>);
    var options = {
        title: 'Respuestas Incorrectas',
        is3D: 'true',
        width: 800,
        height: 600
    };
    // Instantiate and draw our chart, passing in some options.
    // Do not forget to check your div ID
    var chart = new google.visualization.PieChart(document.getElementById('bad_chart_div'));
    chart.draw(data, options);
    }

    function drawBarChart() {
      var data = google.visualization.arrayToDataTable(<?=$jsonDataGoodBadBar?>);

      var options = {
        title: 'Preguntas',
        chartArea: {width: '50%'},
        isStacked: true,
        hAxis: {
          title: 'Numero de Respuestas',
          minValue: 0,
        },
        vAxis: {
          title: 'Pregunta'
        }
      };
      var chart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
      chart.draw(data, options);
    }
    </script>
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
            $('.collapsible').collapsible();
        });
    </script>
</body>

</html>