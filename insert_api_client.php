<?php
require "includes/mysql.php";
$query = "INSERT INTO Client (dniClient, Pais, Nom, CP, Telefon, Provincia, Adreca, Email) 
            VALUES (\"$_POST[dniClient]\",\"$_POST[Pais]\",\"$_POST[Nom]\",\"$_POST[CP]\",\"$_POST[Telefon]\",
            \"$_POST[Provincia]\",\"$_POST[Adreca]\",\"$_POST[Email]\");";
echo $query;
$result = mysqli_query($bbdd, $query);
if (!$result) {
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
} else {
    header('Location: ok.php');
}
