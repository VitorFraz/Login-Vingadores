<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="PT-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastrar</title>
</head>

<style>
    h1 {
        text-align: center;
    }

    body {
        display: flex;
        justify-content: center;
    }

    form {
        width: 240px;
    }
</style>

<body>

    <form action="./confirmCadastro.php" method="POST">
        <h1>Cadastro</h1>
        <input type="text" class="form-control" name="nome" placeholder="Nome">
        <br>
        <input type="date" class="form-control" name="ano_nascimento" placeholder="Data de Nascimento">
        <br>
        <input type="varchar" class="form-control" name="cpf" placeholder="CPF">
        <br>
        <input type="tel" class="form-control" name="telefone_1" placeholder="Num de Telefone">
        <br>
        <input type="tel" class="form-control" name="telefone_2" placeholder="2º Num de Telefone">
        <br>
        <input type="text" class="form-control" name="logradouro" placeholder="Logradouro">
        <br>
        <input type="text" class="form-control" name="n_casa" placeholder="Num da Casa">
        <br>
        <input type="text" class="form-control" name="bairro" placeholder="Bairro">
        <br>
        <input type="text" class="form-control" name="cidade" placeholder="Cidade">
        <br>
        <input type="text" class="form-control" name="userForm" placeholder="Usuário">
        <br>
        <input type="password" class="form-control" name="passwordForm" placeholder="Senha">
        <br>
        </div>

        <button class="btn btn-success" type="submit">Cadastrar</button>
        <a class="btn btn-danger" href="./index.php">Cancelar</a>
    </form>
</body>

</html>