<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
            <?php require "includes/header.php";?>
            <h2> Llista de clients </h2>
            <form action = "list_client.php" method ="GET">
            <select name="Client"> 
            <option value=""> </option>
            <?php
                        $query = "SELECT Pais FROM Client ORDER BY Pais;";
                        $result = mysqli_query ($bbdd, $query);
                            while ($row = mysqli_fetch_assoc ($result)) {
                                echo "<option value = \"$row[Pais]\"> $row[Pais] </option>";
                            }
                    ?>
            </select>
            <button type ="submit"> FILTRAR 
                </button>
            </form>
            <h1>  
            <table>
                <thead>
                    <tr>
                        <th> dniClient </th>
                        <th> Pais </th>
                        <th> Nom </th>
                        <th> CP </th>
                        <th> Telefon </th>
                        <th> Provincia </th>
                        <th> Adreca </th>               
                        <th> idTargeta </th>
                        <th> Email </th>
                        <th> Imatge </th>
                        <th> Opcions </th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $where = "";
                if (isset($_GET['Pais'])) {
                    $where = " WHERE cl.Pais = \"$_GET[Pais]\" ";
                }
                $query = "SELECT cl.*, tr.idTargeta AS Targeta FROM Client
                        AS cl INNER JOIN Targeta AS tr
                        ON (cl.fkidTargeta = tr.idTargeta)
                 $where ORDER BY Nom;";  //Preguntar a Tomeu
                    $result = mysqli_query ($bbdd, $query);
                    while ($row = mysqli_fetch_assoc($result))
                    echo    "<tr>
                    <td> $row[dniClient] </td>
                    <td> $row[Pais] </td>
                    <td> $row[Nom] </td>
                    <td> $row[CP] </td>
                    <td> $row[Telefon] </td>
                    <td> $row[Provincia] </td>
                    <td> $row[Adreca] </td>
                    <td> $row[fkidTargeta] </td>
                    <td> $row[Email] </td>
                    <td> <img src=\"img/clientes/$row[imagen]\" width=\"80\"> </td>
                    <td>
                    <button onclick=\"window.location.href='delete_api_client.php?dniClient=$row[dniClient] '\"> Elimina </button> |
                    <button onclick=\"window.location.href='insert_client.php?dniClient=$row[dniClient] '\"> Editar </button> 
                    </td>
                                    
                </tr>"
                    ?> 
                </tbody>        
            </table>
            </h1>
        </body>
    </html> 