<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectando Banco de Dados com PDO</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $pdo = new PDO("mysql:dbname=teste;host=localhost", "root", "");

            $sql = $pdo->query('SELECT * FROM usuarios');

            $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            echo '<pre>';

            echo "Total de registros: ". $sql->rowCount(). "<br><br>";
            print_r($dados);
        ?>
    </div>    
</body>
</html>