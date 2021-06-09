
    <!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
            <?php require "includes/header.php";?>
            
            <h2> Llista de vendes</h2>
            <h4> Ventes </h4> 
            <p> Parrafo precioso la verdad </p>
            <form action = "list_venta.php" method = "GET" >
            <select name="Client"> 
            <option value=""> </option>
            <?php
            
            $query="SELECT Nom, dniClient FROM Client ORDER BY Nom";
            $result= mysqli_query($bbdd,$query);
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<option value=\"$row[dniClient]\">$row[Nom]</option>";
            }
                ?>
            </select>
            <button type ="submit"> FILTRAR 
                </button>
            </form>
            <table>
                <thead>
                    <tr>
                    <td> idVenta </td>   
                    <td> Nombre </td>
                    <td> dniClient </td>
                    <td> Opcions </td>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $where = "";
                if (isset($_GET['Client'])) {
                    $where = " WHERE cl.dniClient = \"$_GET[Client]\" "; 
                }

                    $query = "SELECT *, cl.Nom, cl.dniClient FROM Venta AS vt
                    INNER JOIN Client AS cl  ON (vt.fkdniClient = cl.dniClient)  
                    $where ORDER BY idVenta;";
                    
                    $result = mysqli_query ($bbdd, $query) OR die (mysqli_error($bbdd));
                    while ($row=mysqli_fetch_assoc($result))
                    echo    
                       "<tr>            
                        <td> $row[idVenta] </td>
                        <td> $row[Nombre] </td>
                        <td> $row[fkdniClient] </td>
                        <td> 
                        <button onclick=\"window.location.href='delete_api_venta.php?idVenta=$row[idVenta] '\"> Elimina </button> |
                        <button onclick=\"window.location.href='insert_venta.php?idVenta=$row[idVenta] '\"> Editar </button> 
                        </td>
                        </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 


