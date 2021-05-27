<?php   
//Preguntar Tomeu//  
    require "includes/head.php";
    require "includes/header.php";
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>"; 
    echo "<p> dniClient:".$_POST["dniClient"]."</p>"; 
    echo "<p> Pais:".$_POST["Pais"]."</p>";
    echo "<p> CP:".$_POST["CP"]."</p>";  
    echo "<p> Telefon:".$_POST["Telefon"]."</p>";
    echo "<p> Provincia:".$_POST["Provincia"]."</p>";
    echo "<p> Poblacio:".$_POST["Poblacio"]."</p>";
    echo "<p> Adreca:".$_POST["Adreca"]."</p>";    
    echo "<p> fkidTargeta:" .$_POST["fkidTargeta"]. "</p>";
    $query="INSERT INTO Client (Nom,dniClient,Pais,CP,Telefon,Provincia,Poblacio,Adreca,fkidTargeta) 
    VALUES (\"$_POST[Nom]\", \"$_POST[dniClient]\", \"$_POST[Pais]\", \"$_POST[CP]\", \"$_POST[Telefon]\", \"$_POST[Provincia]\",\"$_POST[Telefon]\",\"$_POST[Adreca]\",\"$_POST[fkidTargeta]\");";   
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
        print (mysqli_error($bbdd));
    }
?>