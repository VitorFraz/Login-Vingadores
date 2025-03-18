<?php
echo '<h1>Usuario Editar</h1>';

echo '<pre>';

var_dump($_POST);

$editarId = $_POST['id'];
$senhaForm = $_POST['senha'];
$telefone_1Form = $_POST['telefone_1'];
$telefone_2Form = $_POST['telefone_2'];
$logradouroForm = $_POST['logradouro'];

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$update = 'UPDATE tb_usuario set senha = :senha where id = :id';

$banco->prepare($update)->execute([
    ':id' => $editarId,
    ':senha' => $senhaForm,
]);

$update = 'UPDATE tb_pessoa set telefone_1 = :telefone_1, telefone_2 = :telefone_2, logradouro = :logradouro where id = :id';

$banco->prepare($update)->execute([
    ':telefone_1' => $telefone_1Form,
    ':telefone_2' => $telefone_2Form,
    ':logradouro' => $logradouroForm,
]);
