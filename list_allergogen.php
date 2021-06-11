<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
            <?php require "includes/header.php";?>
            <h2> Llista de tots els al·lergògens </h2>
            <form action = "list_allergogen.php" method = "GET" >
            </form>
            <table class="list">
                <thead>
                    <tr>
                        <th class="list"> idAllergogen </th>
                        <th class="list"> Nom </th>
                        <th class="list"> Opcions </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT * FROM Allergogen ORDER BY idAllergogen;";
                    $result = mysqli_query ($bbdd, $query);
                    while ($row = mysqli_fetch_assoc($result))
                        echo    "<tr>
                                    <td class=\"list\"> $row[idAllergogen] </td>
                                    <td class=\"list\"> $row[Nom] </td>
                                    <td class=\"list\"> 
                                    <button class=\"llista\" onclick=\"window.location.href='delete_api_allergogen.php?idAllergogen=$row[idAllergogen] '\"> Elimina </button> |
                                    <button class=\"llista\" onclick=\"window.location.href='insert_allergogen.php?idAllergogen=$row[idAllergogen] '\"> Editar </button>
                                    </td>
                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
        <?php require "includes/footer.php";?>
    </html> 






