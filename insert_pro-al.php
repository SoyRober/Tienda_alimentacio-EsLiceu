<!DOCTYPE html>
<html lang="ca">
<?php require "includes/head.php"; ?>

<body>
    <?php require "includes/header.php"; ?>
    <div>
        <h2> Inserta un nou producte amb al·lèrgia </h2>
    </div>
    <form action="insert_api_pro-al.php" method="post">
        <table>
            <tr>
                <td>
                    <label>
                        Producte
                    </label>
                    <select class="select" name="fkidProducte">
                        <option value=""> Selecciona un producte </option>
                        <?php
                        $query = "SELECT idProducte, Nom FROM Producte;";
                        $result = mysqli_query($bbdd, $query) or die("Alguna cosa no va correctament");
                        while ($Producte = mysqli_fetch_assoc($result)) {
                            $selected = ($Producte['idProducte'] == $fkidProducte) ? 'selected' : '';
                            echo "<option $selected value = \"$Producte[idProducte]\">$Producte[Nom]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Allergogen
                    </label>
                    <select class="select" name="fkidAllergogen">
                        <option value=""> Selecciona una al·lèrgia </option>
                        <?php
                        $query = "SELECT idAllergogen, Nom FROM Allergogen;";
                        $result = mysqli_query($bbdd, $query) or die("Alguna cosa no va correctament");
                        while ($Allergogen = mysqli_fetch_assoc($result)) {
                            $selected = ($Allergogen['idAllergogen'] == $fkidAllergogen) ? 'selected' : '';
                            echo "<option $selected value = \"$Allergogen[idAllergogen]\">$Allergogen[Nom]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="right">
                    <input class="inserts" type="reset">
                    <button class="inserts" class="enviar" type="submit">
                        Enviar
                    </button>
                </td>
            </tr>
        </table>
    </form>
</body>
<?php require "includes/footer.php"; ?>

</html>