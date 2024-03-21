# EXPLICAÇÃO:
## bootstrap-3.3.7-dist (O que é?):
### CONCEITO:
"Bootstrap 3.3.7" é uma versão específica da estrutura de front-end Bootstrap, que é um framework de código aberto amplamente utilizado para o desenvolvimento de sites e aplicativos da web responsivos e móveis. 

O "dist" no nome refere-se à pasta de distribuição (distribution) da biblioteca Bootstrap, que contém os arquivos prontos para uso em um projeto web. Esses arquivos normalmente incluem CSS pré-compilado (geralmente em formato minificado para melhor desempenho), JavaScript e, em alguns casos, também fontes e imagens necessárias para o framework.

Assim, "bootstrap-3.3.7-dist" indica a distribuição da versão 3.3.7 do Bootstrap, pronta para ser integrada em um projeto web para fornecer estilos e funcionalidades consistentes e responsivas.

* [CLIQUE AQUI PARA FAZER O CURSO DE BOOTSTRAP](https://github.com/VILHALVA/CURSO-DE-BOOTSTRAP)

### BAIXANDO:
Você pode baixar o Bootstrap 3.3.7 diretamente do site oficial do Bootstrap ou de repositórios de código-fonte aberto, como o GitHub. Aqui está um passo a passo básico para baixar o Bootstrap 3.3.7:

1. **Visite o site oficial do Bootstrap**: Vá para [https://getbootstrap.com/docs/3.3/](https://getbootstrap.com/docs/3.3/) e clique no botão "Download Bootstrap".

2. **Selecione as opções de download**: Você pode escolher baixar o Bootstrap 3.3.7 com ou sem arquivos de exemplos e documentação. Selecione as opções desejadas.

3. **Faça o download do arquivo ZIP**: Após selecionar suas opções, clique no botão de download para baixar o arquivo ZIP contendo os arquivos do Bootstrap 3.3.7.

4. **Extraia os arquivos**: Após o download, extraia o conteúdo do arquivo ZIP baixado para uma pasta em seu computador.

Agora você tem o Bootstrap 3.3.7 baixado e pronto para ser usado em seu projeto web. Dentro da pasta extraída, você encontrará os arquivos CSS, JavaScript e outras dependências necessárias para integrar o Bootstrap em seu site ou aplicativo da web.

## admin/funcionario/index.php:
1. ```php
   require_once "../../classes/Funcionario.class.php";
   require_once "../../classes/Funcoes.class.php";
   ```
   - Inclui os arquivos que contêm as definições das classes `Funcionario` e `Funcoes`.

2. ```php
   $objFunc = new Funcionario();
   $objFc = new Funcoes();
   ```
   - Cria instâncias das classes `Funcionario` e `Funcoes`.

3. ```php
   session_start();
   if($_SESSION["logado"] == "sim"){
       // Verifica se o usuário está logado
       // Se sim, chama o método funcionarioLogado da classe Funcionario
   }else{
       // Se não, redireciona para a página de login
   }
   ```
   - Verifica se o usuário está logado.
   - Se sim, chama o método `funcionarioLogado` da classe `Funcionario`.
   - Se não, redireciona para a página de login.

4. ```php
   if(isset($_GET['sair']) == "sim"){
       // Verifica se foi solicitado o logout
       // Se sim, chama o método sairFuncionario da classe Funcionario
   }
   ```
   - Verifica se foi solicitado o logout.
   - Se sim, chama o método `sairFuncionario` da classe `Funcionario`.

5. ```php
   if(isset($_POST['btCadastrar'])){
       // Verifica se o formulário de cadastro foi submetido
       // Se sim, chama o método queryInsert da classe Funcionario para inserir os dados no banco de dados
       // Redireciona para a página de listagem após o cadastro ser concluído
   }
   ```
   - Verifica se o formulário de cadastro foi submetido.
   - Se sim, chama o método `queryInsert` da classe `Funcionario` para inserir os dados no banco de dados.
   - Redireciona para a página de listagem após o cadastro ser concluído.

6. ```php
   if(isset($_POST['btAlterar'])){
       // Verifica se o formulário de edição foi submetido
       // Se sim, chama o método queryUpdate da classe Funcionario para atualizar os dados no banco de dados
       // Redireciona para a página de edição após a atualização ser concluída
   }
   ```
   - Verifica se o formulário de edição foi submetido.
   - Se sim, chama o método `queryUpdate` da classe `Funcionario` para atualizar os dados no banco de dados.
   - Redireciona para a página de edição após a atualização ser concluída.

7. ```php
   if(isset($_GET['acao'])){
       // Verifica se foi passada uma ação via parâmetro GET
       // Dependendo da ação, executa operações de edição ou exclusão
   }
   ```
   - Verifica se foi passada uma ação via parâmetro GET.
   - Dependendo da ação especificada, executa operações de edição ou exclusão de registros.

8. ```php
   <!DOCTYPE HTML>
   <html lang="pt-br">
   <head>
       <!-- Cabeçalho HTML -->
   </head>
   <body>
       <!-- Corpo HTML -->
   </body>
   </html>
   ```
   - Estrutura básica do HTML.

9. ```php
   <nav class="navbar navbar-inverse navbar-radius">
       <!-- Barra de navegação -->
   </nav>
   ```
   - Barra de navegação utilizando o framework Bootstrap.

10. ```php
    <div id="lista">
        <!-- Lista de funcionários -->
    </div>
    ```
    - Div para exibição da lista de funcionários.

11. ```php
    <div id="formulario">
        <!-- Formulário para cadastrar ou editar funcionários -->
    </div>
    ```
    - Div para exibição do formulário de cadastro ou edição de funcionários.

Este código faz parte de uma aplicação web que gerencia funcionários, permitindo cadastro, edição e exclusão dos mesmos. Ele utiliza sessões para controle de login e exibe uma barra de navegação com opção de logout. O formulário de cadastro/editar é exibido na mesma página que a lista de funcionários.

## admin/index.php:
1. ```php
   require_once '../classes/Funcionario.class.php';
   ```
   - Inclui o arquivo que contém a definição da classe `Funcionario`.

2. ```php
   $objFunc = new Funcionario();
   ```
   - Cria uma instância da classe `Funcionario`.

3. ```php
   session_start();
   if($_SESSION["logado"] == "sim"){
       // Verifica se o usuário está logado
       // Se sim, chama o método funcionarioLogado da classe Funcionario
   }else{
       // Se não, redireciona para a página de login
   }
   ```
   - Inicia a sessão e verifica se o usuário está logado.
   - Se sim, chama o método `funcionarioLogado` da classe `Funcionario`.
   - Se não, redireciona para a página de login.

4. ```php
   if(isset($_GET['sair']) == "sim"){
       // Verifica se foi solicitado o logout
       // Se sim, chama o método sairFuncionario da classe Funcionario
   }
   ```
   - Verifica se foi solicitado o logout.
   - Se sim, chama o método `sairFuncionario` da classe `Funcionario`.

5. ```php
   <!DOCTYPE HTML>
   <html lang="pt-br">
   <head>
       <!-- Cabeçalho HTML -->
   </head>
   <body>
       <!-- Corpo HTML -->
   </body>
   </html>
   ```
   - Estrutura básica do HTML.

6. ```php
   <nav class="navbar navbar-inverse navbar-radius">
       <!-- Barra de navegação -->
   </nav>
   ```
   - Barra de navegação utilizando o framework Bootstrap.

7. ```php
   <div class="container-fluid">
       <!-- Conteúdo do navbar -->
   </div>
   ```
   - Define um container fluido para o conteúdo da barra de navegação.

8. ```php
   <ul class="nav navbar-nav">
       <!-- Lista de itens do menu -->
   </ul>
   ```
   - Lista de itens do menu na barra de navegação.

9. ```php
   <ul class="nav navbar-nav navbar-right">
       <!-- Lista de itens do menu na direita -->
   </ul>
   ```
   - Lista de itens do menu na barra de navegação, alinhada à direita.

10. ```php
    <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?=$_SESSION['nome']?></a></li>
    ```
    - Exibe o nome do usuário logado, utilizando o valor armazenado na sessão.

11. ```php
    <li><a href="?sair=sim"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
    ```
    - Link para realizar o logout.

Este código constitui a página inicial do sistema, onde o usuário pode navegar entre as diferentes funcionalidades disponíveis, como gerenciamento de funcionários. A barra de navegação fornece acesso rápido às opções do sistema, e o nome do usuário logado é exibido na barra de navegação, juntamente com um link para sair.

