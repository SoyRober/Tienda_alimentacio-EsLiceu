<?php
require "includes/mysql.php";
$query="DELETE FROM Pro_Ven WHERE idPro_Ven=\"$_GET[idPro_Ven]\";";
$result=mysqli_query($bbdd,$query);
    if($result){
        echo "S'ha pogut eliminar el Producte amb la Venta";
    }else{
        print(mysqli_error($bbdd));
    }
?>