<?php

    function conectionDB($name){
        $host = 'localhost';
        $dbname = $name;
        $username = 'sserver';
        $password = 'root';
        $server = 'DESKTOP-V78LTMH\SQLEXPRESS';
        try{
            $conn = new PDO("sqlsrv:server=".$server.";database=".$dbname,$username,$password);
            if($conn){
                return $conn;
      }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    try{
        $test = conectionDB('MonsterHunterWilds');

        if($test){
            echo "Conectado correctamente";
            echo "\n";
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>