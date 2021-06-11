<!DOCTYPE html>
<html lang="ca">
<?php require "includes/head.php"; ?>

<body>
    <?php require "includes/header.php"; ?>
    <?php
    $cifProveidor = '';
    $nom = '';
    $pais = '';
    $poblacio = '';
    $telefon = '';
    $adreca = '';
    $cp = '';
    if (isset($_GET['cifProveidor'])) {
        $query = "SELECT * FROM proveidor WHERE cifProveidor = \"$_GET[cifProveidor]\";";
        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
        $proveidor = mysqli_fetch_assoc($result);
        if ($proveidor["cifProveidor"]) {
            $cifProveidor = $proveidor["cifProveidor"];
            $nom = $proveidor["Nom"];
            $pais = $proveidor["Pais"];
            $poblacio = $proveidor["Poblacio"];
            $telefon = $proveidor["Telefon"];
            $adreca = $proveidor["Adreca"];
            $cp = $proveidor["CP"];
        }
    }
    ?>
    <div>
        <?php
        if ($cifProveidor) {
            echo '<h2> Actualitzant el proveïdor amb cif: ' . $cifProveidor . '</h2>';
        } else {
            echo '<h2> Inserta un nou proveïdor </h2>';
        }
        ?>
    </div>
    <form action="<?= ($cifProveidor) ? 'update_api_proveidor.php?cifProveidor=$cifProveidor' : 'insert_api_proveidor.php' ?>" method="post">
        <table>
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
                        Telèfon
                    </label>
                    <input class="inserts" type="text" maxlength="16" required minlength="16" name="Telefon" value="<?= $telefon ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        CP
                    </label>
                    <input class="inserts" type="text" maxlenght="7" minlength="7" required name="CP" value="<?= $cp ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Pais
                    </label>
                    <input class="inserts" type="text" maxlenght="150" required minlenght="5" name="Pais" value="<?= $pais ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Adreça
                    </label>
                    <input class="inserts" type="text" maxlenght="150" required minlenght="5" name="Adreca" value="<?= $adreca ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        CIF del proveidor
                    </label>
                    <input class="inserts" type="text" required maxlenght="9" minlenght="9" name="cifProveidor" value="<?= $cifProveidor ?>">
                </td>
            </tr>
            <tr>
                <td class="right">
                    <label >
                        Resetear
                    </label>
                    <input class="inserts" type="reset">
                </td>
            </tr>
            <tr>
                <td class="right">
                    <button class="inserts" type="submit">
                        Enviar
                    </button>
                </td>
            </tr>
        </table>
    </form>
</body>
<?php require "includes/footer.php"; ?>

</html>