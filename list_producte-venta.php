<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";
    
?>
        <body>
        <?php require "includes/header.php";?>
            <h2> Llistar els productes i vendes</h2>
            <h6> rubías , cara de sandía </h6>
            <p> Parrafo precioso la verdad </p>
            <FORM action="list_producte-venta.php" method="GET">
            <SELECT NAME="producte-venta">
            <?php
            $query = "SELECT Nom, idProducte FROM Producte ORDER BY Nom;";
            $result = mysqli_query ($bbdd, $query);
                while ($row = mysqli_fetch_assoc ($result)) {
                    echo "<option value = \"$row[idProducte]\"> $row[Nom] </option>";
                }
                ?>
                </select>
                <button type ="submit"> FILTRAR 
                </button>
                </form>
            <table>
            <thead>
                <tr>
                    <td> idPro_Ven </td>
                    <td> Nom </td>
                    <td> Quantitat </td>
                    <td> IVA </td>
                    <td> Preu </td>
                    <td> fkidProducte </td>
                    <td> Opcions </td>
                </tr>
                </thead> 
                <tbody>  
                <?php 
                $where = "";
                if (isset($_GET["Producte"])) {
                    $where = "WHERE pro.idProducte = \" $_GET[Producte]\" ";
                }
                   $query = "SELECT vt.*, pro.idProducte, pro.Nom FROM Pro_Ven AS vt INNER JOIN Producte AS pro ON ( vt.fkidProducte = pro.idProducte ) $where ORDER BY idPro_Ven; ";
                    $result = mysqli_query ($bbdd, $query) or die(mysqli_error($bbdd));
                    while ($row = mysqli_fetch_assoc($result))
                        echo    "<tr>
                                    <td> $row[idPro_Ven] </td>
                                    <td> $row[Nom] </td>
                                    <td> $row[Quantitat] </td>
                                    <td> $row[IVA] </td>
                                    <td> $row[Preu] </td>
                                    <td> $row[fkidProducte] </td>
                                    <td> 
                                    <button onclick=\"window.location.href='delete_api_producte.php?idProducte=$row[idProducte] '\"> Elimina </button> |
                                    <button onclick=\"window.location.href='insert_producte.php?idProducte=$row[idProducte] '\"> Editar </button>
                                    </td>
                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 

    

