<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
            <?php require "includes/header.php";?>
            <h2> Llista de tots els al·lergògens </h2>
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
                    $query = "SELECT * FROM Allergogen ORDER BY idAllergogen;";
                    $result = mysqli_query ($bbdd, $query);
                    while ($row = mysqli_fetch_assoc($result))
                        echo    "<tr>
                                    <td> $row[idAllergogen] </td>
                                    <td> $row[Nom] </td>
                                    <td> <a href=\"delete_api_allergogen.php?idAllergogen=$row[idAllergogen]\"> Elimina </a> </td>
                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 






