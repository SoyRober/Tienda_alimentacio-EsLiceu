<!DOCTYPE html>
<html lang="ca">
<?php require "includes/head.php"; ?>

<body>
    <?php require "includes/header.php"; ?>
    <form action="list_targeta.php" method="GET">
    <h2> Llista de totes les targetes </h2>
    </form>
    <table class="list">
        <thead>
            <tr>
                <th class="list"> idTargeta </th>
                <th class="list"> Punts </th>
                <th class="list">Descompte</th>
                <th class="list"> Nom </th>
                <th class="list"> Opcions </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM Targeta  ORDER BY idTargeta;";
            $result = mysqli_query($bbdd, $query);
            while ($row = mysqli_fetch_assoc($result))
                echo    "<tr>
                            <td class=\"list\"> $row[idTargeta] </td>
                            <td class=\"list\"> $row[Punts] </td>
                            <td class=\"list\"> $row[Descompte] </td>
                            <td class=\"list\"> $row[Nom] </td>
                            <td class=\"list\"> 
                                <button class=\"llista\" onclick=\"window.location.href='delete_api_targeta.php?idTargeta=$row[idTargeta] '\"> Elimina </button> |
                                <button class=\"llista\" onclick=\"window.location.href='insert_targeta.php?idTargeta=$row[idTargeta] '\"> Editar </button> 
                            </td>                          
                        </tr>";
            ?>
        </tbody>
    </table>
</body>
<?php require "includes/footer.php"; ?>

</html>