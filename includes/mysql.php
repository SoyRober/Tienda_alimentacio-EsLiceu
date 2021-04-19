<?php
    $database="localhost";
    $user="root";
    $pass="";
    $name="Tenda_alimentacio";
    $bbdd=mysqli_connect($database, $user, $pass, $name);
    if(!$bbdd){
        echo "No hi ha connexió a tenda_alimentacio";
        print(mysqli_connect_error());
        exit();
    }else{
        echo "Tot ok";
    }
?>