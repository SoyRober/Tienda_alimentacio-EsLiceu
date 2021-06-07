<?php
    require "includes/mysql.php";
    $query="DELETE FROM Allergogen WHERE idAllergogen=\"$_GET[idAllergogen]\";";
    $result=mysqli_query($bbdd, $query);
        if(!$result){
            $error = (mysqli_error($bbdd));
            header('Location: error.php?error=' . $error);
        }else{
            header('Location: ok.php');
        }
?>