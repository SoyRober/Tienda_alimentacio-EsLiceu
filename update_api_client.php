<?php

    require "includes/mysql.php";
    $img = '';
    if($_FILES["imgcliente"]){

        $tmp_name = $_FILES["imgcliente"]["tmp_name"];
        $location = 'img/clientes/' . $_GET['dni'] . '.jpg';
        @unlink('img/clientes/' . $_GET['dni'] . '.jpg');
        if(move_uploaded_file($tmp_name, $location)){
            $img = ", imagen = \"$_GET[dni].jpg\" ";
        }
    }

    $query="UPDATE Client
    SET dniClient = \"$_POST[dniClient]\", Pais = \"$_POST[Pais]\",Nom = \"$_POST[Nom]\", CP = \"$_POST[CP]\", 
    Telefon = \"$_POST[Telefon]\", Provincia = \"$_POST[Provincia]\",  
    Adreca = \"$_POST[Adreca]\", fkidTargeta = \"$_POST[fkidTargeta]\",Email = \"$_POST[Email]\" $img 
    WHERE dniClient =\"$_GET[dni]\";";
    echo $query;
    $result=mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
    print(mysqli_error($bbdd));
    }
    ?>