<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";
    
?>
        <body>
        <?php require "includes/header.php";?>
            <h2> Listar  targeta</h2>
            <h6> rubías , cara de sandía </h6>
            <p> Parrafo precioso la verdad </p>
            <FORM action="list_targeta.php" method="GET">
            <SELECT NAME="Targeta">
            <?php
            require "includes/header.php";
            $query="SELECT * FROM Targeta
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
                    <td> idTargeta </td>
                    <td> Punts </td>
                    <td> Descompte</td>
                    <td> Nom </td>
                    <td> Opcions </td>
                </tr>   
                <?php 
                    $query = "SELECT * FROM Targeta ORDER BY idTargeta;";
                    $result = mysqli_query ($bbdd, $query);
                    while ($row = mysqli_fetch_assoc($result))
                        echo    "<tr>
                                    <td> $row[idTargeta] </td>
                                    <td> $row[Punts] </td>
                                    <td> $row[Descompte] </td>
                                    <td> $row[Nom] </td>
                                    <td> 
                                    </td>
                                    <a href=\"delete_api_targeta.php?idTargeta=$row[idTargeta]\"> Eliminar </a> |

                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 

    

