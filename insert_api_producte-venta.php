<?php 
    require "includes/head.php";
    require "includes/header.php";
    require "includes/mysql.php";
    echo "<p> Quantitat:".$_POST["Quantitat"]."</p>";
    echo "<p> Preu:".$_POST["Preu"]."</p>";
    $query="INSERT INTO Pro_Ven (Quantitat,Preu) 
    VALUES (\"$_POST[Quantitat]\",\"$_POST[Preu]\");";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if (!$result) {
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    } else {
        header('Location: OK.php');
    }
?>
