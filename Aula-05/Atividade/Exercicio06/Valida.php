<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
</html>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];
    $desconto = $_POST['desconto'];

    if(filter_input(INPUT_POST,'produto',FILTER_SANITIZE_STRING)){
        echo "produto: $produto <br>";
    }
   
    if(filter_input(INPUT_POST,'desconto',FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION)){
        echo "desconto: $desconto % <br>";
    }
   
    if(filter_input(INPUT_POST,'preco',FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION)){
        $preco= $preco - ($preco*($desconto / 100));
   
        echo "preço: R$$preco <br>";
    }

}
?>
