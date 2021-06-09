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
        $Nom = '';
        $Quantitat = '';
        $IVA = '';
        $Preu = '';
        $fkdniVenta = '';
        $fkidProducte = '';
        if (isset($_GET['idPro_Ven'])) {
            $query = "SELECT * FROM Pro_Ven WHERE idVenta = \"$_GET[idVenta]\";";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            $Pro_Ven = mysqli_fetch_assoc($result);
            if ($Pro_Ven["idPro_Ven"]) {
                $idPro_Ven = $Pro_Ven["idPro_Ven"];
                $Nom = $Pro_Ven["Nom"];
                $Quantitat = $Pro_Ven["Quantitat"];
                $IVA = $Pro_Ven["IVA"];
                $Preu = $Pro_Ven["Preu"];
                $fkidVenta = $Pro_Ven["fkidVenta"];
                $fkidProducte = $Pro_Ven["fkidProducte"];
            }
        }
       ?>

<form action="<?= ($idPro_Ven) ? "update_api_producte-venta.php?id=$idPro_Ven" : 'insert_api_producte-venta.php' ?>" method="post" enctype="multipart/form-data">
            <div>
                <label>
                    Nom
                </label>
                <input type="text" maxlength="999" required minlength="1" name="Nom" value="<?$Nom?>">
            </div>
            <div>
            <label>
                    Quantitat
                </label>
                <input type="text" maxlength="999" required minlength="1" name="Quantitat" value="<?$Quantitat?>">
            </div>
            <div>
                <label>
                    IVA
                </label>
                <input type="radio" require name="IVA" value="4" <?= ($IVA == 4) ? 'checked' : ''?> > 4
                <input type="radio" require name="IVA" value="10" <?= ($IVA == 10) ? 'checked' : ''?>  > 10
                <input type="radio" require name="IVA" value="21" <?= ($IVA == 21) ? 'checked' : ''?>  > 21
            </div>
            <div>
                <label>
                    Preu
                </label>
                <input type="number" required min="0,01" name="Preu" step="0.01" value="<?=$Preu?>">
            </div>
            <div>
                <label>
                    idVenta
                </label>  
                <select name="fkidVenta" required>
                <option value=""> </option> 
                <?php
                    $query = "SELECT idVenta FROM Venta;";
                    $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                    while ($Venta = mysqli_fetch_assoc($result)) {
                        $selected = ($Venta['idVenta'] == $fkidVenta) ? 'selected' : '';
                        echo "<option $selected value = \"$Venta[idVenta]\">$Venta[Nom]</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label>
                    Producte
                </label>
                <select name="fkidProducte" required>
                <option value=""> </option>  
                <?php
                    $query = "SELECT idProducte, Nom FROM Producte;";
                    $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                    while ($Producte = mysqli_fetch_assoc($result)) {
                        $selected = ($Producte['idProducte'] == $fkidProducte) ? 'selected' : '';
                        echo "<option $selected value = \"$Producte[idProducte]\">$Producte[Nom]</option>";
                    }
                    ?>
                </select>
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