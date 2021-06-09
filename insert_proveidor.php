<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
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
            <div>
                <label>
                    Nom   
                </label>
                <input class="inserts" type="text" maxlength="255" required minlength="2" name="Nom" value="<?=$nom?>">
            </div>
            <div>    
                <label>
                     Telèfon
                </label>
                <input class="inserts" type="text" maxlength="16" required minlength="16" name="Telefon" value="<?=$telefon?>">
            </div>
            <div>    
                <label>
                    CP  
                </label>   
                <input class="inserts" type="text" maxlenght="7" minlength="7" required name="CP" value="<?=$cp?>">
            </div>
            <div>    
                <label>
                    Pais
                </label>   
                <input class="inserts" type="text" maxlenght="150" required minlenght="5" name="Pais" value="<?=$pais?>">
            </div>
            <div>    
                <label>
                    Adreça
                </label>   
                <input class="inserts" type="text" maxlenght="150" required minlenght="5" name="Adreca" value="<?=$adreca?>">
            </div>
            <div>
                <label>
                    CIF del proveidor
                </label>    
                <input class="inserts" type="text" required maxlenght="9" minlenght="9" name="cifProveidor" value="<?=$cifProveidor?>">
            </div>
            <div>
                <label>
                    Resetear
                </label>
                <input class="inserts" type="reset">
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