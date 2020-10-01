<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == "OPTIONS") {
        die();
    }
    if(isset($_POST['codigo']) and !empty($_POST['codigo'])){

        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $proveedor = $_POST['proveedor'];
        $precio = $_POST['precio'];

        require 'conexion.php';

        $db -> query("INSERT INTO productos(codigo, nombre, descripcion, proveedor, precio)
        VALUES($codigo, '$nombre', '$descripcion', '$proveedor', '$precio')")? print('Guardado'):print('No guardado');


    }else{
        echo('Datos no recibidos');
    }




?>