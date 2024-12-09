<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include_once("Database.php");
        include_once("Pessoa_da.php");
        $lista_pessoa=getUsuarios();
        // array[0]{id:1, nome: "eduarda", email: "duda@gmail.com"}
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php
            for ($i = 0; $i < count($lista_pessoa); $i++){
                ?>
                <tr>
                    <td><?php echo $lista_pessoa[$i] ["id"] ?></td>
                    <td><?php echo $lista_pessoa[$i] ["nome"] ?></td>
                    <td><?php echo $lista_pessoa[$i] ["email"] ?></td>
                </tr>
                <?php
        }
        ?>
    </table>    
    
</body>
</html>