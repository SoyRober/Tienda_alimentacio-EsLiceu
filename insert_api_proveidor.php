<?php 
    require "includes/mysql.php";
    $query = "INSERT INTO producte (idProducte, Codi_de_barres, Nom, IVA, Descripcio, Preu, fkcifProveidor, imagen 	)
    VALUES (\"$_POST[idProducte]\", \"$_POST[Codi_de_barres]\", \"$_POST[DNI_client]\", \"$_POST[Data_venta]\");";
$result = mysqli_query($bbdd, $query);

if ($result) {

//Recull el darrer ID insertat
$query = "SELECT MAX(ID_Venta) as maxim FROM venta";
$result = mysqli_query($bbdd, $query);
$id = mysqli_fetch_assoc($result)['maxim'];

//Insertam els productes de la venta
if (isset($_POST['producteVenta'])) {
  foreach ($_POST['producteVenta'] as $idProducte) {
      $query = "INSERT INTO prod_vent (fkID_venta, fkID_producte) values ($id, $idProducte)";
      mysqli_query($bbdd, $query);
  }
}
}
?>
