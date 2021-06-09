<!DOCTYPE html>
<html lang="ca">
<?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Comanda no enviada i no rebuda <h2>
        <p>
            <?php  
                echo $_GET["error"];
            ?>
        </p>
    </body>
</html>