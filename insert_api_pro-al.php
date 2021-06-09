<?php 
    require "includes/mysql.php";
    echo "<p> fkidProducte:".$_POST["fkidProducte"]."</p>"; 
    echo "<p> fkidAllergogen:".$_POST["fkidAllergogen"]."</p>"; 
    $query="INSERT INTO Pro_Al (fkidProducte,fkidAllergogen) 
    VALUES (\"$_POST[fkidProducte]\", \"$_POST[fkidAllergogen]\");";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    }else{
        header('Location: ok.php');
    }
?>	