<?php
    require 'config.php';

    $info = [];

    $id = filter_input(INPUT_GET, 'id');

    if ($id){
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if ($sql->rowCount() > 0){

            $info = $sql->fetch(PDO::FETCH_ASSOC);

        }else{
            header('Location: index.php');
            exit;
        }
    }else{
        header('Location: index.php');
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <h3>Editar Usuário</h3>
        <form action="editar_action.php" method="post">



            <input type="hidden" name="id" value="<?php echo $info['id'];?>">


            
            <label for="nome">Nome: <br>
                <input type="text" name="nome" id="nome" value="<?php echo $info['nome']; ?>">
            </label> <br>

            <label for="email">E-mail: <br>
                <input type="email" name="email" id="email" value="<?php echo $info['email']; ?>">
            </label> 
            
            <br><br>

            <input type="submit" value="Salvar">

        </form>
    </div>    
</body>
</html>
