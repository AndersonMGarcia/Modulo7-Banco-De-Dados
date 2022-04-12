<?php
    /*
    class ContratoClt{

        public function calcularSalario(){}
    }

    class Estagio{

        public function bolsaAuxilio(){}
    }

    class ContratoPj{

        public function calcularPagamento(){
                
        }
    }

    class FolhaDePagamento{

        public function calcular($funcionario){

            $salario = 0;

            if ($funcionario instanceof ContratoClt){
                
                $salario = $funcionario->calcularSalario();

            }elseif($funcionario instanceof Estagio){

                $salario = $funcionario->bolsaAuxilio();
                
            }elseif($funcionario instanceof ContratoPj){

                $salario = $funcionario->calcularPagamento();
                
            }

            return $salario;
        }

        ##### NÃO ATENDE AO PRINCÍPIO DO ABERTO E FECHADO #####
    }*/


    #############################################################################
    # Princípio do Aberto e Fechado - Objetos devem estar abertos para extensão e 
    # fechados para modificação.
    #############################################################################

    interface Remuneravel{
        public function remuneracao();
    }



    class ContratoClt implements Remuneravel{

        public function remuneracao(){}

        
    }

    class Estagio  implements Remuneravel{

        public function remuneracao(){}
    }

    class ContratoPj implements Remuneravel{

        public function remuneracao(){}
                
        
    }

    class FolhaDePagamento{

        public function calcular(Remuneravel $funcionario){
            $salario = $funcionario->remuneracao();

            return $salario;
        }
    }


    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Princípio da Responsabilidade Única</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
            
    </div>
</body>
</html>