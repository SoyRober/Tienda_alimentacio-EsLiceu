<?php
require "includes/mysql.php";

$img = '';
if ($_FILES["imgProducte"]) {
    //PUJAM IMATGE
    $tmp_name = $_FILES["imgProducte"]["tmp_name"];
    $location = 'img/productes/' . $_GET['id'] . '.jpg';
    @unlink('img/productes/' . $_GET['id'] . '.jpg');
    if (move_uploaded_file($tmp_name, $location)) {
        $img = ", imagen = \"$_GET[id].jpg\" ";
    }
}

$query = "INSERT INTO Producte (Nom,Codi_de_barres,IVA,Descripcio,Preu,fkcifProveidor,imagen) 
            VALUES (\"$_POST[Nom]\", \"$_POST[Codi_de_barres]\", \"$_POST[IVA]\", 
            \"$_POST[Descripcio]\", \"$_POST[Preu]\", \"$_POST[cifProveidor]\", \"$_GET[id].jpg\");";
echo $query;
$result = mysqli_query($bbdd, $query);
if (!$result) {
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
} else {
    header('Location: ok.php');
}
