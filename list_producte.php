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
            <h2> Listar producte </h2>
            <h6> Carabirubi, carabiruba </h6>
            <p> Parrafito guapito del bonico </p>
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
                    <td> idProducte </td>
                    <td> Codi_de_barres </td>
                    <td> Nom </td>
                    <td> IVA </td>
                    <td> Descripcio </td>
                    <td> Preu </td>
                    <td> fkcifProveidor </td>
                </tr>
                <tr>
                    <td> 1 </td>
                    <td> CJ374850127386 </td>
                    <td> Pan </td>
                    <td> 14 </td>
                    <td> Molt bo, de casa </td>
                    <td> 0.99 </td>
                    <td> 54875621B </td>
                </tr>
            </table>
        </body>
    </html> 


    

