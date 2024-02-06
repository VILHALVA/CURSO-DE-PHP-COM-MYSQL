# FORMULARIO BASICO
Este é um exemplo simples de um formulário de usuário em PHP que coleta email e a senha do usuário, e salva esses dados em um banco de dados MySQL.

## Instruções
1. Crie o banco de dados MySQL e a tabela utilizando os seguintes comandos SQL:
```sql
CREATE DATABASE registro;

USE usuario;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    senha VARCHAR(255) NOT NULL
);
```

2. Clone ou faça o download deste repositório para o diretório raiz do seu servidor web (por exemplo, XAMPP/htdocs).

3. Configure as credenciais de acesso ao banco de dados no arquivo `salvar_usuario.php`:

```php
$servername = "localhost";
$username = "root";
$usersenha = "";
$database = "registro"; // Nome do banco de dados criado
```

4. Acesse o formulário de usuário no navegador visitando `http://localhost/caminho_para_o_projeto/FORMULARIO.html`.

5. Preencha o formulário com email e senha, e clique em "Cadastrar".

## EXPLICAÇÃO DO FORMULARIO.PHP
```php
<?php
    // Definindo as credenciais de acesso ao banco de dados
    $servidor = "localhost"; // Endereço do servidor do banco de dados
    $username = "root"; // Nome de usuário do banco de dados
    $usersenha = ""; // Senha do banco de dados
    $database = "registro"; // Nome do banco de dados

    // Criando uma nova conexão mysqli utilizando as credenciais definidas acima
    $conexao = new mysqli($servidor, $username, $usersenha, $database);

    // Obtendo o email enviado através do formulário
    $email = $_POST['email'];

    // Criptografando a senha obtida do formulário usando password_hash
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Definindo a query SQL para inserir os dados na tabela "clientes"
    $sql = "INSERT INTO clientes(email, senha) VALUES ('$email', '$senha')";

    // Verificando se a query foi executada com sucesso
    if ($conexao->query($sql) == TRUE) {
        echo "USUÁRIO CADASTRADO COM SUCESSO!";
    } else {
        echo "ERRO AO CADASTRAR!";
    }
?>
```

### Aqui está uma explicação linha por linha:
- **Linha 3-6:** Aqui, você está definindo as credenciais de acesso ao banco de dados. Você especifica o endereço do servidor (`$servidor`), o nome de usuário (`$username`), a senha (`$usersenha`) e o nome do banco de dados (`$database`).

- **Linha 9:** Você está criando uma nova instância da classe `mysqli` para estabelecer a conexão com o banco de dados. Você está usando as credenciais definidas nas linhas anteriores.

- **Linha 12:** Você está obtendo o valor do campo de email enviado através do formulário HTML usando `$_POST['email']`.

- **Linha 15:** Você está criptografando a senha obtida do formulário usando a função `password_hash()`. Isso é importante para armazenar senhas de forma segura.

- **Linha 18:** Aqui você está definindo a query SQL para inserir os valores do email e senha na tabela `clientes`.

- **Linha 21-25:** Você está verificando se a execução da query foi bem-sucedida. Se sim, você exibe uma mensagem de sucesso, caso contrário, você exibe uma mensagem de erro.

Este código realiza a tarefa de inserir o email e a senha criptografada na tabela `clientes` do banco de dados. Certifique-se de que as credenciais do banco de dados e outras partes do código estão corretas e de que você está tratando os dados com segurança.

## Erros e Soluções
- **Erro:** Access denied for user 'nome'@'localhost'.
  - **Solução:** Verifique as credenciais de acesso ao banco de dados no arquivo `LOGIN.php`. Verifique também as permissões e a existência do usuário no MySQL.

- **Erro:** Falha na conexão com o banco de dados.
  - **Solução:** Certifique-se de que as credenciais de acesso ao banco de dados estejam corretas. Verifique se o nome do banco de dados está especificado corretamente na criação da conexão.

- **Erro:** Nome do host inválido.
  - **Solução:** Verifique se o host especificado no código (geralmente "localhost") corresponde à configuração do seu ambiente. 

- **Erro:** Outros erros durante a inserção de dados.
  - **Solução:** Verifique a sintaxe do SQL na query de inserção. Certifique-se de que os campos e valores correspondam corretamente à estrutura da tabela.

Lembre-se de que este é um exemplo básico e não inclui todas as medidas de segurança e validação de dados necessárias para um ambiente de produção. Certifique-se de implementar as práticas recomendadas para proteger seu aplicativo e seus dados.
```

Este `README.md` fornece um guia claro sobre como usar o código, configurar as credenciais, lidar com erros comuns e observar as soluções que você discutiu anteriormente. Certifique-se de ajustar as instruções e os detalhes conforme necessário para o seu ambiente específico.