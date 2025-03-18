<?php
var_dump(
    $_POST
);

$userForm = $_POST['user'];
$senhaForm = $_POST['senha'];
$nomeForm = $_POST['nome'];
$ano_nascimentoForm = $_POST['ano_nascimento'];
$cpfForm = $_POST['cpf'];
$telefone_1Form = $_POST['telefone_1'];
$telefone_2Form = $_POST['telefone_2'];
$logradouroForm = $_POST['logradouro'];
$n_casaForm = $_POST['n_casa'];
$bairroForm = $_POST['bairro'];
$cidadeForm = $_POST['cidade'];

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$insert = 'INSERT INTO tb_usuario (user, senha) VALUE (:user, :senha)';
$box = $banco->prepare($insert);

$box->execute([
    ':user' => $userForm,
    ':senha' => $senhaForm
]);

$insert = 'INSERT INTO tb_pessoas (nome, ano_nascimento, cpf, telefone_1, telefone_2, logradouro, n_casa, bairro, cidade) VALUE (:nome, :ano_nascimento, :cpf, :telefone_1, :telefone_2, :logradouro, :n_casa, :bairro, :cidade)';

$id_pessoa = $banco ->lastInsertId();

$box = $banco->prepare($insert);

$box->execute([
    ':nome' => $nomeForm,
    ':ano_nascimento' => $ano_nascimentoForm,
    ':cpf' => $cpfForm,
    ':telefone_1' => $telefone_1Form,
    ':telefone_2' => $telefone_2Form,
    ':logradouro' => $logradouroForm,
    ':n_casa' => $n_casaForm,
    ':bairro' => $bairroForm,
    ':cidade' => $cidadeForm
]);