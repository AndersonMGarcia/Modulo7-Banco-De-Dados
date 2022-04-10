<?php
    require 'config.php';
    require 'dao/UsuarioDAOMySQL.php';

    $usuarioDao = new UsuarioDaoMysql($pdo);

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    
    if ($id){

        $usuario = $usuarioDao->findById($id);
    }
        
    if ($usuario === false){
        header("Location: index.php");
        exit;
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro de Usuários</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <h3>Editar Usuário</h3>

        <form action="editar_action.php" method="post">

            <input type="hidden" name="id" value="<?= $usuario->getId(); ?>">

            <label for="nome">Nome: </label> <br>
            <input type="text" name="nome" id="nome" value="<?= $usuario->getNome(); ?>"> <br><br>

            <label for="email">E-mail: </label> <br>
            <input type="email" name="email" id="email" value="<?= $usuario->getEmail(); ?>"> <br><br>

            <input type="submit" value="Salvar" class="botao">
        </form>
    </div>
</body>
</html>