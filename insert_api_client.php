<?php   
    require "includes/head.php";
    require "includes/header.php";
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>"; 
    echo "<p> Codi_de_barrres:".$_POST["Codi_de_barres"]."</p>"; 
    echo "<p> IVA:".$_POST["IVA"]."</p>";
    echo "<p> Descripcio:".$_POST["Descripcio"]."</p>";  
    echo "<p> Preu:".$_POST["Preu"]."</p>";
    echo "<p> cifProveidor:".$_POST["cifProveidor"]."</p>";
    $query="INSERT INTO Producte (Nom,Codi_de_barres,IVA,Descripcio,Preu,cifProveidor) 
    VALUES (\"$_POST[Nom]\", \"$_POST[Codi_de_barres]\", \"$_POST[IVA]\", \"$_POST[Descripcio]\", \"$_POST[Descripcio]\", \"$_POST[Descripcio]\");";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
        print (mysqli_error($bbdd));
    }
?>