<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";
    ?>
        <body>
        <?php 
        if(isset($_GET['Client']))
        $where ="WHERE cl.id= $_GET[Client]";
        
        $query="SELECT * FROM Client 
         ORDER BY Nom ";

        require "includes/header.php";?>
            <h2> Listar  clientes</h2>
            <h4> cara de sandía </h4>
            <p> Parrafo precioso la verdad </p>
            <FORM action="list_client.php" method="GET">
            <SELECT NAME="Client">
            <?php
            $query="SELECT Nom,id FROM Client
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
                    <td> dniClient </td>
                    <td> Pais </td>
                    <td> Nom </td>
                    <td> CP </td>
                    <td> Telefon </td>
                    <td> Provincia </td>
                    <td> Poblacio </td>
                    <td> Adreca </td>
                    <td> fkidTargeta </td>
                    <td>  </td>
                </tr>   
                <tr>
                    <td> 191928301S </td>
                    <td> Espanya </td>
                    <td> Rober </td>
                    <td> 01410 </td>
                    <td> +34 611 20 26 54 </td>
                    <td> Balears </td>
                    <td> C/Calle Velazquez </td>
                    <td> 191928301S </td>
                </tr>
            </table>
        </body>
    </html> 
