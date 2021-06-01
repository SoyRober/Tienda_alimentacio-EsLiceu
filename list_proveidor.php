<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
            <?php require "includes/header.php";?>
            <h2> Llista de tots els proveidors </h2>
            <form action = "list_proveidor.php" method = "GET" >
                <select name="Pais">
                    <option value="">  </option>
                    <?php
                        $query = "SELECT  DISTINCT Pais FROM Proveidor ORDER BY Nom;";
                        $result = mysqli_query($bbdd, $query);
                            while ($row = mysqli_fetch_assoc ($result)) {
                                echo "<option value = \"$row[Pais]\"> $row[Pais] </option>";
                            }
                    ?>
                </select>
                <button type = "submit"> Filtrar </button>
            </form>
            <table>
                <thead>
                    <tr>
                        <th> Població </th>
                        <th> Nom </th>
                        <th> Adreca </th>
                        <th> CP </th>
                        <th> País </th>
                        <th> cifProveidor </th>
                        <th> Telèfon </th>
                        <th> Opcions </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $where = "";
                        if (isset($_GET['Pais'])) {
                            $where = " WHERE Pais = \"$_GET[Pais]\" ";
                        }
                        $query = "SELECT * FROM Proveidor $where ORDER BY Nom;";
                        $result = mysqli_query ($bbdd, $query) or die(mysqli_error($bbdd));
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo    "<tr>
                                        <td> $row[Poblacio] </td>
                                        <td> $row[Nom] </td>
                                        <td> $row[Adreca] </td>
                                        <td> $row[CP] </td>
                                        <td> $row[Pais] </td>
                                        <td> $row[cifProveidor] </td>
                                        <td> $row[Telefon] </td>
                                        <td> 
                                        <a href=\"delete_api_proveidor.php?cifProveidor=$row[cifProveidor]\"> Elimina </a> |
                                        <a href=\"insert_proveidor.php?cifProveidor=$row[cifProveidor]\"> Editar </a> 
                                        </td>
                                    </tr>";
                    }
                    ?>
                </tbody>        
            </table>
        </body>
        <?php require "includes/footer.php";?>
    </html> 






