<?php
$servidor = "localhost";
$username = "root";
$usersenha = "";
$database = "registro";

// Criar conexão com o banco de dados
$conexao = new mysqli($servidor, $username, $usersenha, $database);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['cadastrar'])) {
        // Cadastro de novo usuário
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO clientes (email, senha) VALUES ('$email', '$senha')";

        if ($conexao->query($sql) === TRUE) {
            echo "USUÁRIO CADASTRADO COM SUCESSO!";
        } else {
            echo "ERRO AO CADASTRAR: " . $conexao->error;
        }
    } elseif (isset($_POST['login'])) {
        // Login do usuário
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT senha FROM clientes WHERE email = '$email'";
        $result = $conexao->query($sql);

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if (password_verify($senha, $row['senha'])) {
                echo "LOGIN BEM-SUCEDIDO!";
            } else {
                echo "SENHA INCORRETA.";
            }
        } else {
            echo "EMAIL NÃO ENCONTRADO.";
        }
    }
}

$conexao->close();
?>
