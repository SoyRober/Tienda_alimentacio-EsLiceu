<!DOCTYPE html>
    <html lang="ca">
    <?php require "includes/head.php";?>
        <body>
        <?php require "includes/header.php";?>
            <h2>
                <?php
                $query = "SELECT * FROM producte WHERE idProducte = \"$_GET[idProducte]\";  ";
                $result = mysqli_query($bbdd, $query);
                $product = mysqli_fetch_assoc($result);
                echo " Llista de al·lergògens del producte:  $product[Nom]";
                ?>
            </h2>
            <form action = "list_pro-al.php" method = "GET" >
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
                    $query = "SELECT Al.* FROM Allergogen as Al inner join pro_al as pro on (Al.idAllergogen = pro.fkidAllergongen) 
                    WHERE pro.fkidProducte = \"$_GET[idProducte]\"; ";
                    $result = mysqli_query ($bbdd, $query) or die(mysqli_error($bbdd));
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<tr>
                                    <td> $row[idAllergogen] </td>
                                    <td> $row[Nom] </td>
                                </tr>";
                    }
                    ?>
                </tbody>        
            </table>
        </body>
    </html> 






