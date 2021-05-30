<!DOCTYPE html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2> Llista de tots els clients </h2>
            <form action = "list_client.php" method = "GET" >
       
            <div>
                <label>
                    Nom
                </label>
                <input type="text" maxlength="255" required minlength="2" name="Nom">
            </div>
            <div>    
            <div>    
                <label>
                    Pais   
                </label>   
                <input type="text" max="40" required min="20" name="Descompte">
            </div>
            <div>    
                <label>
                  CP    
                </label>   
                <input type="text" max="100" required min="0,99" name="Punts">
            </div>
            <div>
            <label>
                    Telefon   
                </label>   
                <input type="text" max="255" required min="20" name="Descompte">
            </div>
            <div>
            <label>
                    Provincia
                </label>   
                <input type="text" max="40" required min="20" name="Descompte">
            
            </div>
            <div>
            <label>
                    Poblacio
                </label>   
                <input type="text" max="40" required min="20" name="Descompte">
            
            </div>      
            <div>
            <label>
                    Adreça
                </label>   
                <input type="text" max="40" required min="20" name="Descompte">
            
            </div>

                    </tr>
                </thead>
                <tbody>
                    
                    
                </tbody>        
            </table>
        </body>
    </html> 

                        }
                    ?>
                </select>
            </div>
            <div>
                <label>
                    Resetear
                </label>
                <input type="reset">
            </div>
            <div>
                <button type="submit">
                    Enviar
                </button>
            </div>    
        </form>
    </body>
</html> 





