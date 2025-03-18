<?php

$id_usuario = $_GET['id_usuario'];

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT tb_pessoa.*, tb_usuario.usuario FROM tb_pessoa INNER JOIN tb_usuario ON tb_usuario.id = tb_pessoa.id WHERE tb_pessoa.id = ' . $id_usuario;

$dados = $banco->query($select)->fetch();

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    main {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form {
        width:250px;
    }
</style>

<main class="container text-center my-5">
    <form action="#">
        <div class="row mt-2">
            <div class="col">
                <label for="nome">Nome</label>
                <input type="text" value="<?= $dados['nome'] ?>" disabled class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="ano_nascimento">Data de Nascimento</label>
                <input type="datetime" value="<?php echo $dados['ano_nascimento'] ?>" disabled class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="cpf">CPF</label>
                <input type="text" value="<?php echo $dados['cpf'] ?>" disabled class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="telefone_1">Telefone 1</label>
                <input type="tel" value="<?php echo $dados['telefone_1'] ?>" disabled class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="telefone_2">Telefone 2</label>
                <input type="tel" value="<?php echo $dados['telefone_2'] ?>" disabled class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="logradouro">Logradouro</label>
                <input type="text" value="<?php echo $dados['logradouro'] ?>" disabled class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="n_casa">Numero da Casa</label>
                <input type="text" value="<?php echo $dados['n_casa'] ?>" disabled class="form-control">
            </div>    
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="bairro">Bairro</label>
                <input type="text" value="<?php echo $dados['bairro'] ?>" disabled class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="cidade">Cidade</label>
                <input type="text" value="<?php echo $dados['cidade'] ?>" disabled class="form-control">
            </div>
        </div>
    </form>
</main>