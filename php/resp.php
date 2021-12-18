    <?php 
    header("location:contacto.php");
    $mysqli = new mysqli("sql5.freemysqlhosting.net:3306", "sql5459378", "pd5u6sSVKu", "sql5459378");
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $var1 = $_POST['preg1'];
    $var2 = $_POST['preg2'];
    $var3 = $_POST['preg3'];
    $var4 = $_POST['preg4'];
    $num1 = $num2 = $num3 = $num4 = 0;
    $bad1 = $bad2 = $bad3 = $bad4 = 0;

    $mysqli->real_query("SELECT * FROM mrespuestas");
    $resultado = $mysqli->use_result();
    while ($fila = $resultado->fetch_assoc()) {
      $id = $fila['id_res'];
      if($id == 1){
          $num1 = $fila['goo_res'];
          $bad1 = $fila['bad_res'];
      }else if($id == 2){
        $num2 = $fila['goo_res'];
        $bad2 = $fila['bad_res'];
      }else if($id == 3){
        $num3 = $fila['goo_res'];
          $bad3 = $fila['bad_res'];
       }else if($id == 4){
        $num4 = $fila['goo_res'];
          $bad4 = $fila['bad_res'];
      }
    }
    if($var1 == "Telefónica"){
      $num1 = $num1 + 1;
      $sql ="UPDATE mrespuestas SET goo_res=".$num1." WHERE id_res=1";
      if (!$mysqli->query($sql)) {
        echo "Fallo en el servidor: (" . $mysqli->errno . ") " . $mysqli->error;
      } 
    }else{
      $bad1 = $bad1 + 1;
      $sql ="UPDATE mrespuestas SET bad_res=".$bad1." WHERE id_res=1";
      if (!$mysqli->query($sql)) {
        echo "Fallo en el servidor: (" . $mysqli->errno . ") " . $mysqli->error;
      } 
    }
    if($var2 == "Latinoamerica"){
      $num2 = $num2 + 1;
      $sql ="UPDATE mrespuestas SET goo_res=".$num2." WHERE id_res=2";
      if (!$mysqli->query($sql)) {
        echo "Fallo en el servidor: (" . $mysqli->errno . ") " . $mysqli->error;
      } 
    }else{
      $bad2 = $bad2 + 1;
      $sql ="UPDATE mrespuestas SET bad_res=".$bad2." WHERE id_res=2";
      if (!$mysqli->query($sql)) {
        echo "Fallo en el servidor: (" . $mysqli->errno . ") " . $mysqli->error;
      } 
    }
    if($var3 == "Plaza Carso, Polanco"){
      $num3 = $num3 + 1;
      $sql ="UPDATE mrespuestas SET goo_res=".$num3." WHERE id_res=3";
      if (!$mysqli->query($sql)) {
        echo "Fallo en el servidor: (" . $mysqli->errno . ") " . $mysqli->error;
      } 
    }else{
      $bad3 = $bad3 + 1;
      $sql ="UPDATE mrespuestas SET bad_res=".$bad3." WHERE id_res=3";
      if (!$mysqli->query($sql)) {
        echo "Fallo en el servidor: (" . $mysqli->errno . ") " . $mysqli->error;
      } 
    }
    if($var4 == "Carlos Slim Helu"){
      $num4 = $num4 + 1;
      $sql ="UPDATE mrespuestas SET goo_res=".$num4." WHERE id_res=4";
      if (!$mysqli->query($sql)) {
        echo "Fallo en el servidor: (" . $mysqli->errno . ") " . $mysqli->error;
      } 
    }else{
      $bad4 = $bad4 + 1;
      $sql ="UPDATE mrespuestas SET bad_res=".$bad4." WHERE id_res=4";
      if (!$mysqli->query($sql)) {
        echo "Fallo en el servidor: (" . $mysqli->errno . ") " . $mysqli->error;
      } 
    }
    
?>