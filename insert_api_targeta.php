<?php   
    require "includes/head.php";
    require "includes/header.php";
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>"; 
    echo "<p> Punts:".$_POST["Punts"]."</p>";
    echo "<p> Descompte:".$_POST["Descompte"]."</p>";  
    $query="INSERT INTO Targeta (Nom,Punts,Descompte) 
    VALUES (\"$_POST[Nom]\", \"$_POST[Punts]\", \"$_POST[Descompte]\", \"$_POST[Descompte]\", \"$_POST[Descompte]\");";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
        print (mysqli_error($bbdd));
    }
?>

