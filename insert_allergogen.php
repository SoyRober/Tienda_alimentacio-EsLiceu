<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <form action="insert_api_allergogen.php" method="post">
            <?php
                $idAllergogen = '';
                $nom = '';
                if(isset($_GET['idAllergogen'])) {
                    $query = "SELECT * FROM Allergogen WHERE idAllergogen = \"$_GET[idAllergogen]\";";
                    $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                    $allergogen = mysqli_fetch_assoc($result);
                    if($allergogen["idAllergogen"]) {
                        $idAllergogen = $allergogen["idAllergogen"];
                        $Nom = $allergogen["Nom"];
                    }
                }
            ?>
            <div>
                <?php
                    if($idAllergogen){
                        echo '<h2> Actualitzant al·lergògen amb ID: ' . $idAllergogen . '</h2>';
                    }else{
                        echo '<h2> Inserta un nou al·lergògen </h2>';
                    }
                ?>
                <?php
                    if($idAllergogen){
                        echo "<form action=\"update_api_allergogen.php?id=$idAllergogen\" method=\"POST\">";
                    }else{
                        echo ' <form action="insert_api_allergogen.php" method="POST">';
                    }
                ?> 
            <div>
                <label>
                    Nom   
                </label>
                <input class="inserts" type="text" maxlength="255" required minlength="2" name="Nom" value="<?=$nom?>">
            <div>
                <label>
                    Resetear
                </label>
                <input class="inserts" type="reset">
            </div>
            <div>
                <button class="inserts" type="submit">
                    Enviar
                </button>
            </div>    
        </form>
    </body>
    <?php require "includes/footer.php";?>
</html> 