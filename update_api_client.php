<?php

require "includes/mysql.php";
$query = "UPDATE Client
    SET dniClient = \"$_POST[dniClient]\", Pais = \"$_POST[Pais]\",Nom = \"$_POST[Nom]\", CP = \"$_POST[CP]\", 
    Telefon = \"$_POST[Telefon]\", Provincia = \"$_POST[Provincia]\",  
    Adreca = \"$_POST[Adreca]\", fkidTargeta = \"$_POST[fkidTargeta]\",Email = \"$_POST[Email]\" 
    WHERE dniClient =\"$_GET[dni]\";";
echo $query;
$result = mysqli_query($bbdd, $query);
if (!$result) {
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
} else {
    header('Location: ok.php');
}
