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
            
            $query="SELECT * FROM Targeta
            $where  order by Nom";
            $result= mysqli_query($bbdd,$query);
            while ($row = mysqli_fetch_assoc($result))

                echo "<option value=\"($row[idTargeta]\">
                    $row[Nom]</option>"
                ?>
                </select>
                <button type ="submit"> FILTRAR </button>
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
                 $where = "";
                 if (isset($_GET['idTargeta'])) {
                     $where = " WHERE idTargeta = \"$_GET[idTargeta]\" ";
                 }
                    $query = "SELECT * FROM Targeta  ORDER BY idTargeta;";
                    $result = mysqli_query ($bbdd, $query);
                    while ($row = mysqli_fetch_assoc($result))
                        echo    "<tr>
                                    <td> $row[idTargeta] </td>
                                    <td> $row[Punts] </td>
                                    <td> $row[Descompte] </td>
                                    <td> $row[Nom] </td>
                                    <td>  
                                    <button onclick=\"window.location.href='delete_api_venta.php?idVenta=$row[idTargeta] '\"> Elimina </button> |
                                    <button onclick=\"window.location.href='insert_venta.php?idVenta=$row[idTargeta] '\"> Editar </button> 
                                    </td>                          
                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 

    

