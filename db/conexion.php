<?php
    function getConnection(){
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $db='gestionproyectos';
        try {
            $con = mysqli_connect($host,$user,$password,$db);
            if(mysqli_connect_error()){
                throw new mysqli_sql_exception('Error en la conexion...');
            }
            return $con;
        } catch (mysqli_sql_exception $th) {
            die($th);
        }
    }
