# EXPLICAÇÃO:
## classes/Conexao.class.php:
1. ```php
   class Conexao{
   ```
   - Define uma classe chamada `Conexao`.

2. ```php
   private $usuario;
   private $senha;
   private $banco;
   private $servidor;
   private static $pdo;
   ```
   - Declaração das propriedades da classe:
     - `$usuario`, `$senha`, `$banco` e `$servidor` são utilizados para armazenar as informações de conexão com o banco de dados.
     - `$pdo` é uma propriedade estática que armazenará a instância da conexão PDO.

3. ```php
   public function __construct(){
       $this->servidor = "localhost";
       $this->banco = "pegasus";
       $this->usuario = "root";
       $this->senha = "";
   }  
   ```
   - O método `__construct` é um construtor da classe que é executado automaticamente quando um objeto da classe é criado. Neste caso, define os valores padrão para as propriedades `$servidor`, `$banco`, `$usuario` e `$senha`.

4. ```php
   public function conectar(){
       try{
           if(is_null(self::$pdo)){
               self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
           }
           return self::$pdo;
       } catch (PDOException $ex) {
           echo $ex->getMessage();
       }
   }  
   ```
   - O método `conectar` é responsável por estabelecer a conexão com o banco de dados. Ele utiliza a classe `PDO` do PHP para isso.
   - Ele verifica se já existe uma conexão estabelecida (`self::$pdo`). Se não existir, cria uma nova instância de `PDO` e armazena em `self::$pdo`.
   - Retorna a instância da conexão `PDO`.
   - Se ocorrer algum erro durante a conexão, ele captura a exceção do tipo `PDOException` e exibe a mensagem de erro.

Este código encapsula a lógica de conexão com o banco de dados em uma classe PHP, o que facilita a reutilização e manutenção do código. Ao instanciar um objeto da classe `Conexao` e chamar o método `conectar`, você obterá uma conexão PDO válida com o banco de dados MySQL especificado.

## classes/Funcionario.class.php:
1. ```php
   include_once "Conexao.class.php";
   include_once "Funcoes.class.php";
   ```
   - Essas linhas incluem os arquivos `Conexao.class.php` e `Funcoes.class.php`, que contêm as definições das classes `Conexao` e `Funcoes`, respectivamente. Provavelmente, essas classes são necessárias para realizar a conexão com o banco de dados e para executar algumas funções utilitárias.

2. ```php
   class Funcionario {
   ```
   - Define uma classe chamada `Funcionario`.

3. ```php
   private $con;
   private $objfc;
   private $idFuncionario;
   private $nome;
   private $email;
   private $senha;
   private $dataCadastro; 
   ```
   - Declaração das propriedades da classe:
     - `$con`: Armazena uma instância da classe `Conexao`.
     - `$objfc`: Armazena uma instância da classe `Funcoes`.
     - `$idFuncionario`, `$nome`, `$email`, `$senha`, `$dataCadastro`: Armazenam informações sobre o funcionário.

4. ```php
   public function __construct(){
       $this->con = new Conexao();
       $this->objfc = new Funcoes();
   } 
   ```
   - O método `__construct` é um construtor da classe que é executado automaticamente quando um objeto da classe é criado. Ele instancia as classes `Conexao` e `Funcoes` e armazena as instâncias nas propriedades correspondentes.

5. ```php
   public function __set($atributo, $valor){
       $this->$atributo = $valor;
   }
   ```
   - O método `__set` é chamado quando uma propriedade não existente é atribuída a um valor. Ele define dinamicamente a propriedade com o nome especificado e atribui o valor a ela.

6. ```php
   public function __get($atributo){
       return $this->$atributo;
   } 
   ```
   - O método `__get` é chamado quando uma tentativa é feita para acessar uma propriedade que não está acessível. Ele retorna o valor da propriedade especificada.

7. ```php
   public function querySeleciona($dado){
       try{
           $this->idFuncionario = $this->objfc->base64($dado, 2);
           $cst = $this->con->conectar()->prepare("SELECT idFuncionario, nome, email, data_cadastro FROM `funcionario` WHERE `idFuncionario` = :idFunc;");
           $cst->bindParam(":idFunc", $this->idFuncionario, PDO::PARAM_INT);
           $cst->execute();
           return $cst->fetch();
       } catch (PDOException $ex) {
           return 'error '.$ex->getMessage();
       }
   }  
   ```
   - O método `querySeleciona` é responsável por selecionar um funcionário do banco de dados com base no ID fornecido. Ele executa uma consulta preparada para evitar injeção de SQL.

8. ```php
   public function querySelect(){
       try{
           $cst = $this->con->conectar()->prepare("SELECT `idFuncionario`, `nome`, `email`, `data_cadastro` FROM `funcionario`;");
           $cst->execute();
           return $cst->fetchAll();
       } catch (PDOException $ex) {
           return 'erro '.$ex->getMessage();
       }
   } 
   ```
   - O método `querySelect` é responsável por selecionar todos os funcionários do banco de dados.

9. ```php
   public function queryInsert($dados){
       try{
           // Processa e prepara os dados a serem inseridos
           // Executa a inserção no banco de dados
       } catch (PDOException $ex) {
           return 'error '.$ex->getMessage();
       }
   }  
   ```
   - O método `queryInsert` é responsável por inserir um novo funcionário no banco de dados.

10. ```php
    public function queryUpdate($dados){
        try{
            // Processa e prepara os dados a serem atualizados
            // Executa a atualização no banco de dados
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    } 
    ```
    - O método `queryUpdate` é responsável por atualizar os dados de um funcionário no banco de dados.

