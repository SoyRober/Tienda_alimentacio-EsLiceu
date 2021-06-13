<!DOCTYPE html>
<html lang="ca">
<?php require "includes/head.php"; ?>

<body>
    <?php require "includes/header.php"; ?>
    <?php
    $dniClient = '';
    $pais = '';
    $nom = '';
    $cp = '';
    $telefon = '';
    $provincia = '';
    $adreca = '';
    $fkidTargeta = '';
    $email = '';
    if (isset($_GET['dniClient'])) {
        $query = "SELECT * FROM Client WHERE dniClient= \"$_GET[dniClient]\";";
        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
        $client = mysqli_fetch_assoc($result);
        if ($client["dniClient"]) {
            $dniClient = $client["dniClient"];
            $pais = $client["Pais"];
            $nom = $client["Nom"];
            $cp = $client["CP"];
            $telefon = $client["Telefon"];
            $provincia = $client["Provincia"];
            $adreca = $client["Adreca"];
            $fkidTargeta = $client["fkidTargeta"];
            $email = $client["Email"];
        }
    }
    ?>
    <div>
        <?php
        if ($dniClient) {
            echo "<h2> Actualitzant el client amb dni: " . $dniClient . "</h2>";
        } else {
            echo "<h2> Inserta un nou client </h2>";
        }
        ?>
    </div>
    <form action="<?= ($dniClient) ? "update_api_client.php?dni=$dniClient" : 'insert_api_client.php' ?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label>
                        DNI del client
                    </label>
                    <input class="inserts" type="text" maxlength="9" minlenght="9" required name="dniClient" value="<?= $dniClient ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Pais
                    </label>
                    <input class="inserts" type="text" max="40" required min="20" name="Pais" value="<?= $pais ?>">
                </td>
            </tr>

            <tr>
                <td>

                    <label>
                        Nom
                    </label>
                    <input class="inserts" type="text" maxlength="255" required minlength="2" name="Nom" value="<?= $nom ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        CP
                    </label>
                    <input class="inserts" type="text" max="100" required name="CP" value="<?= $cp ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Telèfon
                    </label>
                    <input class="inserts" type="text" max="255" required min="20" name="Telefon" value="<?= $telefon ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Provincia
                    </label>
                    <input class="inserts" type="text" max="40" required min="20" name="Provincia" value="<?= $provincia ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Adreça
                    </label>
                    <input class="inserts" type="text" max="40" required min="20" name="Adreca" value="<?= $adreca ?>">
                </td>
            </tr>
            <tr>
                <td>

                    <label>
                        Posar correu electrònic
                    </label>
                    <input class="inserts" type="email" name="Email" value="<?= $email ?>">
                </td>
            </tr>
            <tr>
            <td>
                <label>
                    Targeta
                </label>
                <select class="select" name="idTargeta" value="<?= $fkidtageta ?>" required>
                    <option value=""> Selecciona una targeta </option>
                    <?php
                    $query = "SELECT idTargeta, Nom FROM Targeta;";
                    $result = mysqli_query($bbdd, $query) or die("Alguna cosa no va correctament");
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
                    <input type="reset" class="inserts">
                    <button type="submit" class="inserts">
                        Enviar
                    </button>
                </td>
            </tr>
        </table>
    </form>
</body>
<?php require "includes/footer.php"; ?>

</html>