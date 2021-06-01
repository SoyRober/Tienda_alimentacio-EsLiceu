<?php
    require "includes/mysql.php";
    $query="DELETE FROM Venta WHERE idVenta=\"$_GET[idVenta]\";";
    $result=mysqli_query($bbdd,$query);
        if($result){
            echo "S'ha pogut eliminar la Venta";
        }else{
            print(mysqli_error($bbdd));
        }
?>