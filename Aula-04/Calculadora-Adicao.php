<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Adição</title>
</head>
<body>
    /9/868<a href="/Aula-04/">Voltar ao Menu</a>
    <h1>Calculadora de Adição</h1>
    <form action="" method="post">
        <label>Número 1:  </label>
        <input type="number" name="Numero1">
        <br>
        <label>Número 2:  </label>
        <input type="number" name="Numero2">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <hr>
    <h2>Resultado da adição:</h2>
    <?php
        var_dump($_POST);
        echo "<br>";

        if (isset($_POST['Numero1'])) {
            echo "Esta criado o Número1: ";
        }
        echo "<br>";
        echo $_POST['Numero1'];
        echo "<br>";
        if (isset($_POST['Numero2']))  {
            echo "Esta criado o Número2: ";
        }
        echo "<br>";
        echo $_POST['Numero2'];
        echo "<br>";
        echo "O resultado é: ";
        echo "<br>";
        echo $_POST['Numero1'] + $_POST['Numero2'];
    ?>
</body>
</html>