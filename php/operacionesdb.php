<?php
    require('configdb.php');
   
    class OperacionesDB{

        
        function __construct(){
            $this->mysqli = new mysqli(servidor, usuario, pass, db);
        }
        function realizarQuery($consulta){
            return  $this->mysqli->query($consulta);
        }        
        function preparar($consulta){
            return $this -> mysqli -> prepare($consulta);
        }        
        
        /*
        function sacarFilas($resultado){
            return $this -> fila = $resultado->fech_array($resultado);
        }
        function nFilas($resultado){
            return $nFilas = $resultado->num_rows;
        }
        function filasAfectadas(){
            return $this->mysqli->affected_rows;
        }
        */
    }

    
?>