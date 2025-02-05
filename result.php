<?php 
include 'connections.php'; session_start();
$data = json_decode(stripslashes($_POST['lista']));

  // here i would like use foreach:
  foreach($data as $d){
    $conn = connectionDB('MonsterHunterWorld');
    $query  = "INSERT into [MonsterHunterWorld].[dbo].[items] (ItemName,ItemZeni,isDrop) values ('{$d}',0,1)";
    $stmt = $conn -> prepare($query);
    $stmt -> execute();
  }
?>