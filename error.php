<!DOCTYPE html>
<html lang="ca">
<?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> No s'han insertat les dades <h2>
        <p>
            <?php  
                echo $_GET["error"];
            ?>
        </p>
    </body>
</html>