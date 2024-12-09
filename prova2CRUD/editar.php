<?php
require_once 'PessoaController.php';

$pessoaController = new PessoaController();
$pessoa = null;
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    $pessoa = $pessoaController->editarPessoa($id);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pessoaController->editarPessoa($id);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $id ? 'Editar' : 'Cadastrar' ?> Pessoa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2><?= $id ? 'Editar' : 'Cadastrar' ?> Pessoa</h2>
        <form action="editar.php<?= $id ? '?id=' . $id : '' ?>" method="POST">
            <input type="text" name="nome" placeholder="Nome" value="<?= $pessoa['nome'] ?? '' ?>" required>
            <input type="email" name="email" placeholder="Email" value="<?= $pessoa['email'] ?? '' ?>" required>
            <input type="text" name="telefone" placeholder="Telefone" value="<?= $pessoa['telefone'] ?? '' ?>" required>
            <button type="submit">Salvar</button>
        </form>
    </div>
</body>
</html>
