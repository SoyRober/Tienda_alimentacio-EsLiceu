
<?php 

    require "includes/head.php";
    require "includes/header.php";
    require "includes/mysql.php";
    echo "<p> Punts:".$_POST["Punts"]."</p>"; 
    echo "<p> Descompte:".$_POST["Descompte"]."</p>";
    echo "<p> Nom:".$_POST["Nom"]."</p>";  
    $query="INSERT INTO Targeta (Nom,Punts,Descompte) 
    VALUES (\"$_POST[Nom]\", \"$_POST[Punts]\", \"$_POST[Descompte]\");";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if (!$result) {
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    } else {
        header('Location: OK.php');
    }
?>

