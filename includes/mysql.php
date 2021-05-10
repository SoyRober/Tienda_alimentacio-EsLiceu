<?php
    $database="localhost";
    $user="root";
    $pass="";
    $name="Tenda_alimentacio";
    $bbdd=mysqli_connect($database, $user, $pass, $name);
    if(!$bbdd){
        echo "No s'ha pogut connectar amb la teva tenda favorita,per favor torni aprobar més tard.";
        print(mysqli_connect_error());
exit();
    }else{
echo "TOT A SORTIR COM ES ESPERABA!";
    }
?>