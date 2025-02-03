<?php

    function connectionDB($name){
        $dbname = $name;
        $user = 'sa';
        $password = "root";
        $dsn = "sqlsrv:Server=DESKTOP-V78LTMH\SQLEXPRESS";$dbname;$user;$password;
        try{
            $conn = new PDO($dsn);
            if($conn){
                return $conn;
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
?>