<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Insertar proveidor </h2>
        <h9> Carabirubi, carabiruba </h9>
        <p> Parrafito guapito del bonico </p>
        <form action="insert_api_proveidor.php" method="post">
            <div>
                <label>
                    Nom   
                </label>
                <input type="text" maxlength="255" required minlength="2" name="Nom">
            </div>
            <div>    
                <label>
                     Telèfon
                </label>
                <input type="text" maxlength="13" required minlength="11" name="Telefon">
            </div>
            <div>    
                <label>
                    Població  
                </label>   
                <input type="number" max="99999999" required name="Poblacio">
            </div>
            <div>    
                <label>
                    CP  
                </label>   
                <input type="text" max="6" required name="CP">
            </div>
            <div>    
                <label>
                    Pais
                </label>   
                <input type="text" max="150" required min="5" name="Pais">
            </div>
            <div>    
                <label>
                    Pais
                </label>   
                <input type="text" max="150" required min="5" name="Pais">
            </div>
            <div>
                <label>
                    CIF del proveidor
                </label>    
                <input type="text" required maxlenght="9" minlenght="9" name="cifProveidor">
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