<?php
require "includes/mysql.php";
$query = "UPDATE Venta
    SET  Nom = \"$_POST[Nom]\", Nombre = \"$_POST[Nombre]\", fkdniClient = \"$_POST[fkdniClient]\", fkidTargeta = \"$_POST[fkidTargeta]\" WHERE id =\"$_GET[idVenta];";
echo $query;
$result = mysqli_query($bbdd, $query);
if (!$result) {
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
} else {
    header('Location: ok.php');
}
