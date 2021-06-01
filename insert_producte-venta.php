<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Insertar Producte-Venta </h2>
        <h9> Carita , cara </h9>
        <p> Parrafo con tremenda personalidad </p>
        <form action="insert_api_producte-venta.php" method="post">
            <div>
                <label>
                    Quantitat
                </label>
                <input type="text" maxlength="255" required minlength="2" name="Nom">
            </div>
            <div>    
                <label>
                    IVA  
                </label>   
                <input type="iva" max="100" required min="1" name="IVA">
            </div>
            <div>    
                <label>
                    Preu  
                </label>   
                <input type="number" max="10000" required min="1" name="Preu">
            </div>
            <div>    
                <label>
                    fkidVenta  
                </label>   
                <input type="text" max="100" required min="1" name="idVenta">
            </div>
            <div>    
                <label>
                    fkidProducte  
                </label>   
                <input type="text" max="100" required min="1" name="idProducte">
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