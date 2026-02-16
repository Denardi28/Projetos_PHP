<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"])){

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            
            require_once("conexao.php");

            $sql = "INSERT INTO usuarios(nome, email, senha)
                    VALUES('$nome', '$email', '$senha')";
            $resultado = mysqli_query($conexao, $sql);

            if($resultado){
                echo "<h1> A inserção deu certo. </h1>";
                header("location: Index.php");
            } else {
                echo "<h1> Ocorreu um problema na inserção. </h1>";
                echo mysqli_error($conexao);
            }
        }



    } else{
        header("location:Index.php");
    }
    

?>