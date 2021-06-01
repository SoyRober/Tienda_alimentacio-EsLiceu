
    <!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
            <?php require "includes/header.php";?>
            
            <h2> Llista de ventes</h2>
            <h4> Ventes </h4> 
            <p> Parrafo precioso la verdad </p>
            <form action = "list_venta.php" method = "GET" >
            </form>
            <table>
                <thead>
                    <tr>
                    <td> idVenta </td>   
                    <td> Nom </td>
                    <td> Nombre </td>
                    <td> fkdniClient </td>
                    <td> fkidTargeta </td>
                    <td> Opcions </td>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $query = "SELECT * FROM Venta ORDER BY idVenta ;";
                    $result = mysqli_query ($bbdd, $query);
                    while ($row = mysqli_fetch_assoc($result))
                        echo    "<tr>
                                    
                        <td> $row[idVenta] </td>
                        <td> $row[fkidTargeta] </td>
                        <td> $row[idVenta] </td>
                        <td> $row[Nom] </td>
                        <td> $row[Nombre] </td>
                        <a href=\"delete_api_venta.php?idVenta=$row[idVenta]\"> Eliminar </a> |
                                    
                        </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 


