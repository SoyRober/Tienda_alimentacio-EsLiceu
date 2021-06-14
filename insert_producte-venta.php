<!DOCTYPE html>
<html lang="ca">
<?php require "includes/head.php"; ?>

<body>
    <?php require "includes/header.php"; ?>
    <h2> Insertar Productes </h2>
    <?php
    $idPro_Ven = '';
    $fkidVenta = '';
    $fkidProducte = '';
    if (isset($_GET['idPro_Ven'])) {
        $query = "SELECT * FROM Pro_Ven WHERE idVenta = \"$_GET[idVenta]\";";
        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
        $pro_Ven = mysqli_fetch_assoc($result);
        if ($pro_Ven["idPro_Ven"]) {
            $idPro_Ven = $pro_ven["idPro_Ven"];
            $fkidVenta = $pro_ven["fkidVenta"];
            $fkidProducte = $pro_ven["fkidProducte"];
        }
    }
    ?>

    <form action="insert_api_producte-venta.php" method="post">
        <table>
            <tr>
                <td>
                    <label>
                        Venta
                    </label>
                    <select class="select" name="fkidVenta">
                        <option value=""> Selecciona una Venta </option>
                        <?php
                        $query = "SELECT idVenta, Nom FROM Venta;";
                        $result = mysqli_query($bbdd, $query) or die("Alguna cosa no va correctament");
                        while ($Venta = mysqli_fetch_assoc($result)) {
                            $selected = ($Venta['idVenta'] == $fkidVenta) ? 'selected' : '';
                            echo "<option $selected value = \"$Venta[idVenta]\">$Venta[Nom]</option>";
                        }
                        ?>
                </td>
            </tr>
            <tr>
                <td>
                <label>
                    Productes
                </label>
                    <?php
                    $query = "SELECT * FROM producte order by Nom";
                    $result = mysqli_query($bbdd, $query);
                    while ($prod = mysqli_fetch_assoc($result)) {
                        $query = "SELECT * FROM Pro_Ven WHERE fkidVenta = '$fkidVenta' AND fkidProducte = '$prod[idProducte]' ";
                        $result2 = mysqli_query($bbdd, $query);
                        $checked = (mysqli_num_rows($result2) > 0) ? 'checked' : '';
                        echo "<div>
                                    <input $checked type='checkbox' name='producteVenta[]' value='$prod[idProducte]'/>
                                    <label>$prod[Nom] - ($prod[Preu]€)</label>
                                  </div>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="right">
                    <input class="inserts" type="reset">
                    <button class="inserts" input type="submit">
                        Enviar
                    </button>
                </td>
            </tr>
        </table>
    </form>
</body>
<?php require "includes/footer.php"; ?>

</html>