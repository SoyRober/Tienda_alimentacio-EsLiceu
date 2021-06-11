<?php   
    require "includes/mysql.php";
    echo "<p> dniClient:".$_POST["dniClient"]."</p>"; 
    echo "<p> Pais:".$_POST["Pais"]."</p>";
    echo "<p> Nom:".$_POST["Nom"]."</p>"; 
    echo "<p> CP:".$_POST["CP"]."</p>";  
    echo "<p> Telefon:".$_POST["Telefon"]."</p>";
    echo "<p> Provincia:".$_POST["Provincia"]."</p>";
    echo "<p> Adreca:".$_POST["Adreca"]."</p>";    
    echo "<p> fkidTargeta:" .$_POST["fkidTargeta"]. "</p>";
    echo "<p> Email:".$_POST["Email"]."</p>";   
  
    
    $query="INSERT INTO Client (dniClient, Pais, Nom, CP, Telefon, Provincia, Adreca, fkidTargeta, Email) 
            VALUES (\"$_POST[dniClient]\",\"$_POST[Pais]\",\"$_POST[Nom]\",\"$_POST[CP]\",\"$_POST[Telefon]\",
            \"$_POST[Provincia]\",\"$_POST[Adreca]\",\"$_POST[fkidTargeta]\",\"$_POST[Email]\");";   
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if (!$result) {
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    } else {
        header('Location: OK.php');
    }
?>