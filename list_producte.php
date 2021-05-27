<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
            <?php require "includes/header.php";?>
            <h2> Llista de tots els productes </h2>
            <form action = "list_producte.php" method = "GET" >
                <select name="Proveidor">
                <option value="">  </option>
                    <?php
                        $query = "SELECT Nom, cifProveidor FROM Proveidor ORDER BY Nom;";
                        $result = mysqli_query ($bbdd, $query);
                            while ($row = mysqli_fetch_assoc ($result)) {
                                echo "<option value = \"$row[cifProveidor]\"> $row[Nom] </option>";
                            }
                    ?>
                </select>
                <button type = "submit"> Filtrar </button>
            </form>
            <table>
                <thead>
                    <tr>
                        <th> idProducte </th>
                        <th> Codi de barres </th>
                        <th> Nom </th>
                        <th> IVA </th>
                        <th> Descripció </th>
                        <th> Preu </th>
                        <th> cifProveidor </th>
                        <th> Opcions </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $where = "";
                    if (isset($_GET['Proveidor'])) {
                        $where = " WHERE pd.cifProveidor = \"$_GET[Proveidor]\" ";
                    }
                    $query = "Select pr.*, pd.Nom AS NomProveidor 
                        FROM Producte AS pr INNER JOIN Proveidor AS pd
                        ON (pr.fkcifProveidor = pd.cifProveidor)
                        $where ORDER BY idProducte";
                    $result = mysqli_query ($bbdd, $query);
                    while ($row = mysqli_fetch_assoc($result))
                        echo    "<tr> 
                                    <td> $row[idProducte] 
                                    <td> $row[Codi_de_barres] </td>
                                    <td> $row[Nom] </td>
                                    <td> $row[IVA] </td>
                                    <td> $row[Descripcio] </td>
                                    <td> $row[Preu] </td>
                                    <td> $row[fkcifProveidor] </td>
                                    <td> 
                                    <a href=\"list_pro-al.php?idProducte=$row[idProducte]\"> Consulta alergogens </a> | 
                                    <a href=\"delete_api_producte.php?idProducte=$row[idProducte]\"> Elimina </a> |
                                    <a href=\"insert_producte.php?idProducte=$row[idProducte]\"> Editar </a>
                                    </td>
                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 






