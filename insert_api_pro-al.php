<?php 
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["fkidProducte"]."</p>"; 
    echo "<p> Poblacio:".$_POST["fkidAllergogen"]."</p>"; 
    $query="INSERT INTO Pro_Al (fkidProducte,fkidAllergogen) 
    VALUES (\"$_POST[fkidProducte]\", \"$_POST[fkidAllergogen]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
        print (mysqli_error($bbdd));
    }
?>
