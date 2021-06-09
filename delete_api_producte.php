<?php
    require "includes/mysql.php";
    $query="DELETE FROM Producte WHERE idProducte=\"$_GET[idProducte]\";";
    $result=mysqli_query($bbdd,$query);
        if($result){
            echo "S'ha pogut eliminar aquest producte";
        }else{
            print(mysqli_error($bbdd));
        }
?>