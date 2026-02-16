<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
</html>


<?php

    $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

    if ($idade > 18) {
            echo "<script>alert('Idade Válida')</script>";
        } elseif ($idade < 18) {
            echo "<script>alert('Apenas maiores de idade podem prosseguir.')</script>";
        }

?>