<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
        <?php require "includes/header.php";?>
            <form action = "list_pro-al.php" method = "GET" >
                <select class="select" name="Producte">
                    <option value="">  </option>
                        <?php
                            $query = "SELECT Nom, idProducte FROM Producte ORDER BY Nom;";
                            $result = mysqli_query ($bbdd, $query);
                                while ($row = mysqli_fetch_assoc ($result)) {
                                    echo "<option value = \"$row[idProducte]\"> $row[Nom] </option>";
                                }
                        ?>
                </select>
                <label>
                    Filtrar
                </label>
                <button class="reinici_filtre" type="submit">        
                <select class="select" name="Allergogen">
                    <option value="">  </option>
                        <?php
                            $query = "SELECT Nom, idAllergogen FROM Allergogen ORDER BY Nom;";
                            $result = mysqli_query ($bbdd, $query);
                                while ($row = mysqli_fetch_assoc ($result)) {
                                    echo "<option value = \"$row[idAllergogen]\"> $row[Nom] </option>";
                                }
                        ?>
                </select>
                <label>
                    Filtrar
                </label>
                <button class="reinici_filtre" type="submit">            
            </form>
            <table>
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Nom </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT pa.*, pr.Nom, al.Nom AS Nom_allergogen FROM Pro_Al AS pa INNER JOIN producte AS pr ON (pa.fkidProducte = pr.idProducte) 
                              INNER JOIN Allergogen AS al ON (pa.fkidAllergogen = al.idAllergogen) ;";
                    $result = mysqli_query ($bbdd, $query) or die(mysqli_error($bbdd));
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<tr>
                                <td> $row[Nom] </td>
                                <td> $row[Nom_allergogen] </td>
                            </tr>";
                    }
                    ?>
                </tbody>        
            </table>
        </body>
        <?php require "includes/footer.php";?>
    </html> 






