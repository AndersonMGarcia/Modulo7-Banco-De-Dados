<?php

    //Redimensionar uma imagem usando a biblioteca GD

    $arquivo = 'minion.jpg';
    $width = 300;
    $height = 300;

    list($originalWidth, $originalHeight) = getimagesize($arquivo);// pegando o tamanho do arquivo(imagem)

    $ratio = $originalWidth / $originalHeight; //tamanho proporcional da imagem
    $ratioDest = $width / $height;

    $finalWidth = 0;
    $finalHeight = 0;
    
    if ($ratioDest > $ratio){

        $finalWidth = $height * $ratio;
        $finalHeight = $height;
    }else{
        $finalHeight = $width / $ratio;
        $finalWidth = $width;
    }






    if ($finalWidth < $width){
        $finalWidth = $width;
        $finalHeight = $width / $ratio;

        $finalY = -(($finalHeight - $height) / 2);

    }else{
        $finalHeight = $height;
        $finalWidth = $height * $ratio;     

        $finalX = -(($finalHeight - $width) / 2);
    }

    


    $imagem = imagecreatetruecolor($width, $height);
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