<!DOCTYPE html>
  <html>
    <head>
        <title>Respuesta</title>
    <?php 
        echo "<h3>Respuestas</h3><br>";
      $var1 = $_POST['pregunta1'];
      $var2 = $_POST['pregunta2'];
      $var3 = $_POST['pregunta3'];
      $var4 = $_POST['pregunta4'];
    
    function saludo($varPais){
        echo "<p>Saludos hasta ".$varPais."!</p><br>";
    }
    
    
    function cursor($varCurso){
        echo "Ahora estas estudiando: ".$varCurso;
    }
    ?>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
        
        <?php
            echo "<h4>Respuesta a la pregunta 1: ".$var1."</h4><br>";
            echo "<h4>Respuesta a la pregunta 2: ".$var2."</h4><br>";
            echo "<h4>Respuesta a la pregunta 3: ".$var3."</h4><br>";
            echo "<h4>Respuesta a la pregunta 4: ".$var4."</h4><br>";
        ?>   
    </body>
  </html>
<!doctype HTML>
<html lang="es">

<head>
    
</head>
    <body>
          
    </body>
</html>