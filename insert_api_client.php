<?php   
    require "includes/mysql.php";
    echo "<p> dniClient:".$_POST["dniClient"]."</p>"; 
    echo "<p> Pais:".$_POST["Pais"]."</p>";
    echo "<p> Nom:".$_POST["Nom"]."</p>"; 
    echo "<p> CP:".$_POST["CP"]."</p>";  
    echo "<p> Telefon:".$_POST["Telefon"]."</p>";
    echo "<p> Provincia:".$_POST["Provincia"]."</p>";
    echo "<p> Adreca:".$_POST["Adreca"]."</p>";    
    echo "<p> fkidTargeta:" .$_POST["fkidTargeta"]. "</p>";
    echo "<p> Email:".$_POST["Email"]."</p>";   
    
    $img = '';
    if($_FILES["imgcliente"]){

        $tmp_name = $_FILES["imgcliente"]["tmp_name"];
        $location = 'img/clientes/' . $_GET['dni'] . '.jpg';
        @unlink('img/clientes/' . $_GET['dni'] . '.jpg');
        if(move_uploaded_file($tmp_name, $location)){
            $img = ", imagen = \"$_GET[dni].jpg\" ";
        }
    }//preguntar a Tomeu

    $query="INSERT INTO Client (dniClient, Pais, Nom, CP, Telefon, Provincia, Adreca, fkidTargeta, Email, imagen) 
            VALUES (\"$_POST[dniClient]\",\"$_POST[Pais]\",\"$_POST[Nom]\",\"$_POST[CP]\",\"$_POST[Telefon]\",
            \"$_POST[Provincia]\",\"$_POST[Adreca]\",\"$_POST[fkidTargeta]\",\"$_POST[Email]\" \"$_GET[dni].jpg\");";   
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
        print (mysqli_error($bbdd));
    }
?>