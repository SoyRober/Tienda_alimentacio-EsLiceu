<!DOCTYPE html>
<html lang="ca">
<?php require "includes/head.php"; ?>

<body>
    <?php require "includes/header.php"; ?>
    <h2> Llistar els productes i vendes</h2>
    <form action="list_producte-venta.php" method="GET">
        <select class="select" name="Producte">
            <option value="">Selecciona un producte</option>
            <?php

            $query = "SELECT Nom, idProducte FROM Producte ORDER BY Nom;";
            $result = mysqli_query($bbdd, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value=\"$row[idProducte]\"> $row[Nom] </option>";
            }
            ?>
        </select>
        <div>
            <button class="filtrar" type="submit"> Filtrar </button>
        </div>
        <div>
            <a class="reinici_filtre" href=list_producte-venta.php> Reiniciar filtres </a>
        </div>
    </form>
    <table class="list">
        <thead>
            <tr>
                <th class="list"> Venta </th>
                <th class="list"> Productes </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $where = "";
            if (isset($_GET["Producte"])) {
                $where = "WHERE idProducte = \" $_GET[Producte]\" ";
            }
            $query = "SELECT pv.*, ve.idVenta,ve.Nom AS nom_venta, pr.idProducte, pr.Nom AS nom_producte  
                    FROM Pro_Ven AS pv
                    INNER JOIN Producte AS pr ON (pv.fkidProducte = pr.idProducte)
                    INNER JOIN Venta AS ve ON (pv.fkidVenta = ve.idVenta) $where ORDER BY fkidVenta; ";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            while ($row = mysqli_fetch_assoc($result))
                echo    "<tr>
                            <td class=\"list\"> $row[nom_venta] </td>
                            <td class=\"list\"> $row[nom_producte] </td>
                        </tr>";
            ?>
        </tbody>
    </table>
</body>
<?php require "includes/footer.php"; ?>

</html>