<?php
require_once 'PessoaController.php';

$pessoaController = new PessoaController();
$id = $_GET['id'];

$pessoaController->excluirPessoa($id);
