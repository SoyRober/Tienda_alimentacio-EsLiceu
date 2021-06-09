<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Insertar targeta </h2>
        <h9> Carita , cara </h9>
        <p> Parrafo con tremenda personalidad </p>
        <?php
        $idTargeta = '';
        $Punts = '';
        $Descompte = '';
        $Nom = '';
        $imagen = '';
        if (isset($_GET['idTargeta'])) {
            $query = "SELECT * FROM Targeta WHERE idTargeta = \"$_GET[idTargeta]\";";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            $producte = mysqli_fetch_assoc($result);
            if ($Targeta["idTargeta"]) {
                $idTargeta = $Targeta["idTargeta"];
                $Punts = $Targeta["Punts"];
                $Descompte = $Targeta["Descompte"];
                $Nom = $Targeta["Nom"];
                $imagen = $Targeta["imagen"];
            }
        }
       ?>
        <div>
        <form action="<?= ($idTargeta) ? "update_api_targeta.php?id=$idTargeta" : 'insert_api_targeta.php' ?>" method="post" enctype="multipart/form-data">
        </div>    
            <div>
                <label>
                    Nom
                </label>
                <input type="text" maxlength="255" required minlength="2" name="Nom" value="<?=$Nom?>">
            </div>
            <div>    
                <label>
                    Descompte  
                </label>   
                <input type="number" max="100" required min="1" name="Descompte" value="<?=$Descompte?>">
            </div>
            <div>    
                <label>
                    Punts  
                </label>   
                <input type="number" max="5000" required min="1" name="Punts"value="<?=$Punts?>" >
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