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
            <div>   
            <label>
                    dniClient
                </label>   
                <input class="inserts" type="text" max="40" required name="dniClient" value="<?=$dniClient?>">
            </div>
            </tr>
                </td>
            <tr>
                <td>    
            <div>    
                <label>
                    Pais   
                </label>   
                <input class="inserts" type="text" max="40" required min="20" name="Pais" value="<?=$pais?>">
            </div>
            </tr>    
                </td>

            <tr>
                <td>    
            <div>
                
                <label>
                    Nom
                </label>
                <input class="inserts" type="text" maxlength="255" required minlength="2" name="Nom" value="<?=$nom?>"> 
            </div>
            </tr>    
                </td>
            <tr>
                <td>
            <div>    
                <label>
                  CP    
                </label>   
                <input class="inserts" type="text" max="100" required name="CP" value="<?=$cp?>">
            </div>
            </tr>    
                </td>
            <tr>
                <td>
            <div>
            <label>
                    Telèfon   
                </label>   
                <input class="inserts" type="text" max="255" required min="20" name="Telefon" value="<?=$telefon?>">
            </div>
            </tr>
                </td>
            <tr>
                <td>
            <div>
            <label>
                    Provincia
                </label>   
                <input class="inserts" type="text" max="40" required min="20" name="Provincia" value="<?=$provincia?>">
            </div>
            </tr>    
                </td>  
            <tr>
                <td>
            <div>
            <label>
                    Adreça
                </label>   
                <input class="inserts" type="text" max="40" required min="20" name="Adreca" value="<?=$adreca?>">
            </div>
            </tr>
                </td>
            <tr>
                <td>
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
                </tr>
                    </td>
            <tr>
                <td>
            <div>

            <label>
            Mete tu email
            </label>
<input class="inserts" type="email"  name="Email" value="<?=$email?>"> </div>
            </div>
            </tr>
            </td>
            <tr>
                    <td class="right">
                <div>
                <label>
                    Resetear
                </label>
                <input type="reset" class="inserts">
            </div>
            </tr>    
            </td>  
            <tr>
                    <td class="right">
            <div>
                <button type="submit" class="inserts">
                    Enviar
                </button>
                </div>  
            </tr>    
            </td>   
         </table>            
        </form>
        </body>
    </html> 

                        
                    
               




