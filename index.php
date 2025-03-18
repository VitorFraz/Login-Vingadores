<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="PT-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
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

    <form action="auxLogin.php" method="POST" class="mt-5">
        <h1>Tela de Login</h1>
        <br>
        <input type="text" class="form-control" name="user" placeholder="Usuário">
        <br>
        <input type="password" class="form-control" name="password" placeholder="Senha">
        <a href="./recSenha.php">Esqueceu a senha? Clique aqui</a>
        <br>
        <br>
            <button class="btn btn-dark" type="submit">Entrar</button>
            <a href="./cadastrar.php" class="btn btn-primary">Cadastrar</a>
    </form>
</body>

</html>