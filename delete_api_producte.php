<?php
    require "includes/mysql.php";
    $query="DELETE FROM Producte WHERE idProducte=\"$_GET[idProducte]\";";
    $result=mysqli_query($bbdd,$query);
        if(!$result){
            $error = (mysqli_error($bbdd));
            header('Location: error.php?error=' . $error);
        }else{
            header('Location: OK.php');
        }
        
?>