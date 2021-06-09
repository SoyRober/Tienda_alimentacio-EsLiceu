<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Insertar Venta </h2>
        <h9> Carita , cara </h9>
        <p> Parrafo con tremenda personalidad </p>
        <?php
        $idVenta = '';
        $Nombre = '';
        $fkdniClient = 0;
        $fkcidTargeta = 0;
        if (isset($_GET['idVenta'])) {
            $query = "SELECT * FROM Venta WHERE idVenta = \"$_GET[idVenta]\";";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            $Venta = mysqli_fetch_assoc($result);
            if ($Venta["idVenta"]) {
                $idVenta = $Venta["idVenta"];
                $Nombre = $Venta["Nombre"];
                $fkdniClient = $Venta["fkdniClient"];
                $fkidTargeta = $Venta["fkidTargeta"];
            }
        }
       ?>

<form action="<?= ($idVenta) ? "update_api_venta.php?id=$idVenta" : 'insert_api_venta.php' ?>" method="post" enctype="multipart/form-data">

                <label>
                    Nombre
                </label>
                <input type="text" maxlength="999" required minlength="1" name="Nombre" value="<?$Nombre?>">
            </div>
            <div>
                <label>
                    dniClient
                </label>  
                <select name="fkdniClient" required>
                <option value=""> </option> 
                <?php
                    $query = "SELECT dniClient, Nom FROM Client;";
                    $result = mysqli_query($bbdd, $query) or die("Alguna cosa no va bé");
                    while ($Client = mysqli_fetch_assoc($result)) {
                        $selected = ($Client['idClient'] == $fkdniClient) ? 'selected' : '';
                        echo "<option $selected value = \"$Client[dniClient]\">$Client[Nom]</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label>
                    idTargeta
                </label>
                <select name="fkidTargeta" required>
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
            </div>
            <div>
                <label>
                    Resetear
                </label>
                <input type="reset">
            </div>
            <div>
            <label>
            <button type="submit">
                    Enviar
                </button>
            </label>
            </div>
              
        </form>
    </body>
</html> 