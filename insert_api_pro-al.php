<?php
require "includes/mysql.php";
$query = "INSERT INTO Pro_Al (fkidProducte,fkdniClient) 
    VALUES (\"$_POST[fkidProducte]\", \"$_POST[fkdniClient]\");";
echo $query;
$result = mysqli_query($bbdd, $query);
if (!$result) {
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
} else {
    header('Location: ok.php');
}
