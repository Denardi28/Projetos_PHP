<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Calculadora-Acs.css">
    <title>Calculadora de Acrescimo e Desconto</title>
</head>
<body>
    <a href="/Aula-04/">Voltar ao Menu</a>
    <div class = "Calculadora">
    <div class = "Quadrado"></div>
    <div class = "Quadrado02"></div>
    <div class = "Dentro">
    <div class = "Titulo01">
        <h1>Calculadora de Acrescimo</h1>
    </div>
    <div class = "Titulo02">
        <h1> e Desconto ⬆ ⬇</h1>
    </div>
    <form action="" method="post">
        <div class = "Valor">
            <label>Valor:  </label>
            <input type="number" name="Valor">
        </div>
        <br>
        <div class = "Porcentagem">
            <label>Porcentagem %:  </label>
            <input type="number" name="Porcentagem">
        </div>
        <br>
        <br>
        <div class = "botao">
        <select name="Opcao">
            <option value="Acrescimo">Acrescimo</option>
            <option value="Desconto">Desconto</option>
        </select>
        <input type="submit" value="Calcular" class = "button">
        </div>
    </form>
    <hr>
    <h2>Resultado da Conta:</h2>
    <br>
    <br>
    <div class = "Traço">
        <hr>
    </div>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Operacao = $_POST['Opcao'];
        $Porcentagem = $_POST['Porcentagem'];
        $Valor = $_POST['Valor'];
        
        switch($Operacao){
            case "Acrescimo":
                $Resultado = ($Valor*($Porcentagem/100)) + $Valor;
            break;
            case "Desconto":
                $Resultado = $Valor - ($Valor*($Porcentagem/100)); 
            break;
        }
        echo "O resultado é: R$" . $Resultado;
    }
    ?>
    </div>
    </div>
</body>
</html>