<?php
require "includes/mysql.php";
$query="DELETE FROM Pro_Ven WHERE idPro_Ven=\"$_GET[idPro_Ven]\";";
$result=mysqli_query($bbdd,$query);
if(!$result){
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
}else{
    header('Location: OK.php');
}
?>