<!DOCTYPE html>
<html lang="ca">
<?php require "includes/head.php"; ?>

<body>
    <?php require "includes/header.php"; ?>
    <?php
    $idTargeta = '';
    $punts = '';
    $descompte = '';
    $nom = '';
    if (isset($_GET['idTargeta'])) {
        $query = "SELECT * FROM Targeta WHERE idTargeta = \"$_GET[idTargeta]\";";
        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
        $targeta = mysqli_fetch_assoc($result);
        if ($targeta["idTargeta"]) {
            $idTargeta = $targeta["idTargeta"];
            $punts = $targeta["Punts"];
            $descompte = $targeta["Descompte"];
            $nom = $targeta["Nom"];
        }
    }
    ?>
    <div>
        <?php
        if ($idTargeta) {
            echo '<h2> Actualitzant la targeta amb ID: ' . $idTargeta . '</h2>';
        } else {
            echo '<h2> Inserta una nova targeta </h2>';
        }
        ?>
    </div>
    <div>
        <form action="<?= ($idTargeta) ? "update_api_targeta.php?id=$idTargeta" : 'insert_api_targeta.php' ?>" method="post" enctype="multipart/form-data">
    </div>
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
                    Descompte
                </label>
                <input class="inserts" type="number" max="80" required min="0" name="Descompte" value="<?= $descompte ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    Punts
                </label>
                <input class="inserts" type="number" max="5000" required min="0" name="Punts" value="<?= $punts ?>">
            </td>
        </tr>
        <tr>
            <td class="right">
                <input type="reset" class="inserts">
                <button class="inserts" type="submit">
                    Enviar
                </button>
            </td>
        </tr>
    </table>
    </form>
</body>

</html>