<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: login.html");
    exit;
}

require_once 'PessoaController.php';

$pessoaController = new PessoaController();
$pessoas = $pessoaController->listarPessoas();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Listagem de Cadastros</h2>
        <a href="logout.php">Sair</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($pessoas as $pessoa): ?>
            <tr>
                <td><?= $pessoa['id'] ?></td>
                <td><?= $pessoa['nome'] ?></td>
                <td><?= $pessoa['email'] ?></td>
                <td><?= $pessoa['telefone'] ?></td>
                <td>
                    <a id="editar" href="editar.php?id=<?= $pessoa['id'] ?>">Editar</a>
                    <a id="excluir" href="excluir.php?id=<?= $pessoa['id'] ?>">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a id="cadastrar" href="editar.php">Cadastrar nova pessoa</a>
    </div>
</body>
</html>
