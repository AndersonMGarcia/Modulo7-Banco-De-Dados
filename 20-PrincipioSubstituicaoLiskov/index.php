<?php
    #########################################################################
    ###############SOLID - Princípio da Substituição de Liskov###############
    #########################################################################
    class A {
        public function getNome(){
            return "Meu nome é A";
        }
    }


    class B extends A {
        public function getNome(){
            return "Meu nome é B";
        }
    }

    function imprimeNome(A $obj){
        return $obj->getNome();
    }

    


    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLID - Princípio da Substituição de Liskov</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            $objeto1 = new A();
            $objeto2 = new B();
        
            echo imprimeNome($objeto1)."<br>";
            echo imprimeNome($objeto2)."<br>";
        ?>
    </div>
</body>
</html>