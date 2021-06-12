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


$query = "UPDATE producte
            SET Nom = \"$_POST[Nom]\", Codi_de_barres = \"$_POST[Codi_de_barres]\", 
            IVA = \"$_POST[IVA]\", Preu = \"$_POST[Preu]\", fkcifProveidor = \"$_POST[cifProveidor]\", 
            Descripcio = \"$_POST[Descripcio]\" $img  
            WHERE idProducte=\"$_GET[id]\";";
//echo $query;
$result = mysqli_query($bbdd, $query);
if (!$result) {
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
} else {
    header('Location: ok.php');
}
