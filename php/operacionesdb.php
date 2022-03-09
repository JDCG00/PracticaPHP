<?php
    require('conexion.php');
   
    class OperacionesDB{
        private $operaciones = null;

        function preparar($sqlquery){
            return $this -> operaciones -> prepare($sqlquery);
        }
    }

    
?>