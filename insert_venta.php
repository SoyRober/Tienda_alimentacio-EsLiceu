<!DOCTYPE html>
<html lang="ca">
<?php require "includes/head.php"; ?>

<body>
    <?php require "includes/header.php"; ?>
    <?php
    $idVenta = '';
    $quantitat = '';
    $fkdniClient = '';
    $fkcidTargeta = '';
    if (isset($_GET['idVenta'])) {
        $query = "SELECT * FROM Venta WHERE idVenta = \"$_GET[idVenta]\";";
        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
        $venta = mysqli_fetch_assoc($result);
        if ($venta["idVenta"]) {
            $idVenta = $venta["idVenta"];
            $quantitat = $venta["Quantitat"];
            $fkdniClient = $venta["fkdniClient"];
            $fkidTargeta = $venta["fkidTargeta"];
        }
    }
    ?>

    <form action="<?= ($idVenta) ? "update_api_venta.php?id=$idVenta" : 'insert_api_venta.php' ?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label>
                        Quantitat
                    </label>
                    <input class="inserts" type="number" step="1" max="200" required min="1" name="Quantitat" value="<?= $quantitat ?>" />
                </td>
            </tr>
            <tr>
                <td>

                    <label>
                        DNI del client
                    </label>
                    <select class="select" name="fkdniClient" value="<?= $fkdniClient ?>" required>
                        <option value=""> Selecciona un DNI </option>
                        <?php
                        $query = "SELECT dniClient FROM Client;";
                        $result = mysqli_query($bbdd, $query) or die("Alguna cosa no va bé");
                        while ($client = mysqli_fetch_assoc($result)) {
                            $selected = ($client['dniClient'] == $fkdniClient) ? 'selected' : '';
                            echo "<option $selected value = \"$client[dniClient]\">$client[dniClient]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Nom de la targeta
                    </label>
                    <select class="select" name="fkidTargeta" value="<?= $fkidtargeta ?>">
                        <option value=""> Selecciona una targeta </option>
                        <?php
                        $query = "SELECT idTargeta, Nom FROM Targeta;";
                        $result = mysqli_query($bbdd, $query) or die("Alguna cosa no va bé");
                        while ($Targeta = mysqli_fetch_assoc($result)) {
                            $selected = ($Targeta['idTargeta'] == $fkidTargeta) ? 'selected' : '';
                            echo "<option $selected value = \"$Targeta[idTargeta]\">$Targeta[Nom]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="right">
                    <input class="inserts" type="reset">
                    <button class="inserts" type="submit">
                        Enviar
                    </button>
                    </label>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>