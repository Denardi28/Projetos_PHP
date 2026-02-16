<?php  
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
    
        if(filter_var($nome,FILTER_SANITIZE_STRING)){
            echo "Nome ok!";
        }

        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "Email ok!";
        }

        if(filter_var($idade,FILTER_VALIDATE_INT)){
            echo "Idade ok!";
        }

    }
?>
