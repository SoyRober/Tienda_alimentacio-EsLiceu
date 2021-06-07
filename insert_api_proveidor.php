<?php 
require "includes/mysql.php";
echo "<p> Nom:".$_POST["Nom"]."</p>"; 
echo "<p> Poblacio:".$_POST["Poblacio"]."</p>"; 
echo "<p> cifProveidor:".$_POST["cifProveidor"]."</p>";
echo "<p> Adreca:".$_POST["Adreca"]."</p>";  
echo "<p> Telefon:".$_POST["Telefon"]."</p>";
echo "<p> CP:".$_POST["CP"]."</p>";
echo "<p> Pais:".$_POST["Pais"]."</p>";
$query="INSERT INTO Proveidor (Nom,Poblacio,cifProveidor,Adreca,Telefon,CP,Pais) 
VALUES (\"$_POST[Nom]\", \"$_POST[Poblacio]\", \"$_POST[cifProveidor]\", \"$_POST[Adreca]\", \"$_POST[Telefon]\", \"$_POST[CP]\", \"$_POST[Pais]\");";
echo $query;
$result = mysqli_query($bbdd, $query);
if(!$result){
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
}else{
    header('Location: ok.php');
}
?>
