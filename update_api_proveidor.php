<?php 
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>"; 
    echo "<p> cifProveidor:".$_POST["cifProveidor"]."</p>"; 
    echo "<p> CP:".$_POST["CP"]."</p>";
    echo "<p> Pais:".$_POST["Pais"]."</p>";
    echo "<p> Població:".$_POST["Població"]."</p>";  
    echo "<p> Adreça:".$_POST["Adreca"]."</p>";
    echo "<p> Telèfon:".$_POST["Telefon"]."</p>";
    $query="UPDATE proveidor
    SET Nom = \"$_POST[Nom]\", cifProveidor = \"$_POST[cifProveidor]\", 
    CP = \"$_POST[CP]\", Pais = \"$_POST[Pais]\", Poblacio = \"$_POST[Poblacio]\", 
    Adreca = \"$_POST[Adreca]\", Telefon = \"$_POST[Telefon]\"   
    WHERE idProducte=\"$_GET[idProducte]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
        print (mysqli_error($bbdd));
    }
?>