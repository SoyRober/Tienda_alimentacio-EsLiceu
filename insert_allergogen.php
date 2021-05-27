<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Insertar producte </h2>
        <h9> Carabirubi, carabiruba </h9>
        <p> Parrafito guapito del bonico </p>
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
                        echo '<h1> Actualitzant el producte amb ID: ' . $idAllergogen . '</h1>';
                    }else{
                        echo '<h1> Inserta un nou al·lergògen </h1>';
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
                <input type="text" maxlength="255" required minlength="2" name="Nom">
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