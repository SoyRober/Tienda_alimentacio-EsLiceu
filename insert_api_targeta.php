
<?php
require "includes/mysql.php";
$query = "INSERT INTO Targeta (Nom,Punts,Descompte) 
    VALUES (\"$_POST[Nom]\", \"$_POST[Punts]\", \"$_POST[Descompte]\");";
echo $query;
$result = mysqli_query($bbdd, $query);
if (!$result) {
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
} else {
    header('Location: ok.php');
}
?>

