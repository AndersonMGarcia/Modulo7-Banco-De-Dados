<?php

    //Redimensionar uma imagem usando a biblioteca GD

    $arquivo = 'minion.jpg';
    $maxWidth = 200;
    $maxHeight = 200;

    list($originalWidth, $originalHeight) = getimagesize($arquivo);// pegando o tamanho do arquivo(imagem)

    $ratio = $originalWidth / $originalHeight; //tamanho proporcional da imagem
    $ratioDest = $maxWidth / $maxHeight;

    $finalWidth = 0;
    $finalHeight = 0;
    
    if ($ratioDest > $ratio){

        $finalWidth = $maxHeight * $ratio;
        $finalHeight = $maxHeight;
    }else{
        $finalHeight = $maxWidth / $ratio;
        $finalWidth = $maxWidth;
    }

    


    $imagem = imagecreatetruecolor($finalWidth, $finalHeight);
    $originalImg = imagecreatefromjpeg($arquivo);

    imagecopyresampled(
        $imagem, 
        $originalImg, 
        0,0,0,0, 
        $finalWidth, 
        $finalHeight, 
        $originalWidth, 
        $originalHeight
        
    );

    header("Content-Type: image/jpeg");
    imagejpeg($imagem, null, 100);


    imagejpeg($imagem, 'paisagemredimensionada.jpg', 100);

    
   


    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de imagens com GD - Resize</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            echo $finalWidth. ' - '. $finalHeight;    
        ?>
    </div>
</body>
</html>