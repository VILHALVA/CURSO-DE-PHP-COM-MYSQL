# EXPLICAÇÃO:
## classes/Conexao.class-pdo.php:
1. ```php
   class Conexao{
   ```
   - Define a classe `Conexao`.

2. ```php
   private $usuario;
   private $senha;
   private $servidor;
   private $banco;
   private static $pdo;
   ```
   - Declaração de propriedades da classe para armazenar informações de conexão com o banco de dados e uma variável estática para armazenar a instância do objeto PDO.

3. ```php
   public function __construct(){
       $this->servidor = "localhost";
       $this->banco = "aula";
       $this->usuario = "root";
       $this->senha = "";
   }
   ```
   - Método construtor da classe. Define os valores padrão para o servidor, banco de dados, nome de usuário e senha.

4. ```php
   public function conectar(){
       try{
           if(is_null(self::$pdo)){
               self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
           }
           return self::$pdo;
       }catch(PDOException $ex){
           echo 'Error: '.$ex->getMessage();
       }
   }
   ```
   - Método `conectar()` que cria e retorna uma instância do objeto PDO para conectar ao banco de dados.
   - Ele verifica se já existe uma instância do PDO e a reutiliza se existir, para evitar abrir múltiplas conexões.
   - Se ocorrer algum erro durante a conexão, uma exceção do tipo `PDOException` será capturada e uma mensagem de erro será exibida.

Este código encapsula a lógica de conexão com o banco de dados MySQL em uma classe `Conexao`, fornecendo métodos para conectar-se ao banco de dados de forma eficiente e segura.

## classes/Funcoes.class.php:
1. ```php
   class Funcoes{
   ```
   - Define a classe `Funcoes`.

2. ```php
   public function tratarCaracter($vlr, $tipo){
       switch($tipo){
           case 1: $rst = utf8_decode($vlr); break;
           case 2: $rst = htmlentities($vlr, ENT_QUOTES, "ISO-8859-1"); break; 
       }
       return $rst;
   }
   ```
   - Método `tratarCaracter()` responsável por tratar caracteres especiais em uma string.
   - Ele recebe dois parâmetros: `$vlr`, que é a string a ser tratada, e `$tipo`, que indica o tipo de tratamento a ser aplicado.
   - Dependendo do valor de `$tipo`, ele realiza diferentes operações de tratamento, como decodificar UTF-8 ou converter caracteres especiais em entidades HTML.

3. ```php
   public function normalizaString($str){
       $de = array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/", "/(\(|\)|,| |\/)/");
       $para = explode(" ","a A e E i I o O u U n N c C -");  $i = 1;
       $str = preg_replace($de, $para, strtolower($str));
       while($i > 0){ 
           $str = str_replace('--','-',$str,$i);
           if(substr($str, -1) == '-'){
               $str = substr($str, 0, -1);
           }
       }
       return $str;
   }
   ```
   - Método `normalizaString()` responsável por normalizar uma string, removendo caracteres especiais e espaços.
   - Ele usa expressões regulares para substituir caracteres especiais por caracteres comuns e remove espaços extras.
   - Retorna a string normalizada.

Essa classe fornece métodos úteis para lidar com strings, como tratamento de caracteres especiais e normalização de strings. Ela pode ser usada para limpar e padronizar strings antes de serem usadas em consultas de banco de dados ou outras operações de processamento de texto.

## classes/Upload.class-pdo.php:
1. ```php
   require_once "Conexao.class-pdo.php";
   require_once "Funcoes.class.php"; 
   ```
   - Inclui os arquivos necessários `Conexao.class-pdo.php` e `Funcoes.class.php`.

2. ```php
   class Upload{
   ```
   - Define a classe `Upload`.

3. ```php
   private $con;
   private $objfc;
   private $idUploadArquivo;
   private $tipo;
   private $legenda;
   private $arquivo;
   ```
   - Declaração dos atributos privados da classe.

4. ```php
   public function __construct(){
       $this->con = new Conexao();
       $this->objfc = new Funcoes();
   }
   ```
   - O construtor da classe, responsável por inicializar os objetos `Conexao` e `Funcoes`.

5. ```php
   public function __set($atributo, $valor){
       $this->$atributo = $valor;
   }
   public function __get($atributo){
       return $this->$atributo;
   }
   ```
   - Métodos mágicos `__set` e `__get` para definir e obter valores dos atributos da classe.

6. ```php
   public function querySelect(){
   ```
   - Método `querySelect` para selecionar todos os registros da tabela `aula_upload_arquivos`.

7. ```php
   public function querySelecionar($vlr){
   ```
   - Método `querySelecionar` para selecionar um registro específico da tabela `aula_upload_arquivos`.

8. ```php
   public function queryInsert(){
   ```
   - Método `queryInsert` para inserir um novo registro na tabela `aula_upload_arquivos`.

9. ```php
   public function queryUpdate(){
   ```
   - Método `queryUpdate` para atualizar um registro na tabela `aula_upload_arquivos`.

10. ```php
    public function queryDelete($vlr){
    ```
    - Método `queryDelete` para excluir um registro da tabela `aula_upload_arquivos`.

Este código lida com o upload de arquivos, validação de tipos e dimensões de imagens, armazenamento de informações no banco de dados e exclusão de arquivos e registros.

## index.php:
1. ```php
   require_once 'classes/Upload.class-pdo.php';
   require_once 'classes/Funcoes.class.php';
   ```
   - Inclui as classes necessárias `Upload` e `Funcoes`.

2. ```php
   $objUp = new Upload();
   $objFc = new Funcoes();
   ```
   - Instancia objetos das classes `Upload` e `Funcoes`.

3. ```php
   if(isset($_POST['btEnviar'])){
       $objUp->queryInsert();
   }
   ```
   - Verifica se o botão "Enviar" foi pressionado e chama o método `queryInsert()` para inserir o arquivo no banco de dados.

4. ```php
   if(isset($_POST['btAlterar'])){
       $objUp->queryUpdate();
   }
   ```
   - Verifica se o botão "Alterar" foi pressionado e chama o método `queryUpdate()` para atualizar o arquivo no banco de dados.

5. ```php
   if(!empty($_GET['acao'])){
       switch($_GET['acao']){
           case 'edit': $slt = $objUp->querySelecionar($_GET['id']); break;
           case 'delet': $objUp->queryDelete($_GET['id']); break; 
       }
   }
   ```
   - Verifica se há uma ação especificada na URL. Se for "edit", chama o método `querySelecionar()` para selecionar o arquivo específico para edição. Se for "delet", chama o método `queryDelete()` para excluir o arquivo.

6. A partir daqui, o código HTML é exibido para mostrar a lista de arquivos existentes, o formulário de envio e edição de arquivos e a visualização da imagem selecionada.

   - A lista de arquivos é exibida dentro de um loop `foreach`, onde cada arquivo é exibido com opções de edição e exclusão.

   - O formulário de envio e edição de arquivos permite que o usuário insira uma legenda e selecione um arquivo para fazer upload. Se estiver editando, o botão de envio será "Alterar", caso contrário, será "Cadastrar".

   - A imagem selecionada é exibida abaixo do formulário, com a legenda correspondente, ou uma imagem padrão caso não haja arquivo selecionado.

Este código cria uma interface simples para gerenciar arquivos enviados, permitindo a adição, edição e exclusão de arquivos, além de exibir uma lista dos arquivos existentes.
