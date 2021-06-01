<?php 
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>"; 
    echo "<p> Codi_de_barres:".$_POST["Codi_de_barres"]."</p>"; 
    echo "<p> IVA:".$_POST["IVA"]."</p>";
    echo "<p> Descripcio:".$_POST["Descripcio"]."</p>";  
    echo "<p> Preu:".$_POST["Preu"]."</p>";
    echo "<p> cifProveidor:".$_POST["cifProveidor"]."</p>";
    $query="UPDATE producte
    SET Nom = \"$_POST[Nom]\", Codi_de_barres = \"$_POST[Codi_de_barres]\", 
    IVA = \"$_POST[IVA]\", Preu = \"$_POST[Preu]\", fkcifProveidor = \"$_POST[cifProveidor]\", 
    Descripcio = \"$_POST[Descripcio]\"   
    WHERE idProducte=\"$_GET[id]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
        print (mysqli_error($bbdd));
    }
?>