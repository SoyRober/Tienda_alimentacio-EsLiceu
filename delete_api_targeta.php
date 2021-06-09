<?php
require "includes/mysql.php";
$query="DELETE FROM Targeta WHERE idTargeta=\"$_GET[idTargeta]\";";
$result=mysqli_query($bbdd,$query);
    if($result){
        echo "S'ha pogut eliminar la Targeta";
    }else{
        print(mysqli_error($bbdd));
    }
?>