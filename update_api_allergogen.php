<?php
require "includes/mysql.php";
$query = "UPDATE allergogen
    SET Nom = \"$_POST[Nom]\"   
    WHERE idAllergogen=\"$_GET[id]\";";
echo $query;
$result = mysqli_query($bbdd, $query);
if (!$result) {
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
} else {
    header('Location: ok.php');
}
