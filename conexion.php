<?php

    class Conexion extends mysqli{

        // atributos de clase
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db_name = "api_crud";

        function __construct(){
            parent:: __construct($this -> host, $this -> user, $this -> pass, $this -> db_name, );

            $this-> connect_error ? die("Error de conexion") : print("");
        }

    }




$db = new Conexion();



?>