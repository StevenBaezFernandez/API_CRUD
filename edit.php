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
        require 'conexion.php';
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $proveedor = $_POST['proveedor'];
        $precio = $_POST['precio'];

        $db -> query("UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', proveedor = '$proveedor', precio = '$precio' WHERE codigo = $codigo")?print("Registro editado"):print("No se pudo editar");
    }else{
        echo("Datos no recibidos");
    }
   



?>