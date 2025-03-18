<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 

<?php

$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT * FROM tb_pessoa';

$resultado = $banco->query($select)->fetchAll();

?>
<main class="container my-5">
    <table class="table table-light table-striped">
        <tr>
            <td class="text-center"> ID </td> 
            <td class="text-center"> Nome </td> 
            <td class="text-center"> Ações </td>
        </tr>
        <?php foreach ($resultado as $linha) { ?>
            <tr>
                <td class="text-center"> <?= $linha['id'] ?> </td>
                <td class="text-center"> <?php echo $linha['nome'] ?> </td>
                <td class="text-center">
                    <a href="abrirFicha.php?id_usuario=<?= $linha['id'] ?>" class="btn btn-primary">Abrir</a>
                    <a href="./alterDados.php?id_usuario_alterar=<?= $linha['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="./usuario-deletar.php?id=<?= $linha['id'] ?>" class="btn btn-danger">Excluir</a>
                </td> 
            </tr> 
        <?php } ?> 
    </table> 
</main> 