<?php
   
   require 'config.php';
   require 'dao/UsuarioDAOMySQL.php';

   $usuarioDao = new UsuarioDaoMysql($pdo);

   $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
   $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
   $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

   if ($id && $nome && $email){

        if ($usuarioDao->findByEmail($email) === false){

            $usuario = $usuarioDao->findById($id);
            $usuario->setNome($nome);
            $usuario->setEmail($email);

            $usuarioDao->update($usuario);

            header("Location: index.php");
            exit;

        }else{

            header("Location: editar.php?id=".$id);
            exit;
        }
       

            

    }else{
        header("Location: editar.php?id=".$id);
        exit;
   }
?>