<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
        <?php require "includes/header.php";?>
            <h2> Listar proveidor </h2>
            <h6> Carabirubi, carabiruba </h6>
            <p> Parrafito guapito del bonico </p>
            <form action = "list_proveidor.php" method = "GET" >
                <select name="Proveidor">
                    <?php
                        $query = "SELECT Nom, cifProveidor FROM Proveidor ORDER BY Nom;";
                        $result = mysqli_query($bbdd, $query);
                            while ($row = mysqli_fetch_assoc ($result)) {
                                echo "<option value = \"$row[cifProveidor]\"> $row[cifProveidor] </option>";
                            }
                    ?>
                </select>
                <button type = "submit"> Filtrar </button>
            </form>
            <table>
                <tbody>
                    <?php 
                    $where = "";
                    if (isset($_GET['Proveidor'])) {
                        $where = " WHERE cifProveidor = \"$_GET[Proveidor]\" ";
                    }
                    $query = "SELECT * FROM Proveidor $where ORDER BY Nom;";
                    $result = mysqli_query ($bbdd, $query) or die(mysqli_error($bbdd));
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo    "<tr>
                                    <td> $row[Poblacio] </td>
                                    <td> $row[Nom] </td>
                                    <td> $row[Adreca] </td>
                                    <td> $row[CP] </td>
                                    <td> $row[Pais] </td>
                                    <td> $row[cifProveidor] </td>
                                    <td> $row[Telefon] </td>
                                </tr>";
                    }
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 






