<?php
require "includes/mysql.php";
// Ens asseguram d'eliminar primer els productes que ja tingui
// aquesta venta
$query = "DELETE FROM Pro_Ven WHERE fkidVenta = $_POST[fkidVenta]";
$result = mysqli_query($bbdd, $query) or die (mysqli_error($bbdd));

if (isset($_POST['producteVenta'])) {
    foreach ($_POST['producteVenta'] as $idProducte) {
        $query = "INSERT INTO Pro_Ven (fkidVenta, fkidProducte) values ($_POST[fkidVenta], $idProducte)";
        $result = mysqli_query($bbdd, $query);
    }
}

if (!$result) {
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
} else {
    header('Location: OK.php');
}
