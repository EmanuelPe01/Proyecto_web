<?php
    header("location:contacto.php");
    $nombreUsuario =  $apellido_p = $apellido_m = $e_mail = $mensaje = "";
    $nombreUsuario = $_POST['nombre'];
    $apellido_p = $_POST['apellido_p'];
    $apellido_m = $_POST['apellido_m'];
    $e_mail = $_POST['e_mail'];
    $mensaje = $_POST['mensaje'];

    try {
        if(is_null($nombreUsuario)){
            echo "Nombre Usuario invalido.";
        }else{
            echo $nombreUsuario;
        }
        echo "<br>";
        if(is_null($apellido_p)){
            echo "Apellido Paterno invalido.";
        }else{
            echo $apellido_p;
        }
        echo "<br>";
        if(is_null($apellido_m)){
            echo "Apellido Materno invalido.";
        }else{
            echo $apellido_m;
        }
        echo "<br>";
        if(is_null($e_mail)){
            echo "Correo invalido.";
        }else{
            echo $e_mail;
        }
        echo "<br>";
        if(is_null($mensaje)){
            echo "Mensaje invalido.";
        }else{
            echo $mensaje;
        }
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }
    $mysqli = new mysqli("sql5.freemysqlhosting.net:3306", "sql5459378", "pd5u6sSVKu", "sql5459378");
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    if (!$mysqli->query("INSERT INTO musuario (nom_usu,apm_usu,app_usu,cor_usu,men_usu) VALUES ('$nombreUsuario','$apellido_p','$apellido_m','$e_mail','$mensaje');")) {
        echo "Fallo en el servidor: (" . $mysqli->errno . ") " . $mysqli->error;
    }
?>