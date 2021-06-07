<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";
    
?>
        <body>
        <?php require "includes/header.php";?>
        <?php
        
            ?>
            <h2> Llistar els productes i vendes</h2>
            <h6> rubías , cara de sandía </h6>
            <p> Parrafo precioso la verdad </p>
            <FORM action="list_producte-venta.php" method="GET">
            <SELECT NAME="producte-venta">
            <?php
            require "includes/header.php";
                echo "<option value=\"($row[id]\">
                    $row[nom]</option>"
                ?>
                </select>
                <buttom type ="submit"> FILTRAR 
                </buttom>
                </form>
            <table>
                <tr>
                    <td> idPro_Ven </td>
                    <td> Nom </td>
                    <td> Quantitat </td>
                    <td> IVA </td>
                    <td> Preu </td>
                    <td> fkidVenta </td>
                    <td> fkidProducte </td>
                    <td> Opcions </td>
                </tr> 
                <tbody>  
                <?php 
                    $query = "SELECT * FROM Venta ORDER BY idVenta;";
                    $result = mysqli_query ($bbdd, $query) or die(mysqli_error($bbdd));
                    while ($row = mysqli_fetch_assoc($result))
                        echo    "<tr>
                                    <td> $row[idPro_Ven] </td>
                                    <td> $row[Nom] </td>
                                    <td> $row[Quantitat] </td>
                                    <td> $row[IVA] </td>
                                    <td> $row[Preu] </td>
                                    <td> $row[fkidVenta] </td>
                                    <td> $row[fkidProducte] </td>
                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 

    

