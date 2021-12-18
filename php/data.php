<?php
    function getDataJsonPieChartGood(){
        try{
            $data = array();
            $rows = array();
            $cols = array();
            $mysqli = new mysqli("sql5.freemysqlhosting.net:3306", "sql5459378", "pd5u6sSVKu", "sql5459378");
            if ($mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            $resultado = $mysqli->query("SELECT * FROM mrespuestas;");
            while ($row = $resultado->fetch_assoc()) {
                $temp = array();
                if($row['id_res'] == 1){
                    $temp[] = array('v' => (string) "¿Cual de las siguientes compañías NO PERTENECE a America Movil? "); 
                }else if($row['id_res'] == 2){
                    $temp[] = array('v' => (string) "¿En cuál de estas regiones América Móvil es el líder en servicios integrados de telecomunicaciones?"); 
                }else if($row['id_res'] == 3){
                    $temp[] = array('v' => (string) "¿En donde se encuentra la sede de America Movil?"); 
                }else{
                    $temp[] = array('v' => (string) "¿Nombre de nuestro socio fundador?"); 
                }
                $temp[] = array('v' => (int) $row['goo_res']); 
                $rows[] = array('c' => $temp);
            }
            array_push($cols, array('label' => 'Pregunta', 'type' => 'string'));
            array_push($cols,array('label' => 'Percentage', 'type' => 'number'));
            $data['cols'] = $cols;
            $data['rows'] = $rows;
            $jsonData = json_encode($data);
            return $jsonData;
        }catch(Exception $ex){
            print($ex->getMessage());
            return $ex->getMessage();
        }
    }
    function getDataJsonPieChartBad(){
        try{
            $data = array();
            $rows = array();
            $cols = array();
            $mysqli = new mysqli("sql5.freemysqlhosting.net:3306", "sql5459378", "pd5u6sSVKu", "sql5459378");
            if ($mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            $resultado = $mysqli->query("SELECT * FROM mrespuestas;");
            while ($row = $resultado->fetch_assoc()) {
                $temp = array();
                // the following line will be used to slice the Pie chart
                if($row['id_res'] == 1){
                    $temp[] = array('v' => (string) "¿Cual de las siguientes compañías NO PERTENECE a America Movil? "); 
                }else if($row['id_res'] == 2){
                    $temp[] = array('v' => (string) "¿En cuál de estas regiones América Móvil es el líder en servicios integrados de telecomunicaciones?"); 
                }else if($row['id_res'] == 3){
                    $temp[] = array('v' => (string) "¿En donde se encuentra la sede de America Movil?"); 
                }else{
                    $temp[] = array('v' => (string) "¿Nombre de nuestro socio fundador?"); 
                }
                

                // Values of each slice
                $temp[] = array('v' => (int) $row['bad_res']); 
                $rows[] = array('c' => $temp);
            }
            array_push($cols, array('label' => 'Pregunta', 'type' => 'string'));
            array_push($cols,array('label' => 'Percentage', 'type' => 'number'));
            $data['cols'] = $cols;
            $data['rows'] = $rows;

            $jsonData = json_encode($data);

            return $jsonData;
        }catch(Exception $ex){
            print($ex->getMessage());
            return $ex->getMessage();
        }
    }
    function getDataJsonbarChartGood(){
        try{
            $data = array();
            $rows = array();
            $cols = array();
            $mysqli = new mysqli("sql5.freemysqlhosting.net:3306", "sql5459378", "pd5u6sSVKu", "sql5459378");
            if ($mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            array_push($cols, 'Pregunta');
            array_push($cols,'Correcta');
            array_push($cols,'Incorrecta');
            array_push($data,$cols);
            $resultado = $mysqli->query("SELECT * FROM mrespuestas;");
            while ($row = $resultado->fetch_assoc()) {
                $temp = array();
                if($row['id_res'] == 1){
                    array_push($temp,"¿Cual de las siguientes compañías NO PERTENECE a America Movil? ");
                }else if($row['id_res'] == 2){
                    array_push($temp,"¿En cuál de estas regiones América Móvil es el líder en servicios integrados de telecomunicaciones?");
                }else if($row['id_res'] == 3){
                    array_push($temp,"¿En donde se encuentra la sede de America Movil?");
                }else{
                    array_push($temp,"¿Nombre de nuestro socio fundador?");
                }
                
                array_push($temp, (int) $row['goo_res']);
                array_push($temp, (int) $row['bad_res']);
                array_push($data,$temp);
            }
            $jsonData = json_encode($data);
            return $jsonData;
        }catch(Exception $ex){
            print($ex->getMessage());
            return $ex->getMessage();
        }
    }
?>