<?php

    class Conexion extends mysqli{

        // atributos de clase
        private $host = "us-cdbr-east-05.cleardb.net";
        private $user = "b0f02aded8140c";
        private $pass = "ba44eef5";
        private $db_name = "heroku_564573ab0eee2a8";

        function __construct(){
            parent:: __construct($this -> host, $this -> user, $this -> pass, $this -> db_name, );

            $this-> connect_error ? die("Error de conexion") : print("");
        }

    }




$db = new Conexion();



?>