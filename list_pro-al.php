<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
        <?php require "includes/header.php";?>
            <h2> Llista de productes amb al·lergògens </h2>
            <h6> Carabirubi, carabiruba </h6>
            <p> Parrafito guapito del bonico </p>
            <form action = "list_pro-al.php" method = "GET" >
            </form>
            <table>
                <thead>
                    <tr>
                        <th> idProducte </th>
                        <th> idAllergogen </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT al.* FROM Allergogen AS al INNER JOIN Pro_Al AS pral ON (al.ID=pral.fkidAllergogen) 
                    WHERE pral.fkidAllergogen = $_GET[idAllergogen];";
                    $query = "SELECT pr.* FROM Producte AS pr INNER JOIN Pro_Al AS pral ON (pr.ID=pral.fkidProducte) 
                    WHERE pral.fkidProducte = $_GET[idProducte];";
                    $result = mysqli_query ($bbdd, $query);
                    while ($row = mysqli_fetch_assoc($result))
                        echo    "<tr>
                                    <td> $row[idProducte] </td>
                                    <td> $row[idAllergogen] </td>
                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 






