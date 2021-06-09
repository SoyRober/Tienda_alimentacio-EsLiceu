<!DOCTYPE html>
<html lang="ca">

    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php"; ?>
        <?php
        $idProducte = '';
        $nom = '';
        $codi_de_barres = '';
        $iva = '';
        $preu = '';
        $fkcifProveidor = '';
        $descripcio = '';
        $imagen = '';
        if (isset($_GET['idProducte'])) {
            $query = "SELECT * FROM producte WHERE idProducte = \"$_GET[idProducte]\";";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            $producte = mysqli_fetch_assoc($result);
            if ($producte["idProducte"]) {
                $idProducte = $producte["idProducte"];
                $nom = $producte["Nom"];
                $codi_de_barres = $producte["Codi_de_barres"];
                $iva = $producte["IVA"];
                $preu = $producte["Preu"];
                $fkcifProveidor = $producte["fkcifProveidor"];
                $descripcio = $producte["Descripcio"];
                $imagen = $producte["imagen"];
            }
        }
        ?>
        <div>
            <?php
                if ($idProducte) {
                    echo '<h2> Actualitzant el producte amb ID: ' . $idProducte . '</h2>';
                } else {
                    echo '<h2> Inserta un nou producte </h2>';
                }
            ?>
        </div>
        <form action="<?= ($idProducte) ? "update_api_producte.php?id=$idProducte" : 'insert_api_producte.php' ?>" method="post" enctype="multipart/form-data">
            <div>
                <label>
                    Nom
                </label>
                <input class="inserts" type="text" maxlength="255" required minlength="2" name="Nom" value="<?=$nom?>">
            </div>
            <div>
                <label>
                    Codi de barres
                </label>
                <input class="inserts" type="text" maxlength="13" required minlength="13" name="Codi_de_barres" value="<?=$codi_de_barres?>">
            </div>
            <div>
                <label>
                    IVA
                </label>
                <input class="inserts" type="radio" require name="IVA" value="4" <?= ($iva == 4) ? 'checked' : ''?> > 4
                <input class="inserts" type="radio" require name="IVA" value="10" <?= ($iva == 10) ? 'checked' : ''?>  > 10
                <input class="inserts" type="radio" require name="IVA" value="21" <?= ($iva == 21) ? 'checked' : ''?>  > 21
            </div>
            <div>
                <label>
                    Preu
                </label>
                <input type="number" class="inserts" required min="0,01" name="Preu" step="0.01" value="<?=$preu?>">
            </div>
            <div>
                <label>
                    Descripció
                </label>
                <input class="inserts" type="text" max="150" required min="5" name="Descripcio" value="<?=$descripcio?>">
            </div>
            <div>
                <label>
                    Proveïdor
                </label>
                <select class="select" name="cifProveidor" value="<?=$fkcifProveidor?>" required>
                    <option value=""> </option>
                    <?php
                        $query = "SELECT cifProveidor, Nom FROM Proveidor;";
                        $result = mysqli_query($bbdd, $query) or die("Alguna cosa no va correctament");
                        while ($Proveidor = mysqli_fetch_assoc($result)) {
                            $selected = ($Proveidor['cifProveidor'] == $fkcifProveidor) ? 'selected' : '';
                            echo "<option $selected value = \"$Proveidor[cifProveidor]\">$Proveidor[Nom]</option>";
                        }
                    ?>
                </select>
            </div>
            <div>
                <input class="img_pro" type="file" accept="image/jpeg, image/jpg" name="imgProducte" id="producte"/>
            </div>
            </div>
            <div>
                <input type="reset" class="inserts">
            </div>
            <div>
                <button class="inserts" type="submit">
                    Enviar
                </button>
            </div>
        </form>
    </body>
    <?php require "includes/footer.php";?>
</html> 

