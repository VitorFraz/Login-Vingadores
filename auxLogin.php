<?php

echo '<h1>AuxLogin.php</h1>';


$userForm = $_POST['user'];
$passwordForm = $_POST['password'];


$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = NEW PDO($dsn, $user, $password);

$consultarUsuarioSenha = 'SELECT * FROM tb_usuario WHERE usuario = "' . $userForm . '" AND senha = "'. $passwordForm . '"';

$resultado = $banco->query($consultarUsuarioSenha)->fetch();

$status = $resultado['status'];

$_
?>



<?php if ($status == 'admin') { ?>

    

<h1>Bem Vindo USUARIO ADMIN</h1>

<?php } ?>

<h1>Bem Vindo USUARIO COMUM</h1>






















<?php
die;
if (!empty($resultado) && $resultado != false) {
    header('location:loginSucesso.php');
} else {
    header('location:index.php');
}