
<?php
require "includes/mysql.php";
$query = "UPDATE Targeta
    SET Nom = \"$_POST[Nom]\", Punts = \"$_POST[Punts]\", Descompte = \"$_POST[Descompte]\" WHERE idTargeta =\"$_GET[id]\";";
echo $query;
$result = mysqli_query($bbdd, $query);
if (!$result) {
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
} else {
    header('Location: ok.php');
}
?>