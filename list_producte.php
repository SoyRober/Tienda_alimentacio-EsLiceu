<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
        <?php require "includes/header.php";?>
            <h2> Listar producte </h2>
            <h6> Carabirubi, carabiruba </h6>
            <p> Parrafito guapito del bonico </p>
            <table>
                <thead>
                    <tr>
                        <th> idProducte </th>
                        <th> Codi_de_barres </th>
                        <th> Nom </th>
                        <th> IVA </th>
                        <th> Descripció </th>
                        <th> Preu </th>
                        <th> fkcifProveidor </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "Select * FROM Producte ORDER BY Nom";
                    $result = mysqli_query ($bbdd, $query);
                    while ($Producte = mysqli_fetch_assoc ($result))
                        echo    "<tr>
                                    <td> idProducte </td>
                                    <td> Codi_de_barres </td>
                                    <td> Nom </td>
                                    <td> IVA </td>
                                    <td> Descripcio </td>
                                    <td> Preu </td>
                                    <td> fkcifProveidor </td>
                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 
