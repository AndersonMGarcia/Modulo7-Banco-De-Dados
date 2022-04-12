<?php
    /*
    class Usuario{

        public function setNome($nome){}
        public function getNome(){}

        public function add(){}
        public function update(){}
        public function delete(){}

        ##### Não está no PRINCIPIO DE RESPONSABILIDADE ÚNICA ######
    } */


    # Usando o Princípio de Responsabilidade Única
    # Cada classe lida apenas com suas responsabilidades
    class Usuario{
        public function setNome($nome){}
        public function getNome(){}
    }

    class UsuarioDb{
        public function add(Usuario $u){}
        public function update(Usuario $u){}
        public function delete($id){}    
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