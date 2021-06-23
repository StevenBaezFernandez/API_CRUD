<?php


    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == "OPTIONS") {
        die();
    }

    if(isset($_GET['dataFilter'])){
        require 'conexion.php';
        $parametro = $_GET['dataFilter'];

        $res = $db -> query("SELECT * FROM productos");


        $data = array();
        while($row = mysqli_fetch_array($res)){

            $new_data['codigo'] = $row['codigo'];
            $new_data['nombre'] = $row['nombre'];
            $new_data['descripcion'] = $row['descripcion'];
            $new_data['proveedor'] = $row['proveedor'];
            $new_data['precio'] = $row['precio'];

            array_push($data, $new_data);

        }

        $json = json_encode($data);
        echo($json);

    }

?>
















?>