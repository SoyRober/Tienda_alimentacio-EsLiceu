<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";
    ?>
        <body>
        <?php 
        if(isset($_GET['Proveidor']))
        $where ="WHERE pd.ID= $_GET[Proveidor]";
        
        $query="SELECT pr.*,pd.Nom AS NomProveidor
        FROM Producte AS pr INNER JOIN 
        Proveidor AS pd ON (pr.Fk_prov=pd.ID)
        $where
        ORDER BY pr.Nom ";
        
        require "includes/header.php";?>
            <h2> Listar  vendes</h2>
            <h6> rubías , cara de sandía </h6>
            <p> Parrafo precioso la verdad </p>
            <FORM action="list_producte.php" method="GET">
            <SELECT NAME="Proveidor">
            <?php
            $query="SELECT Nom,ID FROM Proveidor
                order by Nom";
            $result= mysqli_query($bbdd,$query);
            while ($row = mysqli_fetch_assoc($result))

                echo "<option value=\"($row[ID]\">
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


    
