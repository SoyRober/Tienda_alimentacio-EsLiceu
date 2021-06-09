<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Llista de tots els clients </h2>
            <?php
        $dniClient = '';
        $pais = '';
        $nom = '';
        $cp = '';
        $telefon = '';
        $provincia = '';
        $adreca= '';
        $fkidTargeta = '';
        $email = '';
        $imagen = '';
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
                $imagen = $client["imagen"];
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
          
            <div>   
            <label>
                    dniClient
                </label>   
                <input type="text" max="40" required name="dniClient" value="<?=$dniClient?>">
            </div> 
            <div>    
                <label>
                    Pais   
                </label>   
                <input type="text" max="40" required min="20" name="Pais" value="<?=$pais?>">
            </div>
            <div>
                
                <label>
                    Nom
                </label>
                <input type="text" maxlength="255" required minlength="2" name="Nom" value="<?=$nom?>"> 
            </div>
            <div>    
                <label>
                  CP    
                </label>   
                <input type="text" max="100" required name="CP" value="<?=$cp?>">
            </div>
            <div>
            <label>
                    Telèfon   
                </label>   
                <input type="text" max="255" required min="20" name="Telefon" value="<?=$telefon?>">
            </div>
            <div>
            <label>
                    Provincia
                </label>   
                <input type="text" max="40" required min="20" name="Provincia" value="<?=$provincia?>">
            
            </div>  
            <div>
            <label>
                    Adreça
                </label>   
                <input type="text" max="40" required min="20" name="Adreca" value="<?=$adreca?>">
            </div>

            <div>
                <label>
                    Targeta
                </label>
                <select name="fkidTargeta" value="<?=$fkidtargeta?>" required>
                    <option value=""> </option>
                    <?php
                    $query = "SELECT idTargeta, Nom FROM Targeta;";
                    $result = mysqli_query($bbdd, $query) or die("Alguna cosa no va correctament");
                    while ($Targeta = mysqli_fetch_assoc($result)) {
                        $selected = ($Targeta['idTargeta'] == $fkidTargeta) ? 'selected' : '';
                        echo "<option $selected value = \"$Targeta[idTargeta]\">$Targeta[Nom]</option>";
                    }
                    ?>
                     </select>
            <div>
            Mete tu email
            </label>
<input type="email"  name="Email" value="<?=$email?>"> </div>
                <div>
                    <input type="file" accept="image/jpeg, image/jpg" name="imgcliente" id="client">
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
    </html> 

                        
                    
               




