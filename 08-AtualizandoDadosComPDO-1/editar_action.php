<?php
    require 'config.php';

    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $name = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if ($id && $name && $email){

        $sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
        $sql->bindValue('id', $id);
        $sql->bindValue(':nome', $name);
        $sql->bindValue(':email', $email);
        $sql->execute();

        header('Location: index.php');
    }else{
        header('Location: editar.php');
        exit;
    }
?>