11. ```php
    public function queryDelete($dado){
        try{
            // Processa e prepara os dados a serem deletados
            // Executa a exclusão no banco de dados
        } catch (PDOException $ex) {
            return 'error'.$ex->getMessage();
        }
    }   
    ```
    - O método `queryDelete` é responsável por excluir um funcionário do banco de dados.

12. ```php
    }
    ```
    - Fecha a definição da classe `Funcionario`.

Este código encapsula a lógica para manipulação de dados de funcionários em um banco de dados MySQL usando a classe `PDO` do PHP para realizar as operações de CRUD (Create, Read, Update, Delete).

## classes/Funcoes.class.php:
1. ```php
   class Funcoes {
   ```
   - Define a classe `Funcoes`.

2. ```php
   public function tratarCaracter($vlr, $tipo){
   ```
   - Define o método `tratarCaracter`, que recebe um valor (`$vlr`) e um tipo de tratamento (`$tipo`).
   - Dependendo do tipo especificado, o método executa uma operação diferente:
     - Tipo 1: Converte o valor para UTF-8.
     - Tipo 2: Converte o valor para UTF-8.
     - Tipo 3: Converte caracteres especiais em entidades HTML.

3. ```php
   public function dataAtual($tipo){
   ```
   - Define o método `dataAtual`, que recebe um tipo de formato de data (`$tipo`).
   - Dependendo do tipo especificado, o método retorna a data atual em um formato diferente:
     - Tipo 1: Retorna a data no formato "Y-m-d" (ano-mês-dia).
     - Tipo 2: Retorna a data e hora no formato "Y-m-d H:i:s" (ano-mês-dia hora:minuto:segundo).
     - Tipo 3: Retorna a data no formato "d/m/Y" (dia/mês/ano).

4. ```php
   public function base64($vlr, $tipo){
   ```
   - Define o método `base64`, que recebe um valor (`$vlr`) e um tipo de operação (`$tipo`) a ser realizada.
   - Dependendo do tipo especificado, o método executa uma operação diferente:
     - Tipo 1: Codifica o valor para base64.
     - Tipo 2: Decodifica o valor de base64.

Este código encapsula funcionalidades comuns de manipulação de dados em uma classe PHP, o que facilita a reutilização e organização do código. Os métodos `tratarCaracter`, `dataAtual` e `base64` podem ser utilizados em diferentes partes do código para realizar operações específicas, como tratamento de caracteres, formatação de datas e codificação/decodificação base64.

## index.php:
1. ```php
   require_once 'classes/Funcionario.class.php';
   require_once 'classes/Funcoes.class.php';
   ```
   - Inclui os arquivos que contêm as definições das classes `Funcionario` e `Funcoes`.

2. ```php
   $objFcn = new Funcionario();
   $objFcs = new Funcoes();
   ```
   - Cria instâncias das classes `Funcionario` e `Funcoes`.

3. ```php
   if(isset($_POST['btCadastrar'])){
       // Verifica se o formulário de cadastro foi submetido
       // Chama o método queryInsert da classe Funcionario para inserir os dados no banco de dados
       // Redireciona para a página de formulário após o cadastro ser concluído
   }
   ```
   - Verifica se o formulário de cadastro foi submetido.
   - Se sim, chama o método `queryInsert` da classe `Funcionario` para inserir os dados no banco de dados.
   - Redireciona para a página de formulário após o cadastro ser concluído.

4. ```php
   if (isset($_POST['btAlterar'])){
       // Verifica se o formulário de edição foi submetido
       // Chama o método queryUpdate da classe Funcionario para atualizar os dados no banco de dados
       // Redireciona para a página de edição após a atualização ser concluída
   }
   ```
   - Verifica se o formulário de edição foi submetido.
   - Se sim, chama o método `queryUpdate` da classe `Funcionario` para atualizar os dados no banco de dados.
   - Redireciona para a página de edição após a atualização ser concluída.

5. ```php
   if (isset($_GET['acao'])){
       // Verifica se foi passada uma ação via parâmetro GET
       // Dependendo da ação, executa operações de edição ou exclusão
   }
   ```
   - Verifica se foi passada uma ação via parâmetro GET.
   - Dependendo da ação especificada, executa operações de edição ou exclusão de registros.

6. ```php
   <!DOCTYPE HTML>
   <html lang="pt-br">
   <head>
   	<meta charset="utf-8">
   	<title>Formulário de cadastro</title>
   	<link href="css/estilo.css" rel="stylesheet" type="text/css" media="all">
   </head>
   <body>
   ```
   - Início do código HTML.

7. ```php
   <div id="lista">
       <?php foreach($objFcn->querySelect() as $rst){ ?>
       <!-- Loop para exibir os registros dos funcionários -->
   <?php } ?>
   </div>
   ```
   - Loop para exibir os registros dos funcionários recuperados do banco de dados.

8. ```php
   <div id="formulario">
       <!-- Formulário para cadastrar ou editar funcionários -->
   </div>
   ```
   - Formulário para cadastrar ou editar funcionários.

9. ```php
   </body>
   </html>
   ```
   - Fim do código HTML.

Este código faz parte de uma aplicação web que permite cadastrar, editar e excluir funcionários. Ele usa classes PHP para manipular os dados dos funcionários e inclui trechos de código HTML para exibir o formulário e a lista de funcionários. O código também lida com a submissão do formulário e redireciona o usuário para a página apropriada após a conclusão das operações.