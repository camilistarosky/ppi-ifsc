<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100lvh;
        }
        fieldset{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Login</legend>
        <?php 
        // mostra o erro
             if (isset($_GET["erro"]) && $_GET["erro"]==2){  ?>

                <p> Erro 2: login ou senha errados </p>
        <?php         
              } else if (isset($_GET["erro"]) && $_GET["erro"]==2){  ?>

                <p> Erro 2: login ou senha errados </p>
        <?php         
            } 
        ?>

        <form action="autentificacao.php" method="post">
            <label for="login">Login</label>
        <input type="text" name="login" id="login">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">

        <input type="submit" value="Clique">
        </form>
        
    </fieldset>
</body>
</html>