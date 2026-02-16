<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    // Validação do nome
    if (empty($nome)) {
    echo "O campo nome é obrigatório.";
    } elseif (strlen($nome) < 3) {
    echo "O nome deve ter pelo menos 3 caracteres.";
    }
    // Validação do e-mail
    if (empty($email)) {
    echo "O campo email é obrigatório.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Formato de email inválido.";
    }
    // Validação da idade
    if (empty($idade)) {
    echo "O campo idade é obrigatório.";
    } elseif (!is_numeric($idade)) {
    echo "A idade deve ser um número.";
    } elseif ($idade < 18) {
    echo "Você deve ter pelo menos 18 anos.";
    }

    }
?>