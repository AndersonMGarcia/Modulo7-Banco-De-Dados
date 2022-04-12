<?php

    interface DBConnection{

        public function connect();
    }

    class MySQLConnection implements DBConnection{
        public function connect(){

        }
    }

    class OracleConnection implements DBConnection{
        public function connect(){

        }
    }

    class UsuarioDAO{

        private $db;

        public function __construct(DBConnection $dbCon)
        {
            $this->db = $dbCon;
        }
    }


    //$dbCon = new MySQLConnection();
    $dbCon = new OracleConnection();

    $usuarioDao = new UsuarioDAO($dbCon);
    $usuarioDao2 = new UsuarioDAO($dbCon);
    


    

    


    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLID - Princípio da Inversão da Depedência</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            
        ?>
    </div>
</body>
</html>