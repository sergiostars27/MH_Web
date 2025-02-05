<?php include 'connections.php'; session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <main>
        <img src="./images/dancing_jesus.gif">
        <h1>Welcome to My Website</h1>  
        <img src="./images/dancing_jesus.gif">  
    </main>

    <input type="text" id="myInput" onkeyup="busqueda()" placeholder="Search for names..">

    <galeria id="monstruos">
        
          
    <?php 
        $conn = connectionDB('MonsterHunterWorld');
        $query  = "SELECT * FROM [MonsterHunterWorld].[dbo].[maps]";
        $stmt = $conn -> prepare($query);
        $stmt -> execute();
        $datos = $stmt-> fetchAll(PDO::FETCH_ASSOC);
    
        foreach($datos as $mapas){
            $name = $mapas["MapName"];
            echo "<div class='galleryMonster'><a id='{$name}' href='world_monster.php?monster={$name}'>
              <img src=./images/MH_World/Mapas/".$mapas["MapIcon"]." alt='{$name}'></a></div>";
        }
    ?>
          
    </galeria>

        

      