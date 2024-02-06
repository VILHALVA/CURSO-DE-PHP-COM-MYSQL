<?php
    $servidor = "localhost";
    $username = "root";
    $usersenha = "";
    $database = "registro";

    $conexao = new mysqli($servidor, $username, $usersenha, $database);

    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO clientes(email, senha) VALUES ('$email', '$senha')";

    if ($conexao->query($sql) == TRUE) {
        echo "USUARIO CADASTRADO COM SUCESSO!";
    }
    else {
        echo "ERRO AO CADASTRAR!";
    }

?>