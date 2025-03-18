<?php
var_dump(
    $_POST
);



$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$senhaForm = $_POST['senha'];

$insert = 'INSERT INTO tb_usuario (senha) VALUE (:senha)';
$box = $banco->prepare($insert);

$box->execute([
    ':senha' => $senhaForm
]);