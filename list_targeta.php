<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";
    ?>
        <body>
    
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
                </tr>   
                <tr>
                    <td> 191928301S </td>
                    <td> 90 </td>
                    <td> 10 </td>
                    <td> Rober </td>
                    
                </tr>
            </table>
        </body>
    </html> 


    

