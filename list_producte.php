<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
            <?php require "includes/header.php";?>
            <h2> Llista de tots els productes </h2>
            <form action = "list_producte.php" method = "GET" >
                <select class="select" name="Proveidor">
                <option value="">  </option>
                    <?php
                        $query = "SELECT Nom, cifProveidor FROM Proveidor ORDER BY Nom;";
                        $result = mysqli_query ($bbdd, $query);
                            while ($row = mysqli_fetch_assoc ($result)) {
                                echo "<option value = \"$row[cifProveidor]\"> $row[Nom] </option>";
                            }
                    ?>
                </select>
                <button class="filtrar" type = "submit"> Filtrar </button>
                <br>
                <label>
                    Resetear filtre
                </label>
                <input type="reset" class="reset" value="Borrar filtre">
            </form>
            <a class="reinici_filtre" href=list_producte.php> Reiniciar filtre </a>
            <table>
                <thead>
                    <tr>
                    <th class="list"> idProducte </th>
                    <th class="list"> Codi de barres </th>
                    <th class="list"> Nom </th>
                    <th class="list"> IVA </th>
                    <th class="list"> Descripció </th>
                    <th class="list"> Preu </th>
                    <th class="list"> cifProveidor </th>
                    <th class="list"> Opcions </th>
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
                    $result = mysqli_query ($bbdd, $query) or die (mysqli_error($bbdd))
                    ;
                    while ($row = mysqli_fetch_assoc($result))
                        echo    "<tr> 
                        <td class=\"list\"> $row[idProducte] 
                        <td class=\"list\"> $row[Codi_de_barres] </td>
                        <td class=\"list\"> $row[Nom] </td>
                        <td class=\"list\"> $row[IVA] </td>
                        <td class=\"list\"> $row[Descripcio] </td>
                        <td class=\"list\"> $row[Preu] </td>
                        <td class=\"list\"> $row[fkcifProveidor] </td>
                        <td class=\"list\">
                                    <button class=\"llista\" onclick=\"window.location.href='delete_api_producte.php?idProducte=$row[idProducte] '\"> Elimina </button> |
                                    <button class=\"llista\" onclick=\"window.location.href='insert_producte.php?idProducte=$row[idProducte] '\"> Editar </button>
                                    </td>
                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
        <?php require "includes/footer.php";?>
    </html> 






