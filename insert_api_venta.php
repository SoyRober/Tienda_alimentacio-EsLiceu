<?php 

    require "includes/head.php";
    require "includes/header.php";
    require "includes/mysql.php"; 
    echo "<p> Nombre:".$_POST["Nombre"]."</p>";
    echo "<p> DNI del Client:".$_POST["fkdniClient"]."</p>";  
    echo "<p> ID de la Targeta:".$_POST["fkidTargeta"]."</p>";  
    $query="INSERT INTO Venta (Nombre,fkdniClient,fkidTargeta) 
    VALUES (\"$_POST[Nombre]\", \"$_POST[fkdniClient]\",\"$_POST[fkidTargeta]\");";
  echo $query;
  $result = mysqli_query($bbdd, $query);
  if(!$result){
      echo "error query";
      mysqli_error($bbdd);
      print (mysqli_error($bbdd));
  }
?>