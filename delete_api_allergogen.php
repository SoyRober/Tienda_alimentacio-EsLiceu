<?php
    require "includes/mysql.php";
    $query="DELETE FROM Allergogen WHERE idAllergogen=\"$_GET[idAllergogen]\";";
    $result=mysqli_query($bbdd, $query);
        if($result){
            echo "S'ha pogut eliminar aquest al·lergògen";
        }else{
            print(mysqli_error($bbdd));
        }
?>