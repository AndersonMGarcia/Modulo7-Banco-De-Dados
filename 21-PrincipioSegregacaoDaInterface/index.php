<?php
    #########################################################################
    ##############SOLID - Princípio da Segregação da Interface###############
    #########################################################################


    interface Aves{
        public function setLocation($lat, $lng);       
        public function render();
    }
    /*
    class Papagaio implements Aves{

        public function setLocation($lat, $lng){

        }
        public function setAltitude($alt){

        }
        public function render(){

        }    
    }


    class Pinguim implements Aves{

        public function setLocation($lat, $lng){
            
        }
        public function setAltitude($alt){
            
        }
        public function render(){
            
        }    
    }*/

    # No exemplo acima esta violando o Principio da Segregação de Interface, pois a Interface
    # deve ter apenas os métodos essenciais que serão utilizados pela classe. No caso da Classe
    # Pinguim o método setAltitude() não é necessário pois um pinguim não voa... 


    ########## UTILIZANDO O PRINICIPIO DA SEGREGAÇÃO DE INTERFACE #################
    ###############################################################################

    interface AvesQueVoam extends Aves{
        public function setAltitude($alt);
    }


    class Papagaio implements AvesQueVoam{

        public function setLocation($lat, $lng){

        }
        public function setAltitude($alt){

        }
        public function render(){

        }    
    }


    class Pinguim implements Aves{

        public function setLocation($lat, $lng){
            
        }       
        public function render(){
            
        }    
    }

    


    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLID - Princípio da Segregação da Interface</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            
        ?>
    </div>
</body>
</html>