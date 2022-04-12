<?php
    $hash = '$2y$10$2fjInot30zbwKa6zvDawbuF4377AQBqjTk1QQeXPilh4OxujgUCla' ;
    $senha = '1234';

    if (password_verify($senha, $hash)){
        echo "Senha Correta!";
    }else{
        echo "Senha Errada!";
    }
?>