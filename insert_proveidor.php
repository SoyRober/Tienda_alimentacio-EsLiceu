<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Insertar proveidor </h2>
        <h9> Carabirubi, carabiruba </h9>
        <p> Parrafito guapito del bonico </p>
        <?php
            $cifproveidor = '';
            $nom = '';
<<<<<<< HEAD
            $pais = '';
            $poblacio = 0;
            $telefon = 0;
            $adreca = 0;
            $cp = '';
=======
            $codi_de_barres = '';
            $iva = 0;
            $preu = 0;
            $fkcidProveidor = 0;
            $descripcio = '';
            $imagen = '';
>>>>>>> rober
            if (isset($_GET['cifproveidor'])) {
                $query = "SELECT * FROM producte WHERE cifProveidor = \"$_GET[cifProveidor]\";";
                $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                $proveidor = mysqli_fetch_assoc($result);
                if ($proveidor["cifProveidor"]) {
                    $cifproveidor = $proveidor["cifProveidor"];
                    $nom = $proveidor["Nom"];
                    $pais = $proveidor["Pais"];
                    $poblacio = $proveidor["Poblacio"];
                    $telefon = $proveidor["Telefon"];
                    $adreca = $proveidor["Adreca"];
<<<<<<< HEAD
                    $cp = $proveidor["Descripcio"];
                }
            }
        ?>
        <div>
            <?php
            if ($cifProveidor) {
                echo '<h1> Actualitzant el proveïdor amb cif: ' . $cifProveidor . '</h1>';
            } else {
                echo '<h1> Inserta un nou proveïdor </h1>';
            }
            ?>
        </div>
        <div>
            <?php
            if ($cifProveidor) {
                echo '<h1> Actualitzant el proveïdor amb cif: ' . $cifProveidor . '</h1>';
            } else {
                echo '<h1> Inserta un nou proveïdor </h1>';
            }
            ?>
        </div>
        <form action="<?= ($cifProveidor) ? 'update_api_proveidor.php?id=$cifProveidor' : 'insert_api_proveidor.php' ?>" method="post">
=======
                    $descripcio = $proveidor["Descripcio"];
                }
            }
        ?>
    <div>
        <?php
        if ($cifProveidor) {
            echo '<h1> Actualitzant el proveïdor amb cif: ' . $cifProveidor . '</h1>';
        } else {
            echo '<h1> Inserta un nou proveïdor </h1>';
        }
        ?>
        <form action="<?= ($cifProveidor) ? 'update_api_proveidor.php?id=$idProducte' : 'insert_api_proveidor.php' ?>" method="post" enctype="multipart/form-data">
>>>>>>> rober
            <div>
                <label>
                    Nom   
                </label>
                <input type="text" maxlength="255" required minlength="2" name="Nom" value="<?=$nom?>">
            </div>
            <div>    
                <label>
                     Telèfon
                </label>
                <input type="text" maxlength="16" required minlength="16" name="Telefon" value="<?=$telefon?>">
            </div>
            <div>    
                <label>
                    Població  
                </label>   
                <input type="number" max="99999999" required name="Poblacio" value="<?=$poblacio?>">
            </div>
            <div>    
                <label>
                    CP  
                </label>   
                <input type="text" maxlenght="6" required name="CP" value="<?=$cp?>">
            </div>
            <div>    
                <label>
                    Pais
                </label>   
                <input type="text" maxlenght="150" required minlenght="5" name="Pais">
            </div>
            <div>    
                <label>
                    Adreça
                </label>   
                <input type="text" maxlenght="150" required minlenght="5" name="Adreca">
            </div>
            <div>
                <label>
                    CIF del proveidor
                </label>    
                <input type="text" required maxlenght="9" minlenght="9" name="cifProveidor" readonly>
            </div>
            <div>
                <label>
                    Resetear
                </label>
                <input type="reset">
            </div>
            <div>
                <button type="submit">
                    Enviar
                </button>
            </div>    
        </form>
    </body>
    <?php require "includes/footer.php";?>
</html> 