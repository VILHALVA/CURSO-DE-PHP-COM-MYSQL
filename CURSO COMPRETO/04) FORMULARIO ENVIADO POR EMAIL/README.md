# EXPLICAÇÃO:
## classe/PHPMailer-master (O que é?):
## CONCEITO:
PHPMailer é uma biblioteca em PHP amplamente utilizada para enviar e-mails de forma programática a partir de scripts PHP. Ela fornece uma interface simplificada para enviar e-mails através de servidores SMTP, além de suportar anexos, texto formatado e outros recursos comuns em mensagens de e-mail.

A versão "PHPMailer-master" refere-se à versão mais recente ou à versão de desenvolvimento (também conhecida como "branch master") da biblioteca PHPMailer. O "branch master" geralmente contém o código mais recente, incluindo correções de bugs e novos recursos que ainda não foram lançados em uma versão estável. É comum que os desenvolvedores usem o branch master para testar novas funcionalidades ou contribuir com melhorias para a biblioteca antes de serem lançadas oficialmente.

### BAIXANDO:
Você pode baixar a biblioteca PHPMailer diretamente do repositório oficial no GitHub. Aqui está um guia passo a passo para baixar e instalar a biblioteca PHPMailer:

1. Acesse a página do repositório PHPMailer no GitHub: [PHPMailer no GitHub](https://github.com/PHPMailer/PHPMailer).

2. No repositório, clique no botão verde "Code" e selecione a opção "Download ZIP". Isso fará o download de um arquivo ZIP contendo a biblioteca PHPMailer.

3. Após o download, extraia o conteúdo do arquivo ZIP para o diretório onde você deseja armazenar a biblioteca em seu projeto PHP.

4. Agora, você pode incluir a classe PHPMailer em seus scripts PHP usando a declaração `require_once`. Por exemplo:

```php
<?php
// Inclua a classe PHPMailer
require_once '/caminho/para/PHPMailer/src/PHPMailer.php';

// Use a classe PHPMailer
use PHPMailer\PHPMailer\PHPMailer;

// Seu código PHP para enviar e-mails com PHPMailer
?>
```

Certifique-se de substituir `'/caminho/para/PHPMailer/src/PHPMailer.php'` pelo caminho real onde você extraiu a biblioteca PHPMailer.

## classe/Funcoes.class.php:
1. ```php
   require_once 'PHPMailer-master/PHPMailerAutoload.php';
   ```
   - Inclui o arquivo de autoload da biblioteca PHPMailer.

2. ```php
   class Funcoes{
   ```
   - Declaração da classe `Funcoes`.

3. ```php
   private $objmail;
   ```
   - Declaração do atributo `$objmail`, que será uma instância da classe PHPMailer.

4. ```php
   public function __construct(){
       $this->objmail = new PHPMailer();		
   }
   ```
   - Método construtor da classe `Funcoes`.
   - Inicializa o atributo `$objmail` com uma nova instância da classe PHPMailer.

5. ```php
   public function tratarCaracter($vlr, $tipo){
       // Método responsável por tratar os caracteres dos dados
   }
   ```
   - Método responsável por tratar os caracteres dos dados.
   - Aceita dois parâmetros: `$vlr`, o valor a ser tratado, e `$tipo`, o tipo de tratamento a ser aplicado.
   - No caso, temos dois tipos de tratamento: um para decodificar caracteres UTF-8 (`$tipo = 1`) e outro para codificar entidades HTML (`$tipo = 2`).

6. ```php
   public function enviarEmail($dados){
       // Método responsável por enviar o e-mail
   }
   ```
   - Método responsável por enviar o e-mail.
   - Aceita um parâmetro `$dados`, que é um array contendo os dados do e-mail a ser enviado.
   - Configura o PHPMailer para enviar e-mails usando SMTP.
   - Define o host, porta, nome de usuário, senha e segurança da conexão SMTP.
   - Configura o remetente e o destinatário do e-mail.
   - Define o assunto do e-mail e o corpo do e-mail com os dados fornecidos no parâmetro `$dados`.
   - Envia o e-mail usando o método `Send()` do PHPMailer e retorna uma mensagem indicando se o envio foi bem-sucedido ou se ocorreu algum erro.

Esse código encapsula funcionalidades de envio de e-mail em uma classe chamada `Funcoes`. Ele usa a biblioteca PHPMailer para realizar o envio de e-mails de forma eficiente e confiável.

## index.php:
1. ```php
   require_once 'classe/Funcoes.class.php';
   ```
   - Inclui o arquivo que contém a classe `Funcoes` para lidar com a funcionalidade de enviar e-mails.

2. ```php
   $objFc = new Funcoes();
   ```
   - Instancia um objeto da classe `Funcoes`.

3. ```php
   if(isset($_POST['btEnviar'])){
	   $objFc->enviarEmail($_POST);
   }
   ```
   - Verifica se o botão "Enviar" foi pressionado no formulário.
   - Se sim, chama o método `enviarEmail()` da classe `Funcoes`, passando os dados do formulário como argumento.

4. ```html
   <form action="" method="post">
   ```
   - Abre o formulário HTML.
   - O atributo `action` está vazio, o que significa que o formulário será enviado para a mesma página.
   - O método usado para enviar os dados é o método `POST`.

5. ```html
   <input type="text" name="nome" required="required"><br>
   <input type="email" name="email" required="required" pattern="^[a-z0-9._-]{2,}@[a-z0-9-]{2,}.[a-z.]{2,}$"><br>
   <input type="text" name="assunto" required="required"><br>
   <textarea name="mensagem" required="required"></textarea>
   ```
   - Campos do formulário para inserir o nome, e-mail, assunto e mensagem.
   - O atributo `required="required"` indica que os campos são obrigatórios.
   - No campo de e-mail, há também um padrão especificado usando a expressão regular para garantir que o formato do e-mail seja válido.

6. ```html
   <input type="submit" name="btEnviar" value="Enviar">    
   ```
   - Botão de envio do formulário com o nome `btEnviar`.

Este código HTML cria um formulário de contato simples que captura informações como nome, e-mail, assunto e mensagem. Quando o usuário pressiona o botão "Enviar", os dados do formulário são enviados para a mesma página, onde o PHP é usado para processar o envio do e-mail usando a classe `Funcoes`.

