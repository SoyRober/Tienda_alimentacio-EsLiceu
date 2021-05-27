<!DOCTYPE html>
<html>
    <?php
        $filname = $_FILES["file"]["name"];
        $location = "imatges_pujades".$filename;
        if ( move_uploaded_file($_FILES["file"]["tmp_name"], $location)){
            echo "<p> La imatge s'ha pujat <php>"
        }else{
            echo "<b> No s'ha pogut pujar la imatge </b>"
        }
    ?>
</html>