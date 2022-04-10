<?php

    require 'config.php';
    require 'dao/UsuarioDAOMySQL.php';

    $usuarioDao = new UsuarioDaoMysql($pdo);
    
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if ($nome && $email){

        if ($usuarioDao->findByEmail($email) === false){

            $novoUsuario = new Usuario();
            
            $novoUsuario->setNome($nome);
            $novoUsuario->setEmail($email);

            $usuarioDao->add($novoUsuario);

            header("Location: index.php");
            exit;

        }else{
            header("Location: adicionar.php");
            exit;
        }
    }else{

        header("Location: adicionar.php");
        exit;
    }
    
    

