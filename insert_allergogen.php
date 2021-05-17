<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Insertar producte </h2>
        <h9> Carabirubi, carabiruba </h9>
        <p> Parrafito guapito del bonico </p>
        <form action="insert_api_allergogen.php" method="post">
            <div>
                <label>
                    Nom   
                </label>
                <input type="text" maxlength="255" required minlength="2" name="Nom">
            </div>
                <label>
                    idAllergogen
                </label>
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