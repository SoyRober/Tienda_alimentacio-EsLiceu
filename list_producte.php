<!DOCTYPE html>
<html lang="ca">
<?php require "includes/head.php"; ?>

<body>
    <?php require "includes/header.php"; ?>
    <h2> Llista de tots els productes </h2>
    <form action="list_producte.php" method="GET">
        <select class="select" name="Proveidor">
            <option value=""> Selecciona un producte </option>
            <?php
            $query = "SELECT Nom, cifProveidor FROM Proveidor ORDER BY Nom;";
            $result = mysqli_query($bbdd, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value = \"$row[cifProveidor]\"> $row[Nom] </option>";
            }
            ?>
        </select>
        <button class="filtrar" type="submit"> Filtrar </button>
        <br>
    </form>
    <a class="reinici_filtre" href=list_producte.php> Reiniciar filtre </a>
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
                <th> Imatge </th>
                <th> Opcions </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $where = "";
            if (isset($_GET['Proveidor'])) {
                $where = " WHERE pd.cifProveidor = \"$_GET[Proveidor]\" ";
            }
            $query = "SELECT pr.*, pd.Nom AS NomProveidor 
                            FROM Producte AS pr INNER JOIN Proveidor AS pd
                            ON (pr.fkcifProveidor = pd.cifProveidor)
                            $where ORDER BY idProducte";
            $result = mysqli_query($bbdd, $query);
            while ($row = mysqli_fetch_assoc($result))
                echo    "<tr> 
                                        <td> $row[idProducte] 
                                        <td> $row[Codi_de_barres] </td>
                                        <td> $row[Nom] </td>
                                        <td> $row[IVA] </td>
                                        <td> $row[Descripcio] </td>
                                        <td> $row[Preu] </td>
                                        <td> $row[fkcifProveidor] </td>
                                        <td> <img src=\"img/productes/$row[imagen] \" width=\"80\"> </td> 
                                        <td> 
                                        <button class=\"llista\" onclick=\"window.location.href='list_pro-al.php?idProducte=$row[idProducte] '\"> Consultar al·lergògen </button> |
                                        <button class=\"llista\" onclick=\"window.location.href='delete_api_producte.php?idProducte=$row[idProducte] '\"> Elimina </button> |
                                        <button class=\"llista\" onclick=\"window.location.href='insert_producte.php?idProducte=$row[idProducte] '\"> Editar </button>
                                        </td>
                                    </tr>"
            ?>
        </tbody>
    </table>
</body>
<?php require "includes/footer.php"; ?>

</html>