<?php   

    require "includes/mysql.php";
    $query="INSERT INTO Client (dniClient,Nom,Pais,CP,Telefon,Provincia,Poblacio,Adreca,fkidTargeta) 
    VALUES (\"$_POST[dniClient]\", \"$_POST[Nom]\",  \"$_POST[Pais]\", \"$_POST[CP]\", \"$_POST[Telefon]\", \"$_POST[Provincia]\",\"$_POST[Telefon]\",\"$_POST[Adreca]\",\"$_POST[fkidTargeta]\");";   
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
        print (mysqli_error($bbdd));
    }
?>