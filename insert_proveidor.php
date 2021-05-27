<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Insertar proveidor </h2>
        <h9> Carabirubi, carabiruba </h9>
        <p> Parrafito guapito del bonico </p>
        <form action="insert_api_proveidor.php" method="post">
        <?php
            $cifProveidor = "";
            $Nom = "";
            $CP = "";
            if(isset($_GET['cifProveidor'])){
                $query = "SELECT * FROM proveidor WHERE cifProveidor = "$_GET[cifProveidor]"  ";
                $result = mysqli_query($bbdd, $query);
                $producte = mysqli_fetch_assoc($result);
                if($proveidor["cifProveidor"]) {
                    $cifProveidor = $proveidor["cifProveidor"];
                    $nom = $proveidor["Nom"];
                    $cp = $proveidor["CP"];
                    $poblacio = $proviedor["Poblacio"];
                    $telefon = $proveidor["Telefon"];
                    $fkidproveidor = $proveidor["cifProveidor"];
                    $descripcio = $proveidor["Descripcio"];
                }
            }
    
            ?>

    <body>
        <?php require "includes/header.php"; ?>

        <div>
            <?php
                if($cifProveidor){
                    echo '<h1> Actualitzant el proveïdor amb cif: ' . $cifProveidor . '</h1>';
                }else{
                    echo '<h1> Inserta un nou proveïdor </h1>';
                }
            ?>

            <?php
                if($dni){
                    echo ' <form action="update_api_producte.php" method="POST">';
                }else{
                    echo ' <form action="insert_api_producte.php" method="POST">';
                }
            ?>
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
                <input type="text" maxlength="16" required minlength="16" name="Telefon">
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
                <input type="text" maxlenght="6" required name="CP">
            </div>
            <div>    
                <label>
                    Pais
                </label>   
                <input type="text" maxlenght="150" required minlenght="5" name="Pais">
            </div>
            <div>    
                <label>
                    Adreça
                </label>   
                <input type="text" maxlenght="150" required minlenght="5" name="Adreca">
            </div>
            <div>
                <label>
                    CIF del proveidor
                </label>    
                <input type="text" required maxlenght="9" <?=($cifproveidor) ? "readonly" : ""?> minlenght="9" name="cifProveidor">
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