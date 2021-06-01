<?php 
    require "includes/head.php";
    require "includes/header.php";
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>"; 
    echo "<p> Quantitat:".$_POST["Quantitat"]."</p>";
    echo "<p> IVA:".$_POST["IVA"]."</p>";
    echo "<p> Preu:".$_POST["Preu"]."</p>";
    echo "<p> fkidVenta:".$_POST["fkidVenta"]."</p>";  
    echo "<p> fkidProducte:".$_POST["fkidProducte"]."</p>";
    $query="INSERT INTO Pro_Ven (Nom,Quantitat,IVA,Preu,fkidVenta,fkidProducte) 
    VALUES (\"$_POST[Nom]\", \"$_POST[Quantitat]\", \"$_POST[IVA]\",\"$_POST[Preu]\", \"$_POST[fkidVenta]\", \"$_POST[fkidProducte]\");";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
        print (mysqli_error($bbdd));
    }
?>
