<?php
require "includes/mysql.php";
$query="DELETE FROM Client WHERE dniClient=\"$_GET[dniClient]\";";
$result=mysqli_query($bbdd,$query);
    if($result){
        echo "S'ha pogut eliminar el Client";
    }else{
        print(mysqli_error($bbdd));
    }
?>