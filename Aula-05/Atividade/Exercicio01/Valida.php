<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
</html>

<?php

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if (!$nome) {
        echo "Nome inválido.<br>";
    } else {
        echo "Nome válido.<br>";
    }

    if (!$email) {
        echo "Email inválido.<br>";
    } else {
        echo "Email válido.<br>";
    }

    if ($nome && $email) {
        echo "<script>alert('Seja Bem Vindo $nome' )</script>";
    } 

?>