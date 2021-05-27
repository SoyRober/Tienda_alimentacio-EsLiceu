<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";
    ?>
        <body>
    
            <h2> Llistar  Venta</h2>
            <h4> Ventes </h4>
            <p> Parrafo precioso la verdad </p>
            <FORM action="list_venta.php" method="GET">
            <SELECT NAME="Venta">
            <?php
            require "includes/header.php";
            $query="SELECT * FROM Venta
                           order by Nom";
            $result= mysqli_query($bbdd,$query);
            while ($row = mysqli_fetch_assoc($result))
            

                echo "<option value=\"($row[id]\">
                    $row[nom]</option>"
                ?>
                </select>
                <buttom type ="submit"> FILTRAR 
                </buttom>
                </form>
            <table>
                <tr>
                     
                <td> fkdniClient </td>
                <td> fkidTargeta </td>   
                    <td> idVenta </td>
                    <td> Nom </td>
                    <td> Nombre </td>
                    <td>  </td>
                </tr>   
                <tr>
                    <td> 12345678A </td>
                    <td> 1 </td>
                    <td> 191928301S </td>
                    <td> Carne </td>
                    <td> 2000 </td>
                    
                </tr>
            </table>
        </body>
    </html> 


    

