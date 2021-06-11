
    <!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
            <?php require "includes/header.php";?>
            
            <h2> Llista de vendes</h2>
            <h4> Ventes </h4> 
            <p> Parrafo precioso la verdad </p>
            <form action = "list_venta.php" method = "GET" >
            <select class="select" name="Client"> 
            <option value=""> </option>
            <?php
            
            $query="SELECT Nom, dniClient FROM Client ORDER BY Nom";
            $result= mysqli_query($bbdd,$query);
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<option value=\"$row[dniClient]\">$row[Nom]</option>";
            }
                ?>
            </select>
            <button class="filtrar" type ="submit"> FILTRAR 
                </button>
            </form>
            <a class="reinici_filtre" href=list_venta.php> Reiniciar filtre </a>
            <table class="list">
                <thead>
                    <tr>
                    <th class="list"> idVenta </th>   
                    <th class="list">Nombre </th>
                    <th class="list"> dniClient </th>
                    <th class="list"> Opcions </th>
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
                       <td class=\"list\"> $row[idVenta] </td>
                       <td class=\"list\"> $row[Nombre] </td>
                       <td class=\"list\"> $row[fkdniClient] </td>
                       <td class=\"list\">
                        <button class=\"llista\" onclick=\"window.location.href='delete_api_venta.php?idVenta=$row[idVenta] '\"> Elimina </button> |
                        <button class=\"llista\" onclick=\"window.location.href='insert_venta.php?idVenta=$row[idVenta] '\"> Editar </button> 
                        </td>
                        </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 


