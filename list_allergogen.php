<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
            <h2> Llista d'al·lergògens </h2>
            <?php require "includes/header.php";?>
            <h6> Carabirubi, carabiruba </h6>
            <p> Parrafito guapito del bonico </p>
            <form action = "list_allergogen.php" method = "GET" >
            </form>
            <table>
                <thead>
                    <tr>
                        <th> idAllergogen </th>
                        <th> Nom </th>
                        <th> Opcions </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "Select * FROM Allergogen ORDER BY idAllergogen;";
                    $result = mysqli_query ($bbdd, $query);
                    while ($row = mysqli_fetch_assoc($result))
                        echo    "<tr>
                                    <td align=\"center\"> $row[idAllergogen] </td>
                                    <td> $row[Nom] </td>
                                    <td> <a href=\"delete_api_allergogen.php?idAllergogen=$row[idAllergogen]\"> Elimina </a> </td>
                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 






