<?php
    require 'config.php';
    require 'dao/UsuarioDAOMySQL.php';

    $usuarioDao = new UsuarioDaoMysql($pdo);

    $lista = $usuarioDao->findAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando DAO na Prática 1/5</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <a href="adicionar.php">ADICIONAR USUÁRIO</a> <br><br>
        <table border="1" width="100%">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>AÇÕES</th>
            </tr>

            <?php foreach($lista as $usuario): ?>
                <tr>
                    <td><?php echo $usuario->getId(); ?></td>
                    <td><?php echo $usuario->getNome(); ?></td>
                    <td><?php echo $usuario->getEmail(); ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $usuario->getId(); ?>">[ Editar ]</a>
                        <a href="excluir.php?id=<?php echo $usuario->getId(); ?>">[ Excluir ]</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>    
</body>
</html>