<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
</html>
<?php

    $site = filter_input(INPUT_POST, 'site', FILTER_VALIDATE_URL);

    if ($site) {
            echo "<script>alert('Site Válido: $site')</script>";
            echo " <a href=' $site'>Acessar Site</a>";
        } else{
            echo "<script>alert('URL inválida, verifique o formato.')</script>";
        }

?>