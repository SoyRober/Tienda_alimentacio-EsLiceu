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
                        $query = "SELECT Nom, cifProveidor FROM Proveidor ORDER BY Nom;"
                        $result = mysqli_query ($bbdd, $query);
                            while ($Proveidor = mysqli_fetch_assoc ($result)) {
                                echo "<option value = \"$Proveidor[cifProveidor]> $Proveidor[cifProveidor] </option>";
                            }
                    ?>
                </select>
                <button type = "submit"> Filtrar </button>
            </form>
        <?php require "includes/header.php";?>
            <h2> Listar producte </h2>
            <h6> Carabirubi, carabiruba </h6>
            <p> Parrafito guapito del bonico </p>
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
                    if (isset($_GET["Proveidor"])) {
                        $where " WHERE pd.cifProveidor = $_GET[Proveidor] ";
                    }
                    $query = "Select pr.*, pd.Nom AS NomProveidor 
                        FROM Producte AS pr INNER JOIN Proveidor AS pd
                        ON (pr.fkcifProveidor = pd.cifProveidor)
                        $where ORDER BY pr.Nom";
                    $result = mysqli_query ($bbdd, $query);
                    while ($Producte = mysqli_fetch_assoc($result))
                        echo    "<tr>
                                    <td> $Producte[Codi_de_barres] </td>
                                    <td> $Producte[Nom] </td>
                                    <td> $Producte[IVA] </td>
                                    <td> $Producte[Descripcio] </td>
                                    <td> $Producte[Preu] </td>
                                    <td> $Producte[fkcifProveidor] </td>
                                </tr>"
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 






