<?php

    $imagem = imagecreatetruecolor(300,300); //criando uma imagem de 300/300
    $cor = imagecolorallocate($imagem, 255, 120, 68);// gerando uma cor
    imagefill($imagem, 0, 0, $cor);// preenchendo a cor na imagem

    header("Content-Type: image/jpeg");//apresentando na tela a imagem
    imagejpeg($imagem, null, 100); //continuaçao para aprensentar na tela 
   
   
   //Gerando a imagem - cria o arquivo mas nao mostra na tela
    imagepng($imagem, 'nova_imagempng.png');// gerando imagem png
    imagejpeg($imagem, 'nova_imagem.jpg', 100);// gerando imagem jpg



    
   


    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de imagens com GD</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            
        ?>
    </div>
</body>
</html>