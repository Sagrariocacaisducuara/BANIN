<?php
    function conectar_db(){
        $bd=mysqli_connect('localhost', 'root', '', 'banin_pa');
        if(!$bd){
            echo 'No se pudo conectar a la base de datos';
        }
        else{
            echo 'Conexión exitosa';
        }
    }
?>