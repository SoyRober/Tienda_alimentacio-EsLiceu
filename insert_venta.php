<!DOCTYPE html>
<html lang="ca">
<?php require "includes/head.php"; ?>

<body>
    <?php require "includes/header.php"; ?>
    <h2> Insertar Venta </h2>
    <h9> Carita , cara </h9>
    <p> Parrafo con tremenda personalidad </p>
    <?php
    $idVenta = '';
    $nom = '';
    $quantitat = '';
    $fkdniClient = '';
    $fkcidTargeta = '';
    if (isset($_GET['idVenta'])) {
        $query = "SELECT * FROM Venta WHERE idVenta = \"$_GET[idVenta]\";";
        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
        $venta = mysqli_fetch_assoc($result);
        if ($venta["idVenta"]) {
            $idVenta = $venta["idVenta"];
            $nom = $venta["Nom"];
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
                        Nom
                    </label>
                    <input class="inserts" type="text" step="1" max="200" required min="1" name="Nom" value="<?= $nom ?>" />
                </td>
            </tr>
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
                    <div>

                        <label>
                            dniClient
                        </label>
                        <select name="fkdniClient" value="<?= $fkdniClient ?>" required>
                            <option value=""> </option>
                            <?php
                            $query = "SELECT dniClient, Nom FROM Client;";
                            $result = mysqli_query($bbdd, $query) or die("Alguna cosa no va bé");
                            while ($client = mysqli_fetch_assoc($result)) {
                                $selected = ($client['dniClient'] == $fkdniClient) ? 'selected' : '';
                                echo "<option $selected value = \"$client[dniClient]\">$client[Nom]</option>";
                            }
                            ?>
                        </select>
                    </div>
            </tr>
            </td>
            <div>
                <tr>
                    <td>
                        <label>
                            idTargeta
                        </label>
                        <select name="fkidTargeta" value="<?= $fkidtargeta ?>" required>
                            <option value=""> </option>
                            <?php
                            $query = "SELECT idTargeta, Nom FROM Targeta;";
                            $result = mysqli_query($bbdd, $query) or die("Alguna cosa no va bé");
                            while ($Targeta = mysqli_fetch_assoc($result)) {
                                $selected = ($Targeta['idTargeta'] == $fkidTargeta) ? 'selected' : '';
                                echo "<option $selected value = \"$Targeta[idTargeta]\">$Targeta[Nom]</option>";
                            }
                            ?>
                        </select>
                </tr>
                </td>
            </div>
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
                        <button class="inserts" type="submit">
                            Enviar
                        </button>
                        </label>
                    </div>
            </tr>
            </td>
        </table>
    </form>
</body>

</html>