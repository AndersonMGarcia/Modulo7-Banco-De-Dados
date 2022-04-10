<?php
   require 'config.php';
   require 'dao/UsuarioDAOMySQL.php';

   $usuarioDao = new UsuarioDaoMysql($pdo);

   $lista = $usuarioDao->findAll();
    
?>

<!------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro de Usuários</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <a href="adicionar.php" class="botao">Adicionar</a> <br><br>

        <table  width="100%" cellpadding="5px" cellspacing="0">

            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>AÇÕES</th>
            </tr>

            <?php foreach($lista as $usuario): ?>

                <tr class="tabletr">
                    <td><?= $usuario->getId(); ?></td>
                    <td><?= $usuario->getNome(); ?></td>
                    <td><?= $usuario->getEmail(); ?></td>

                    <td>
                        <a href="editar.php?id=<?= $usuario->getId(); ?>" class="botao">Editar</a>
                        <a href="excluir.php?id=<?= $usuario->getId(); ?>" class="botao">Excluir</a>
                    </td>
                    
                </tr>
            <?php endforeach; ?>


        </table>


    </div>    
</body>
</html>