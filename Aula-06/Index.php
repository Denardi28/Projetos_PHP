<?php

// ==========> Importa a conexão <==========
require_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Sistema de Usuários</title>
</head>
<body>
        <div class = "Consulta">
        <h1>Usuários Cadastrados</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Data de Criação:</th>
            </tr>

        <?php

            // ==========> Realiza a consulta <==========
            $sql = "SELECT * FROM usuarios";
            $resultado = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($resultado) > 0){

                // ==========> Percorrendo todos os dados da consulta <==========
                while($linha = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td>" . $linha["id"] . "</td>";
                    echo "<td>" . $linha["nome"] . "</td>";
                    echo "<td>" . $linha["email"] . "</td>";
                    echo "<td>" . $linha["senha"] . "</td>";
                    echo "<td>" . $linha["data_criacao"] . "</td>";
                    echo "</tr>";
                }


                /* ==========> Percorrendo apenas 1 linha por consulta <==========
                $linha = mysqli_fetch_assoc($resultado);
                var_dump($linha);
                echo $linha["nome"];
                */


            } else {
                echo "Dados não encontrados!!";
            }
        
        ?>
        </table>
    </div>
    <br>
    <br>

    <div class = "Cadastro">
        <h1>Cadastro de Usuários</h1>

        <form action="Cadastro.php" method="POST">
            <label>Nome: </label>
            <input type="text" name="nome"><br>
            <label>Email: </label>
            <input type="email" name="email"><br>
            <label>Senha: </label>
            <input type="password" name="senha"><br>
            <br>
            <button type="submit">Enviar</button>
        </form>

    </div>
</body>
</html>