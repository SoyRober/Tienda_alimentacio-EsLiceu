<?php

    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>";
    echo "<p> Nombre:".$_POST["Nombre"]."</p>";
    echo "<p> fkdniClient:".$_POST["fkdniClient"]."</p>";
    echo "<p> fkidTargeta:".$_POST["fkidTargeta"]."</p>";
    $query="UPDATE Venta
    SET  Nom = \"$_POST[Nom]\", Nombre = \"$_POST[Nombre]\", fkdniClient = \"$_POST[fkdniClient]\", fkidTargeta = \"$_POST[fkidTargeta]\" WHERE id =\"$_GET[idVenta];";
    echo $query;
    $result=mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
    print(mysqli_error($bbdd));
    }
    ?>