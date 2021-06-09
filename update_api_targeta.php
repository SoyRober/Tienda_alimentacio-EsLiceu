
<?php
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>";
    echo "<p> Punts:".$_POST["Punts"]."</p>";
    echo "<p> Descompte:".$_POST["Descompte"]."</p>";
    $query="UPDATE Targeta
    SET Nom = \"$_POST[Nom]\", Punts = \"$_POST[Punts]\", Descompte = \"$_POST[Descompte]\" WHERE idTargeta =\"$_GET[id]\";";
    echo $query;
    $result=mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
    print(mysqli_error($bbdd));
    }
    ?>