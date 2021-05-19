<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Insertar client </h2>
        <h9> Carita , cara </h9>
        <p> Parrafo con tremenda personalidad </p>
        <form action="insert_api_producte.php" method="post">
            <div>
                <label>
                    Nom
                </label>
                <input type="text" maxlength="255" required minlength="2" name="Nom">
            </div>
            <div>    
                <label>
                    dniClient    
                </label>
                <input type="text" maxlength="255" required minlength="5" name="Codi_de_barres">
            </div>
            <div>    
                <label>
                    Pais   
                </label>   
                <input type="number" max="40" required min="20" name="Descompte">
            </div>
            <div>    
                <label>
                  CP    
                </label>   
                <input type="number" max="100" required min="0,99" name="Punts">
            </div>
            <div>
            <label>
                    Telefon   
                </label>   
                <input type="number" max="40" required min="20" name="Descompte">
            </div>
            <div>
            <label>
                    Pais   
                </label>   
                <input type="number" max="40" required min="20" name="Descompte">
            
            <div>
                <select name="cifProveidor" required>
                <option value=""></option>
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