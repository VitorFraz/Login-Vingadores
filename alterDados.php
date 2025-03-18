<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    main {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form {
        width: 350px;
    }

    .col{
        font-size: 19px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>

<?php

$id_usuario_alterar = $_GET['id_usuario_alterar'];


$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT tb_pessoa.*, tb_usuario.*, tb_usuario.id FROM tb_pessoa INNER JOIN tb_usuario ON tb_usuario.id = tb_pessoa.id WHERE tb_pessoa.id = ' . $id_usuario_alterar;

$dados = $banco->query($select)->fetch();

?>
<main class="container text-center my-5">
    <form action="./usuario_alterar.php" method="POST">
        <h1>Editar Usuarios</h1>

        <div class="row mt-2">
            <div class="col">
                <input type="name" placeholder="Nome" name="nome" value="<?= $dados['nome'] ?>" disabled>
            </div>
        </div>

        <input type="hidden" placeholder="Id" name="id" value="<?= $dados['id'] ?>">
        <div class="row mt-2">
            <div class="col">
                <input type="text" placeholder="Senha" name="senha" value="<?= $dados['senha'] ?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="name" placeholder="Data de Nascimento" name="ano_nascimento" value="<?= $dados['ano_nascimento'] ?>" disabled>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="tel" placeholder="Telefone 1" name="telefone_1" value="<?= $dados['telefone_1'] ?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="tel" placeholder="Telefone 2" name="telefone_2" value="<?= $dados['telefone_2'] ?>">
            </div>
        </div>
    
        <div class="row mt-2">
            <div class="col">
                <input type="text" placeholder="Logradouro" name="logradouro" value="<?= $dados['logradouro'] ?>">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="text" placeholder="Bairro" name="bairro" value="<?= $dados['bairro'] ?>" disabled>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="text" placeholder="Nº da casa" name="n_casa" value="<?= $dados['n_casa'] ?>" disabled>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="text" placeholder="Cidade" name="cidade" value="<?= $dados['cidade'] ?>" disabled>
            </div>
        </div>
        <input type="submit">
    </form>
</main>