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
            <table>
            <tr>
                <td>

            <div>
            <label>
                    Quantitat
                </label>
                <input class="inserts" type="text" maxlength="999" required minlength="1" name="Quantitat" value="<?$quantitat?>">
            </div>
                </td>
            </tr>
            <tr>
                <td>
            <div>
                <label>
                    Preu
                </label>
                <input class="inserts" type="number" required min="0,01" name="Preu" step="0.01" value="<?=$preu?>">
            </div>
                </tr>
                    </td>
            <tr>
                <td class="right">
            <div>
                <label>
                    Resetear
                </label>
                <input class="inserts" type="reset">
            </div>
            </td>
            </tr>    
            <tr>
            <td class="right"> 
            <div>
                <button class="inserts" input type="submit">
                    Enviar
                </button>
            </div>
                </td>
            </tr>
            </table>
        </form>
    </body>
</html> 