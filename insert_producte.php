<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Insertar producte </h2>
        <h9> Carabirubi, carabiruba </h9>
        <p> Parrafito guapito del bonico </p>
        <form action="insert_api_producte.php" method="post">
            <div>
                <label>
                    Nom   
                </label>
                <input type="text" maxlength="255" required minlength="2" name="Nom">
            </div>
            <div>    
                <label>
                    Codi_de_barres    
                </label>
                <input type="text" maxlength="255" required minlength="5" name="Codi_de_barres">
            </div>
            <div>    
                <label>
                    IVA  
                </label>   
                <input type="number" max="21" required min="14" name="IVA">
            </div>
            <div>    
                <label>
                    Preu  
                </label>   
                <input type="number" max="100" required min="0,00" name="Preu" step="0.01">
            </div>
            <div>    
                <label>
                    Descripcio
                </label>   
                <input type="text" max="150" required min="5" name="Descripcio">
            </div>
            <div>
            <label>
                Proveidor
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