<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
            <?php require "includes/header.php";?>
            <h2> Llista de clients </h2>
            <form action = "list_clients.php" method = "GET" >
            </form>
            <table>
                <thead>
                    <tr>
                        <th> dniClient </th>
                        <th> Pais </th>
                        <th> Nom </th>
                        <th> CP </th>
                        <th> Telefon </th>
                        <th> Provincia </th>
                        <th> Poblacio </th>
                        <th> Adreca </th>               
                        <th> idTargeta </th>
                        <th> Opcions </th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $where = "";
                if (isset($_GET['Targeta'])) {
                    $where = " WHERE tr.idTargeta = \"$_GET[Targeta]\" ";
                }
                    $query = "SELECT cl.* , tr.idTargeta AS NomTargeta FROM Client AS cl INNER JOIN Targeta AS tr 
                    ON (pr.fkidTargeta  = tr.idTargeta) 
                    $where ORDER BY idClient;";
                    $result = mysqli_query ($bbdd, $query);
                    while ($row = mysqli_fetch_assoc($result))
                    echo    "<tr>
                    <td> $row[dniClient] </td>
                    <td> $row[Pais] </td>
                    <td> $row[Nom] </td>
                    <td> $row[CP] </td>
                    <td> $row[Telefon] </td>
                    <td> $row[Provincia] </td>
                    <td> $row[Poblacio] </td>
                    <td> $row[Adreca] </td>
                    <td> $row[fkidTargeta] </td>
                    <a href=\"delete_api_client.php?dniClient=$row[dniClient]\"> Eliminar </a> |

                                    
                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 