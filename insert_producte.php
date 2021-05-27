<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Insertar producte </h2>
        <h9> Carabirubi, carabiruba </h9>
        <p> Parrafito guapito del bonico </p>
        <form action="insert_api_producte.php" method="post" enctype="multipart/form-data">
            <?php
                $idProducte = '';
                $nom = '';
                $codi_de_barres = '';
                if(isset($_GET['idProducte'])) {
                    $query = "SELECT * FROM producte WHERE idProducte = \"$_GET[idProducte]\";";
                    $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                    $producte = mysqli_fetch_assoc($result);
                    if($producte["idProducte"]) {
                        $idProducte = $producte["idProducte"];
                        $Nom = $producte["Nom"];
                        $Codi_de_barres = $producte["Codi_de_barres"];
                        $IVA = $producte["IVA"];
                        $Preu = $producte["Preu"];
                        $fkcidProveidor = $producte["fkcifProveidor"];
                        $Descripcio = $producte["Descripcio"];
                    }
                }
            ?>
            <div>
                <?php
                    if($idProducte){
                        echo '<h1> Actualitzant el producte amb ID: ' . $idProducte . '</h1>';
                    }else{
                        echo '<h1> Inserta un nou producte </h1>';
                    }
                ?>
                <?php
                    if($idProducte){
                        echo "<form action=\"update_api_producte.php?id=$idProducte\" method=\"POST\">";
                    }else{
                        echo ' <form action="insert_api_producte.php" method="POST">';
                    }
                ?>
            <div>
                <label>
                    Nom   
                </label>
                <input type="text" maxlength="255" required minlength="2" name="Nom">
            </div>
            <div>    
                <label>
                    Codi de barres    
                </label>
                <input type="text" maxlength="255" required minlength="5" name="Codi_de_barres">
            </div>
            <div>
                <label>
                    IVA   
                </label>    
                <input type="radio" name="IVA" value="4"> 4
                <input type="radio" name="IVA" value="10"> 10 
                <input type="radio" name="IVA" value="21"> 21 
            </div>
            <div>    
                <label>
                    Preu  
                </label>   
                <input type="number" required min="0,01" name="Preu" step="0.01">
            </div>
            <div>    
                <label>
                    Descripció
                </label>   
                <input type="text" max="150" required min="5" name="Descripcio">
            </div>
            <div>
            <label>
                Proveïdor
            </label>
                <select name="cifProveidor" required>
                <option value="">  </option>
                    <?php
                        $query = "SELECT cifProveidor, Nom FROM Proveidor;";
                        $result = mysqli_query ($bbdd, $query) OR DIE ("Alguna cosa no va correctament"); 
                        while ($Proveidor = mysqli_fetch_assoc ($result)) {
                            echo "<option value = \"$Proveidor[cifProveidor]\">$Proveidor[Nom]</option>";
                        }
                    ?>
                </select>
            </div>
            <div>
                <label>
                    Imatge del producte
                </label>
                <input type="file" name="producte" id="producte">
                <input type="button" value="Pujar">
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