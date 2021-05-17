<?php 
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>"; 
    $query="INSERT INTO Allergogen (Nom) VALUES (\"$_POST[Nom]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
        print (mysqli_error($bbdd));
    }
?>
