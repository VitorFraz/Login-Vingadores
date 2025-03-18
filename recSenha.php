<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="PT-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Recuperar senha</title>
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

    a {
        font-size: 15px;
        color: grey;
        margin-left: 5px;
    }

</style>

<body>
    <form action="alterSenha.php" method="POST" class="mt-5">
        <h1>Recuperar Senha</h1>
        <br>
        <input type="text" class="form-control" name="user" placeholder="Usuário">
        <br>
        <input type="text" class="form-control" name="cpf" placeholder="CPF">
        <br>
        <button class="btn btn-success" type="submit">Alterar Senha</button>
        <a class="btn btn-danger" href="./index.php">Cancelar</a>
    </form>
</body>

</html>