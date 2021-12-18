<?php
 include 'data.php';
$mysqli = new mysqli("sql5.freemysqlhosting.net:3306", "sql5459378", "pd5u6sSVKu", "sql5459378");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";
$mysqli->real_query("SELECT * FROM musuario");
$resultado = $mysqli->use_result();
echo "Orden del conjunto de resultados...\n";
while ($fila = $resultado->fetch_assoc()) {
    echo '<br>';
    echo " id = " . $fila['id_usu'] . "\n";
    echo " nombre = " . $fila['nom_usu'] . "\n";
    echo " apellido materno = " . $fila['apm_usu'] . "\n";
    echo " apellido paterno = " . $fila['app_usu'] . "\n";
    echo " correo = " . $fila['cor_usu'] . "\n";
    echo " mensaje = " . $fila['men_usu'] . "\n";
}

echo "<br>adasdas";
$jsonDataGoodPie =  getDataJsonPieChartGood();
$jsonDataBadPie =  getDataJsonPieChartBad();
$jsonDataGoodBadBar =  getDataJsonbarChartGood();
echo $jsonDataGoodPie;
echo $jsonDataGoodBadBar;
?>

<html>
  <head>
    <!--Load the Ajax API-->
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
  </head>

  <body>
    <!--this is the div that will hold the pie chart-->
    <div id="chart_div"></div>
    <div id="bad_chart_div"></div>
    <div id="bar_chart_div"></div>
  </body>
</html>