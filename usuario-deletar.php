<?php

echo '<h1>deletar usuarios.php<h1>';

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$idFormulario = $_GET['id'];

$delete = 'DELETE FROM tb_usuario WHERE id_pessoa = :id_pessoa';
$box = $banco->prepare($delete);
$box->execute([
    ':id_pessoa' => $idFormulario
]);

$delete = 'DELETE FROM tb_pessoas WHERE id = :id';
$box = $banco->prepare($delete);
$box->execute([
    ':id' => $idFormulario
]);

echo '<script> 
    alert("Usuario apagado com sucesso!")
    window.location.replace("index.php")
</script>';