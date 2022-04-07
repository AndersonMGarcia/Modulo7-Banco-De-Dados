<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceito CRUD</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <h3>CRUD</h3>

        <ul>
            <li>C = Create</li>
            <li>R = Read</li>
            <li>U = Update</li>
            <li>D = Delete</li>

            <hr>
        </ul>
        <?php
            require 'config.php';

            $lista = [];

            $sql = $pdo->query("SELECT * FROM usuarios");
            
            if ($sql->rowCount() > 0){

                $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
            }

            
            
        ?>
            <a href="adicionar.php">Adicionar Usuário</a><br><br>

            <table border="1" width="100%">
                <tr>
                    <th>ID</th>                
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th>AÇÕES</th>               
                </tr>

                <?php foreach($lista as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario['id']; ?></td>
                        <td><?php echo $usuario['nome']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $usuario['id']; ?>">[ EDITAR ]</a>
                            <a href="excluir.php?id=<?php echo $usuario['id']; ?>">[ EXCLUIR ]</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                
            </table>
    </div>    
</body>
</html>