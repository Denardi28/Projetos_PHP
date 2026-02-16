<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Calculadora.css">
    <title>Calculadora</title>
</head>
<body>
<a href="/Aula-04/">Voltar ao Menu</a>
    <div class = "Calculadora">
    <div class = "Quadrado"></div>
    <div class = "Quadrado02"></div>
    <div class = "Dentro">
    <h1>Calculadora ✖️➗➕➖</h1>
    <hr>
    <form action="" method="post">
        <label>Valor 1:  </label>
        <input type="number" name="Valor1">
        <br>
        <br>
        <label>Valor 2: </label>
        <input type="number" name="Valor2">
        <br>
        <br>
        <select name="Opcao">
            <option value="Soma">+</option>
            <option value="Subtração">-</option>
            <option value="Multiplicação">*</option>
            <option value="Divisão">/</option>
        </select>
            <input type="submit" value="Calcular" class = "button">
    </form>
    <h2>Resultado da Conta:</h2>
    <div class = "Traço">
        <hr>
    </div>
    <?php
        if  ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Operacao = $_POST['Opcao'];
        $Valor2 = $_POST['Valor2'];
        $Valor1 = $_POST['Valor1'];
        
        switch($Operacao){
            case "Soma":
                $Resultado = $Valor1 + $Valor2;
            break;
            case "Subtração":
                $Resultado = $Valor1 - $Valor2; 
            break;
            case "Multiplicação":
                $Resultado = $Valor1 * $Valor2; 
            break;
            case "Divisão":
                $Resultado = $Valor1 / $Valor2; 
            break;

        }
        echo "<strong> O resultado é: </strong>" . $Resultado;
        }
        
    ?>
    </div>
    </div>
</body>
</html>