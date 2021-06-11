<!DOCTYPE html>
<html lang="ca">
<?php require "includes/head.php"; ?>

<?php
$idProducte = 0;
$idAl = 0;
if (isset($_GET['Allergogen']) && (intval($_GET['Allergogen']) > 0)) {
    $idAl = intval($_GET['Allergogen']);
}
if (isset($_GET['Producte']) && (intval($_GET['Producte']) > 0)) {
    $idProducte = intval($_GET['Producte']);
}

?>

<body>
    <?php require "includes/header.php"; ?>
    <h2> Llista de tots els productes amb al·lèrgies </h2>
    <form action="list_pro-al.php" method="GET">
        <select class="select" name="Producte">
            <option value="">Selecciona un producte</option>
            <?php

            $query = "SELECT Nom, idProducte FROM Producte ORDER BY Nom;";
            $result = mysqli_query($bbdd, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $selected = ($idProducte == $row['idProducte']) ? 'selected' : '';
                echo "<option $selected value=\"$row[idProducte]\"> $row[Nom] </option>";
            }
            ?>
        </select>
        <div>
            <select class="select" name="Allergogen">
                <option value="">Selecciona una al·lèrgia</option>
                <?php
                $query = "SELECT Nom, idAllergogen FROM Allergogen ORDER BY Nom;";
                $result = mysqli_query($bbdd, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    $selected = ($idAl == $row['idAllergogen']) ? 'selected' : '';
                    echo "<option $selected value=\"$row[idAllergogen]\"> $row[Nom] </option>";
                }
                ?>
            </select>
        </div>
        <div>
            <button class="filtrar" type="submit"> Filtrar </button>
        </div>
        <div>
            <a class="reinici_filtre" href=list_producte.php> Reiniciar filtres </a>
        </div>
    </form>
    <table class="list">
        <thead>
            <tr>
                <th class="list"> Producte </th>
                <th class="list"> Al·lergògen </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $where = "";
            if ($idAl) {
                $where = " WHERE idAllergogen = \"$_GET[Allergogen]\" ";
            }
            if ($idProducte) {
                $where .= ($where == '') ?  " WHERE " : " AND ";
                $where .= " pa.fkidProducte = \"$_GET[Producte]\"";
            }
            $query = "SELECT pa.*, pr.Nom, al.Nom AS Nom_allergogen 
            FROM Pro_Al AS pa 
            INNER JOIN producte AS pr ON (pa.fkidProducte = pr.idProducte) 
            INNER JOIN Allergogen AS al ON (pa.fkidAllergogen = al.idAllergogen) $where ;";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                                <td class=\"list\"> $row[Nom] </td>
                                <td class=\"list\"> $row[Nom_allergogen] </td>
                            </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
<?php require "includes/footer.php"; ?>

</html>