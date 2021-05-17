<?php
    $query="\DELETE FROM Producte WHERE id="$_GET"\;";
    $result=mysqli_query($bbdd,$query);