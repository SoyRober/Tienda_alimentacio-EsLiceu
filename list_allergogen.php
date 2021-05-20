<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
        <?php require "includes/header.php";?>
            <h2> Listar proveidor </h2>
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
                                    <td> $row[idAllergogen] </td>
                                    <td> $row[Nom] </td>
                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 






