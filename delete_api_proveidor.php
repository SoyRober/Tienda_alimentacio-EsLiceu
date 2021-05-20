<?php
    require "includes/mysql.php";
    $query="DELETE FROM Proveidor WHERE cifProveidor=\"$_GET[cifProveidor]\";";
    $result=mysqli_query($bbdd,$query);
        if($result){
            echo "S'ha pogut eliminar aquest proveidor";
        }else{
            print(mysqli_error($bbdd));
        }
?>