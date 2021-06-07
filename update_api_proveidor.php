<?php 
    require "includes/mysql.php";
    $query="UPDATE proveidor
    SET Nom = \"$_POST[Nom]\", cifProveidor = \"$_POST[cifProveidor]\", 
    CP = \"$_POST[CP]\", Pais = \"$_POST[Pais]\", Poblacio = \"$_POST[Poblacio]\", 
    Adreca = \"$_POST[Adreca]\", Telefon = \"$_POST[Telefon]\"   
    WHERE cifProveidor=\"$_GET[cifProveidor]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    }else{
        header('Location: ok.php');
    }
?>