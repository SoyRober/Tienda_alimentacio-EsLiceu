<!DOCTYPE html>
<html lang="ca">
<?php require "includes/head.php"; ?>

<body>
    <?php require "includes/header.php"; ?>

    <h2> Llista de vendes</h2>
    <form action="list_venta.php" method="GET">
        <select class="select" name="Client">
            <option value=""> Selecciona un client </option>
            <?php

            $query = "SELECT dniClient FROM Client ORDER BY dniClient";
            $result = mysqli_query($bbdd, $query);
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<option value=\"$row[dniClient]\">$row[dniClient]</option>";
            }
            ?>
        </select>
        <button class="filtrar" type="submit"> Filtrar
        </button>
    </form>
    <a class="reinici_filtre" href=list_venta.php> Reiniciar filtre </a>
    <table class="list">
        <thead>
            <tr>
                <th class="list"> idVenta </th>
                <th class="list"> Quantitat </th>
                <th class="list"> DNI del client </th>
                <th class="list"> Nom de la targeta </th>
                <th class="list"> Opcions </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $where = "";
            if (isset($_GET['Client'])) {
                $where = " WHERE dniClient = \"$_GET[Client]\" ";
            }

            $query = "SELECT *, cl.dniClient, tr.idTargeta, tr.Nom AS nom_targeta FROM Venta AS vt
                    INNER JOIN Client AS cl  ON (vt.fkdniClient = cl.dniClient)
                    INNER JOIN Targeta AS tr  ON (vt.fkidTargeta = tr.idTargeta) 
                    $where ORDER BY idVenta;";

            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            while ($row = mysqli_fetch_assoc($result))
                echo
                "<tr>            
                        <td class=\"list\"> $row[idVenta] </td>
                        <td class=\"list\"> $row[Quantitat] </td>
                        <td class=\"list\"> $row[fkdniClient] </td>
                        <td class=\"list\"> $row[nom_targeta]</td>
                        <td class=\"list\">
                        <button class=\"llista\" onclick=\"window.location.href='delete_api_venta.php?idVenta=$row[idVenta] '\"> Elimina </button> |
                        <button class=\"llista\" onclick=\"window.location.href='insert_venta.php?idVenta=$row[idVenta] '\"> Editar </button> 
                        </td>
                    </tr>";
            ?>
        </tbody>
    </table>
</body>

</html>