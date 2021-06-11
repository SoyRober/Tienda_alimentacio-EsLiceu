<?php
require "includes/mysql.php";
$query="DELETE FROM Client WHERE dniClient=\"$_GET[dniClient]\";";
$result=mysqli_query($bbdd,$query);
if(!$result){
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
}else{
    header('Location: OK.php');
}
?>