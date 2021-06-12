<?php
require "includes/mysql.php";
$query = "INSERT INTO Proveidor (Nom,cifProveidor,Adreca,Telefon,CP,Pais) 
VALUES (\"$_POST[Nom]\", \"$_POST[cifProveidor]\", 
    \"$_POST[Adreca]\", \"$_POST[Telefon]\", \"$_POST[CP]\", \"$_POST[Pais]\");";
echo $query;
$result = mysqli_query($bbdd, $query);
if (!$result) {
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
} else {
    header('Location: ok.php');
}
