<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";
    
?>
        <body>
        <?php require "includes/header.php";?>
            <h2> Listar  targeta</h2>
            <h6> rubías , cara de sandía </h6>
            <p> Parrafo precioso la verdad </p>
            <form action="list_targeta.php" method="GET">
            </form>
            <table>
                <tr>
                    <td> idTargeta </td>
                    <td> Punts </td>
                    <td> Descompte</td>
                    <td> Nom </td>
                    <td> Opcions </td>
                </tr>   
                <?php 
                    $query = "SELECT * FROM Targeta  ORDER BY idTargeta;";
                    $result = mysqli_query ($bbdd, $query);
                    while ($row = mysqli_fetch_assoc($result))
                        echo    "<tr>
                                    <td> $row[idTargeta] </td>
                                    <td> $row[Punts] </td>
                                    <td> $row[Descompte] </td>
                                    <td> $row[Nom] </td>
                                    <td>  
                                    <button onclick=\"window.location.href='delete_api_targeta.php?idTargeta=$row[idTargeta] '\"> Elimina </button> |
                                    <button onclick=\"window.location.href='insert_targeta.php?idTargeta=$row[idTargeta] '\"> Editar </button> 
                                    </td>                          
                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 

    

