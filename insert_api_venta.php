<?php 

    require "includes/head.php";
    require "includes/header.php";
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>"; 
    echo "<p> Nombre:".$_POST["Nombre"]."</p>";
    echo "<p> DNI_Client:".$_POST["fkdniClient"]."</p>";  
    echo "<p> ID_Targeta:".$_POST["fkidTargeta"]."</p>";  
    $query="INSERT INTO Venta (Nom,Nombre,fkdniClient,fkidTargeta) 
    VALUES (\"$_POST[Nom]\", \"$_POST[Nombre]\", \"$_POST[fkdniClient]\",\"$_POST[fkidTargeta]\");";
  echo $query;
  $result = mysqli_query($bbdd, $query);
  if(!$result){
      echo "error query";
      mysqli_error($bbdd);
      print (mysqli_error($bbdd));
  }
?>