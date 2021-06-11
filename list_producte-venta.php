<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";
    
?>
        <body>
        <?php require "includes/header.php";?>
            <h2> Llistar els productes i vendes</h2>
            <h6> rubías , cara de sandía </h6>
            <p> Parrafo precioso la verdad </p>
            <form action="list_producte-venta.php" method="GET">
               
                </form>
            <table class="list">
            <thead>
                <tr>
                <th class="list"> idPro_Ven </th>
                <th class="list"> Quantitat </th>
                <th class="list"> Preu </th>
                <th class="list"> Opcions </th>
                </tr>
                </thead> 
                <tbody>  
                <?php 
                $where = "";
                if (isset($_GET["Producte"])) {
                    $where = "WHERE pro.idProducte = \" $_GET[Producte]\" ";
                }
                   $query = "SELECT *  FROM Pro_Ven  ORDER BY idPro_Ven; ";
                    $result = mysqli_query ($bbdd, $query) or die(mysqli_error($bbdd));
                    while ($row = mysqli_fetch_assoc($result))
                        echo    "<tr>
                        <td class=\"list\"> $row[idPro_Ven] </td>
                        <td class=\"list\"> $row[Quantitat] </td>
                        <td class=\"list\"> $row[Preu] </td>
                        <td class=\"list\"> 
                                    <button class=\"llista\" onclick=\"window.location.href='delete_api_pro_venta.php?idPro_Ven=$row[idPro_Ven] '\"> Elimina </button> </td>
                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 

    

