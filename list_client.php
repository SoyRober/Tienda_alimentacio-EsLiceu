<!DOCTYPE html>
<html lang="ca">
<?php require "includes/head.php"; ?>

<body>
    <?php require "includes/header.php"; ?>
    <h2> Llista de clients </h2>
    <form action="list_client.php" method="GET">
        <div>
            <select class="select" name="Client">
                <option value=""> Selecciona un país </option>
                <?php
                $query = "SELECT Pais FROM Client ORDER BY Pais;";
                $result = mysqli_query($bbdd, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value = \"$row[Pais]\"> $row[Pais] </option>";
                }
                ?>
            </select>
        </div>
        <div>
            <button class="filtrar" type="submit"> Filtrar
            </button>
        </div>
    </form>
    <a class="reinici_filtre" href=list_client.php> Reiniciar filtre </a>
    <table class="list">
        <thead>
            <tr>
                <th class="list"> DNI del client </th>
                <th class="list"> Pais </th>
                <th class="list"> Nom </th>
                <th class="list"> CP </th>
                <th class="list"> Telefon </th>
                <th class="list"> Provincia </th>
                <th class="list"> Adreca </th>
                <th class="list"> Email </th>
                <th class="list"> Opcions </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $where = "";
            if (isset($_GET['Client'])) {
                $where = " WHERE Pais = \"$_GET[Client]\" ";
            }
            $query = "SELECT * FROM Client
                       $where ORDER BY Pais;";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            while ($row = mysqli_fetch_assoc($result))
                echo    "<tr>
                            <td class=\"list\"> $row[dniClient] </td>
                            <td class=\"list\"> $row[Pais] </td>
                            <td class=\"list\"> $row[Nom] </td>
                            <td class=\"list\"> $row[CP] </td>
                            <td class=\"list\"> $row[Telefon] </td>
                            <td class=\"list\"> $row[Provincia] </td>
                            <td class=\"list\"> $row[Adreca] </td>
                            <td class=\"list\"> $row[Email] </td>
                            <td class=\"list\">
                            <button class=\"llista\" onclick=\"window.location.href='delete_api_client.php?dniClient=$row[dniClient] '\"> Elimina </button> |
                            <button class=\"llista\" onclick=\"window.location.href='insert_client.php?dniClient=$row[dniClient] '\"> Editar </button> 
                            </td>              
                        </tr>";
            ?>
        </tbody>
    </table>
</body>
<?php require "includes/footer.php"; ?>

</html>