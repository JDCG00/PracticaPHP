<?php
    require("configdb.php");

    class Conexion{
        private $conexion = null;

        function __construct(){
            $this -> conexion = new mysqli(server, user, password, db);
        }
        function realizarQuery($consulta){
            return $this -> conexion -> query($consulta);
        }

    }
    
?>