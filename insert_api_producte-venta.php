<?php 
    require "includes/head.php";
    require "includes/header.php";
    require "includes/mysql.php";
    echo "<p> Quantitat:".$_POST["Quantitat"]."</p>";
    echo "<p> Preu:".$_POST["Preu"]."</p>";
    $query="INSERT INTO Pro_Ven (Quantitat,Preu) 
    VALUES (\"$_POST[Quantitat]\",\"$_POST[Preu]\");";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
        print (mysqli_error($bbdd));
    }
?>
