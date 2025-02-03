<?php include 'connections.php';?>

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
        <h1>Welcome to My Website</h1>  
    </main>

    <input type="text" id="myInput" onkeyup="busqueda()" placeholder="Search for names..">

    <galeria id="monstruos">
        
          
    <?php 
        $conn = connectionDB('MonsterHunterWilds');
        $query  = "SELECT * FROM [MonsterHunterWilds].[dbo].[monster] WHERE MonsterId > 0";
        $stmt = $conn -> prepare($query);
        $stmt -> execute();
        $datos = $stmt-> fetchAll(PDO::FETCH_ASSOC);

        $test = "test";
    
        foreach($datos as $monstruos){
            $name = $monstruos["MonsterName"];
            echo "<div class='galleryMonster'><a href='wilds_monsters.php'>
              <img src=".$monstruos["MonsterIcon"]." alt='{$name}'></a></div>";
        }
    ?>
          
    </galeria>

        

      


  </body>
  <script src="./index.js"></script>
</html>

<?php 
?>