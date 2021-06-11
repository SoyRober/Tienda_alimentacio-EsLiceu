<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
            <?php require "includes/header.php";?>
            <h2> Llista de tots els proveidors </h2>
            <form action = "list_proveidor.php" method = "GET" >
                <select class="select" name="Pais">
                    <option value=""> Selecciona un país </option>
                    <?php
                        $query = "SELECT  DISTINCT Pais FROM Proveidor ORDER BY Pais;";
                        $result = mysqli_query($bbdd, $query);
                            while ($row = mysqli_fetch_assoc ($result)) {
                                echo "<option value = \"$row[Pais]\"> $row[Pais] </option>";
                            }
                    ?>
                </select>
                <button class="filtrar" type = "submit"> Filtrar </button>
            </form>
            <a class="reinici_filtre" href=list_proveidor.php> Reiniciar filtre </a>
            <table class="list">
                <thead>
                    <tr>
                        <th class="list"> Nom </th>
                        <th class="list"> Adreca </th>
                        <th class="list"> CP </th>
                        <th class="list"> País </th>
                        <th class="list"> cifProveidor </th>
                        <th class="list"> Telèfon </th>
                        <th class="list"> Opcions </th>
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
                                        <td class=\"list\"> $row[Nom] </td>
                                        <td  class=\"list\"> $row[Adreca] </td>
                                        <td  class=\"list\"> $row[CP] </td>
                                        <td  class=\"list\"> $row[Pais] </td>
                                        <td  class=\"list\"> $row[cifProveidor] </td>
                                        <td  class=\"list\"> $row[Telefon] </td>
                                        <td  class=\"list\"> 
                                        <button class=\"llista\" onclick=\"window.location.href='delete_api_proveidor.php?cifProveidor=$row[cifProveidor] '\" class=\"llista\"> Elimina </button> |
                                        <button class=\"llista\" onclick=\"window.location.href='insert_proveidor.php?cifProveidor=$row[cifProveidor] '\"> Editar </button>
                                        </td> 
                                    </tr>";
                    }
                    ?>
                </tbody>        
            </table>
        </body>
        <?php require "includes/footer.php";?>
    </html> 






