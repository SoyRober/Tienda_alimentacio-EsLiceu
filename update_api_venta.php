<?php
require "includes/mysql.php";
$query = "UPDATE Venta
          SET  Quantitat = \"$_POST[Quantitat]\", 
          fkdniClient = \"$_POST[fkdniClient]\", fkidTargeta = \"$_POST[fkidTargeta]\" 
          WHERE idVenta =\"$_GET[id]\";";
echo $query;
$result = mysqli_query($bbdd, $query);
if (!$result) {
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
} else {
    header('Location: ok.php');
}
