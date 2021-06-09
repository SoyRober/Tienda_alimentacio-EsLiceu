<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Insertar Productes </h2>
        <h9> Carita , cara </h9>
        <p> Parrafo con tremenda personalidad </p>
        <?php
        $idPro_Ven = '';
        $mom = '';
        $quantitat = '';
        $iva = '';
        $preu = '';
        $fkdniVenta = '';
        $fkidProducte = '';
        if (isset($_GET['idPro_Ven'])) {
            $query = "SELECT * FROM Pro_Ven WHERE idVenta = \"$_GET[idVenta]\";";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            $pro_Ven = mysqli_fetch_assoc($result);
            if ($pro_Ven["idPro_Ven"]) {
                $idPro_Ven = $pro_ven["idPro_Ven"];
                $nom = $pro_ven["Nom"];
                $quantitat = $pro_ven["Quantitat"];
                $iva = $pro_ven["IVA"];
                $preu = $pro_ven["Preu"];
                $fkidVenta = $pro_ven["fkidVenta"];
                $fkidProducte = $pro_ven["fkidProducte"];
            }
        }
       ?>

<form action="<?= ($idPro_Ven) ? "update_api_producte-venta.php?id=$idPro_Ven" : 'insert_api_producte-venta.php' ?>" method="post" enctype="multipart/form-data">
            <div>
            <label>
                    Quantitat
                </label>
                <input type="text" maxlength="999" required minlength="1" name="Quantitat" value="<?$quantitat?>">
            </div>
            <div>
                <label>
                    Preu
                </label>
                <input type="number" required min="0,01" name="Preu" step="0.01" value="<?=$preu?>">
            </div>
            <div>
                <label>
                    Resetear
                </label>
                <input type="reset">
            </div>
            <div>
                <button input type="submit">
                    Enviar
                </button>
            </div>
        </form>
    </body>
</html> 