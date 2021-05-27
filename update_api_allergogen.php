<?php 
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>"; 
    $query="UPDATE producte
    SET Nom = \"$_POST[Nom]\"   
    WHERE idAllergogen=\"$_GET[idAllergogen]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
        print (mysqli_error($bbdd));
    }
?>