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
    <h3>Adicionar Usuário</h3>
        <form action="adicionar_action.php" method="post">
            
            <label for="nome">Nome: <br>
                <input type="text" name="nome" id="nome">
            </label> <br>

            <label for="email">E-mail: <br>
                <input type="email" name="email" id="email">
            </label> 
            
            <br><br>

            <input type="submit" value="Adicionar">

        </form>
    </div>    
</body>
</html>
