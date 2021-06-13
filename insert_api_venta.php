<?php
require "includes/mysql.php";
$query = "INSERT INTO Venta (Quantitat,fkdniClient,fkidTargeta) 
    VALUES (\"$_POST[Quantitat]\", \"$_POST[fkdniClient]\",\"$_POST[fkidTargeta]\");";
echo $query;
$result = mysqli_query($bbdd, $query);
if (!$result) {
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
} else {
    header('Location: ok.php');
}
