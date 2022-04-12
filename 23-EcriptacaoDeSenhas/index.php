<?php

    



    
   


    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encriptação de Senhas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $senha = '1234';
            $hash = password_hash($senha, PASSWORD_DEFAULT);

            echo "Senha Original: ".$senha."<br>";
            echo "HASH:  ".$hash;

            $senhaMd5 = '123456';
            $hashMd5 = md5($senhaMd5);
            echo "<hr>";
            echo "Senha Original Md5: ".$senhaMd5."<br>";
            echo "Senha encriptada com md5:  ".$hashMd5;
            
            echo "<hr>";

            if (md5($senhaMd5) === $hashMd5){
                echo "Senha válida!";
            }else{
                echo "Senha inválida!";
            }
        ?>
    </div>
</body>
</html>