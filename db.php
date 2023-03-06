<?php

class ConnectDB {
    function connect(){

        define('DB_HOST', 'localhost');
        define('DB_NAME', 'project');
        define('DB_USER', 'root');
        define('DB_PASS', '');

        try{
            return new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
        }catch(Exception $e){
            echo "Something went wrong ! \n" . $e->getMessage();
        }
    }
}

?>