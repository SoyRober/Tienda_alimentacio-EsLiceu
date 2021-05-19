<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
        <?php require "includes/header.php";?>
            <h2> Listar producte </h2>
            <h6> Carabirubi, carabiruba </h6>
            <p> Parrafito guapito del bonico </p>
            <form action = "list_producte.php" method = "GET" >
                <select name="Proveidor">
                    <?php
                        $query = "SELECT Nom, cifProveidor FROM Proveidor ORDER BY Nom;";
                        $result = mysqli_query ($bbdd, $query);
                            while ($row = mysqli_fetch_assoc ($result)) {
                                echo "<option value = \"$row[cifProveidor]\"> $row[Nom] </option>";
                            }
                    ?>
                    <button type = "submit"> Filtrar </button>
                </select>
                <button type = "submit"> Filtrar </button>
            </form>
            <table>
                <thead>
                    <tr>
                        <th> Codi_de_barres </th>
                        <th> Nom </th>
                        <th> IVA </th>
                        <th> Descripció </th>
                        <th> Preu </th>
                        <th> fkcifProveidor </th>
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
                        $where ORDER BY pr.Nom;";
                    $result = mysqli_query ($bbdd, $query);
                    while ($row = mysqli_fetch_assoc($result))
                        echo    "<tr>
                                    <td> $row[Codi_de_barres] </td>
                                    <td> $row[Nom] </td>
                                    <td> $row[IVA] </td>
                                    <td> $row[Descripcio] </td>
                                    <td> $row[Preu] </td>
                                    <td> $row[fkcifProveidor] </td>
                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 






