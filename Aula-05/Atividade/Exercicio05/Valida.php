<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
</html>
<?php

    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    if(!empty($usuario)) {
            echo "<h4>Usuário Criado</h4>";
        } else {
            echo "<h4>Usuário está vazio ou não foi criado</h4>";
        }

    if (strlen($usuario) < 5){
        echo "O Usuário tem que ter pelo menos 5 caracteres";
    }

    if (!empty($senha)) {
         echo "<h4>Senha Criada</h4>";
    } else {
         echo "<h4>Senha está vazia ou não foi criada</h4>";
    }   

    if (strlen($senha) < 8){
        echo "A senha tem que ter pelo menos 8 caracteres";
    }

    if (!isset($_POST['$senha']) && (strlen($usuario) < 5) && (!isset($_POST['$senha'])) && (strlen($senha) < 8)){
        echo "<script>alert('Login Recusado!!!')</script>";
    } else {
        echo "<script>alert('Login Aceito!!!')</script>";   
    }
    