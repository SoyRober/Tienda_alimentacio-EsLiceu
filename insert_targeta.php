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
        $punts = '';
        $descompte = '';
        $nom = '';
        if (isset($_GET['idTargeta'])) {
            $query = "SELECT * FROM Targeta WHERE idTargeta = \"$_GET[idTargeta]\";";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            $targeta = mysqli_fetch_assoc($result);
            if ($targeta["idTargeta"]) {
                $idTargeta = $targeta["idTargeta"];
                $punts = $targeta["Punts"];
                $descompte = $targeta["Descompte"];
                $nom = $targeta["Nom"];
            }
        }
       ?>
              <div>
            <?php
            if ($idTargeta) {
                echo '<h1> Actualitzant la targeta amb ID: ' . $idTargeta . '</h1>';
            } else {
                echo '<h1> Inserta un nou targeta </h1>';
            }
            ?>
        </div>
        <div>
        <form action="<?= ($idTargeta) ? "update_api_targeta.php?id=$idTargeta" : 'insert_api_targeta.php' ?>" method="post" enctype="multipart/form-data">
        </div>    
            <div>
                <label>
                    Nom
                </label>
                <input type="text" maxlength="255" required minlength="2" name="Nom" value="<?=$nom?>">
            </div>
            <div>    
                <label>
                    Descompte  
                </label>   
                <input type="number" max="100" required min="1" name="Descompte" value="<?=$descompte?>">
            </div>
            <div>    
                <label>
                    Punts  
                </label>   
                <input type="number" max="5000" required min="1" name="Punts"value="<?=$punts?>" >
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