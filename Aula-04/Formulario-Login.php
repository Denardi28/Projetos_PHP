<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
</head>
<body>
    <a href="/Aula-04/">Voltar ao Menu</a>
    <h1>Formulário de Login</h1>
    <form action="" method="post">
        <label>Login: </label>
        <input type="Text" name="Login">
        <br>
        <label>Senha: </label>
        <input type="password" name="Senha">
        <br>
        <input type="submit" value="Login">
    </form>
    <hr>
    <?php

        var_dump($_SERVER);
        
        if( $_SERVER['REQUEST_METHOD'] == "POST" ) {
            $Login = $_POST['Login'];
            $Senha = $_POST['Senha'];

            echo "<h2> Verificação de Usuário </h2>";

            if($Login = "Denardi" && $Senha == "123"){
                echo "Usuário autenticado";
                header("Location: http://google.com");

            }else{
                echo "Login ou senha invalida. ";
            }
        }
    ?>
</body>
</html>