<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
</html>

<?php
$host = "localhost";
$usuario = "root";
$password = "usbw";
$banco = "usuarios_db";

//Conectar ao Banco de Dados
$conexao = mysqli_connect($host, $usuario, $password, $banco);


if (!$conexao){
    die("Erro de conexão: " . mysqli_connect());
}

//Definindo o tipo de caracteres da comunicação
mysqli_set_charset($conexao, "utf8");