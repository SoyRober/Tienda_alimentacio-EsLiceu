<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Insertar Venta </h2>
        <h9> Carita , cara </h9>
        <p> Parrafo con tremenda personalidad </p>
        <form action="insert_api_venta.php" method="post">
            <div>
                <label>
                    Nom
                </label>
                <input type="text" maxlength="255" required minlength="2" name="Nom">
            </div>
            <div>
                <label>
                    Nombre
                </label>
                <input type="text" maxlength="255" required minlength="2" name="Nom">
            </div>
            <div>
                <label>
                    fkdniClient
                </label>
                <input type="text" maxlength="255" required minlength="2" name="Nom">
            </div>
            <div>
                <label>
                    fkidTargeta
                </label>
                <input type="text" maxlength="255" required minlength="2" name="Nom">
            </div>
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