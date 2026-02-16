<?php
     if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
    
    if (!filter_input(INPUT_POST,$nome,FILTER_SANITIZE_STRING)) {
    echo "Nome inválido.<br>";
    } else{
        echo "Nome Válido<br>";
    }
    
    if (!filter_input(INPUT_POST,$email,FILTER_VALIDATE_EMAIL)) {
    echo "Email inválido.<br>";
    } else{
        echo "Email Válido<br>";
    }

    if (!filter_input(INPUT_POST,$idade,FILTER_VALIDATE_INT)) {
    echo "Idade inválida.<br>";
    } 
    else{
        echo "Idade Válido<br>";
    }

    if ($nome && $email && $idade) {
        echo "<script>alert('Todos os dados estão válidos!')</script>";
    } else{
        echo "<script>alert('Todos os dados estão inválidos!')</script>";
    }
}
?>
