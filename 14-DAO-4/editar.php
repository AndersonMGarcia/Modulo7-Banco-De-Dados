<?php
    require 'config.php';
    require 'dao/UsuarioDAOMySQL.php';

    $usuarioDao = new UsuarioDaoMysql($pdo);

    $usuario = false;

    $id = filter_input(INPUT_GET, 'id');//pegando o id do usuario a ser editado

    if ($id){

        $usuario = $usuarioDao->findById($id);// pesquisando o id para jogar os dados nos inputs
    }

    if ($usuario  === false){ // caso nao exista retornar para o index
        
        header("Location: index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <h1>Editar Usuário</h1>

        <form action="editar_action.php" method="post">

            <input type="hidden" name="id" value="<?= $usuario->getId(); ?>">

            <label for="nome">Nome: </label><br>
            <input type="text" name="nome" id="nome" value="<?= $usuario->getNome(); ?>"><br><br>

            <label for="email">E-mail: </label><br>
            <input type="email" name="email" id="email" value="<?= $usuario->getEmail(); ?>"><br><br>

            <input type="submit" value="Salvar">
        </form>

    </div>    
</body>
</html>