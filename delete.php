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
        var_dump($codigo);
        $db -> query("DELETE FROM productos WHERE codigo = $codigo")?print("Registro Eliminado"):print("No se pudo Eliminar");
    }else{
        echo("Datos no recibidos");
    }
   



?>