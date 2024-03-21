# EXPLICAÇÃO:
## classes/fpdf181 (O que é?):
### CONCEITO:
FPDF é uma biblioteca de PHP que permite a geração de arquivos PDF a partir de scripts PHP. A versão "fpdf181" refere-se à versão 1.81 da biblioteca FPDF. 

Com o FPDF, os desenvolvedores podem criar documentos PDF dinamicamente, adicionando texto, imagens, linhas, formas geométricas e muito mais. É uma ferramenta bastante útil para gerar relatórios, faturas, certificados e outros tipos de documentos que precisam ser disponibilizados em formato PDF em sites ou aplicações web.

A versão específica "fpdf181" provavelmente se refere a uma versão específica ou uma variação customizada da biblioteca FPDF, que pode conter correções de bugs, novos recursos ou modificações feitas por terceiros.

### BAIXANDO:
Para baixar a biblioteca FPDF, você pode seguir estes passos:

1. Visite o site oficial do FPDF em http://www.fpdf.org/ ou acesse diretamente o repositório no GitHub em https://github.com/Setasign/FPDF.

2. No site oficial, vá para a seção "Downloads" ou, no GitHub, clique no botão "Code" e selecione "Download ZIP" para baixar o código-fonte completo do FPDF.

3. Após o download, extraia o arquivo ZIP para obter os arquivos da biblioteca FPDF em seu computador.

4. Em seguida, você pode incluir a biblioteca FPDF em seus scripts PHP, seja copiando os arquivos para o diretório do seu projeto ou configurando um caminho para os arquivos da biblioteca.

Lembre-se de ler a [documentação oficial do FPDF](http://www.fpdf.org/) para entender como usar a biblioteca e começar a gerar documentos PDF dinamicamente em seus projetos PHP.

## classes/Artigo.class-pdo.php:
1. ```php
   require_once "Conexao.class.php";
   require_once "Funcoes.class.php";
   ```
   - Inclui as classes necessárias `Conexao` e `Funcoes`.

2. ```php
   class Artigo{
   ```
   - Define a classe `Artigo`.

3. ```php
   private $con;
   private $objFc;
   private $objMn;
   private $objUs;
   private $idArtigo;
   private $idMenu;
   private $idUsuario;
   private $titulo;
   ```
   - Declaração dos atributos da classe.

4. ```php
   public function __construct(){
       $this->con = new Conexao();
       $this->objFc = new Funcoes();
   }
   ```
   - O construtor da classe, que instancia os objetos das classes `Conexao` e `Funcoes`.

5. ```php
   public function __set($atributo, $valor){
       $this->$atributo = $valor;
   }
   public function __get($atributo){
       return $this->$atributo;
   }
   ```
   - Métodos mágicos para definir e obter valores dos atributos da classe.

6. ```php
   public function querySelectArtigo(){
       try{
           $cst = $this->con->conectar()->prepare("SELECT art.idArtigo, usu.nome, mn.menu, art.titulo FROM  artigo art 
                                                   INNER JOIN menu mn ON mn.idMenu = art.menu_idMenu
                                                   INNER JOIN usuario usu ON usu.idUsuario = art.usuario_idUsuario;");
           $cst->execute();
           return $cst->fetchAll();										
       }catch(PDOException $ex){
           echo 'Error: '.$ex->getMessage();
       }
   }
   ```
   - Método para selecionar todos os artigos do banco de dados, juntamente com o nome do menu e o nome do usuário que os criou.

7. ```php
   public function queryListaArtigo($vlr){
       try{
           $this->idMenu = $vlr;
           $cst = $this->con->conectar()->Prepare("SELECT art.idArtigo, art.menu_idMenu, usu.nome, art.titulo FROM  artigo art
                                                   INNER JOIN usuario usu ON usu.idUsuario = art.usuario_idUsuario WHERE art.menu_idMenu = :menu;");
           $cst->bindParam(":menu", $this->idMenu, PDO::PARAM_INT);
           $cst->execute();
           return $cst->fetchAll();									
       }catch(PDOException $ex){
           echo 'Error: '.$ex->getMessage();
       }
   }
   ```
   - Método para listar os artigos de um menu específico, juntamente com o nome do usuário que os criou.

Este código define uma classe `Artigo` com métodos para selecionar todos os artigos do banco de dados e listar os artigos de um menu específico. Os métodos fazem uso da classe `Conexao` para se conectar ao banco de dados e executar consultas SQL.

## classes/Conexao.php:
1. ```php
   class Conexao{
   ```
   - Define a classe `Conexao`.

2. ```php
   private $servidor;
   private $banco;
   private $usuario;
   private $senha;
   private static $pdo;
   ```
   - Declaração dos atributos privados da classe: `$servidor`, `$banco`, `$usuario`, `$senha` e `$pdo` (este último é estático para garantir que apenas uma instância do objeto de conexão seja criada).

3. ```php
   public function __construct(){
       $this->servidor = "localhost";
       $this->banco = "galactus";
       $this->usuario = "root";
       $this->senha = "";
   }
   ```
   - O construtor da classe, que define os valores padrão para o servidor, banco de dados, usuário e senha. Neste exemplo, o servidor é `localhost`, o banco de dados é `galactus`, o usuário é `root` e a senha está em branco.

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
   - O método `conectar()` é responsável por estabelecer a conexão com o banco de dados. Ele verifica se já existe uma conexão estabelecida (`self::$pdo`) e, se não existir, cria uma nova instância de `PDO` usando os dados fornecidos (servidor, banco de dados, usuário e senha). Em caso de erro, uma exceção `PDOException` é capturada e uma mensagem de erro é exibida.

Este código é um exemplo simples de como criar uma classe de conexão com banco de dados MySQL em PHP usando a extensão PDO (PHP Data Objects). Ele fornece uma maneira organizada e reutilizável de se conectar ao banco de dados em aplicativos PHP.

## classes/Funcoes.class.php:
1. ```php
   class Funcoes {
   ```
   - Define a classe `Funcoes`.

2. ```php
   public function tratarCaracter($vlr, $tipo){
   ```
   - Define o método `tratarCaracter`, que recebe dois parâmetros: `$vlr` (o valor a ser manipulado) e `$tipo` (indicando o tipo de manipulação a ser realizado).

3. ```php
      switch($tipo){
          case 1: $rst = utf8_decode($vlr); break;
          case 2: $rst = utf8_encode($vlr); break;    
      }
   ```
   - Utiliza uma estrutura `switch` para determinar a ação com base no valor de `$tipo`. Se `$tipo` for igual a 1, o método `utf8_decode` é utilizado para decodificar a string UTF-8 fornecida em ISO-8859-1. Se `$tipo` for igual a 2, o método `utf8_encode` é utilizado para codificar a string ISO-8859-1 fornecida em UTF-8.

4. ```php
      return $rst;
   ```
   - Retorna o resultado da manipulação de caracteres.

5. ```php
   }
   ```
   - Fecha a função `tratarCaracter`.

6. ```php
   }
   ```
   - Fecha a classe `Funcoes`.

Este método pode ser útil para converter caracteres entre diferentes codificações, como UTF-8 e ISO-8859-1, dependendo das necessidades específicas de um aplicativo. Por exemplo, pode ser usado para garantir que os dados manipulados em um sistema estejam em uma codificação específica antes de serem exibidos ou armazenados em um banco de dados.

## classes/Menu.class-pdo.php:
1. ```php
   require_once "Conexao.class.php";
   ```
   - Este comando inclui o arquivo `Conexao.class.php`, que contém a definição da classe `Conexao`, responsável por lidar com a conexão com o banco de dados.

2. ```php
   class Menu{
   ```
   - Define a classe `Menu`.

3. ```php
   private $con;
   private $idMenu;
   private $menu;
   ```
   - Declaração dos atributos privados da classe:
     - `$con`: representa uma instância da classe de conexão ao banco de dados.
     - `$idMenu`: armazena o ID do menu.
     - `$menu`: armazena o nome do menu.

4. ```php
   public function __construct(){
       $this->con = new Conexao();
   }
   ```
   - O método construtor da classe `Menu` instância um objeto da classe `Conexao`, permitindo assim a utilização de seus métodos para realizar operações no banco de dados.

5. ```php
   public function __set($atributo, $valor){
       $this->$atributo = $valor;
   }
   ```
   - Este método mágico `__set` é utilizado para definir o valor de um atributo da classe.

6. ```php
   public function __get($atributo){
       return $this->$atributo;
   }
   ```
   - Este método mágico `__get` é utilizado para obter o valor de um atributo da classe.

7. ```php
   public function querySelectMenu(){
       try{
           $cst = $this->con->conectar()->prepare("SELECT `idMenu`, `menu`, `img` FROM `menu`;");
           $cst->execute();
           return $cst->fetchAll();
       }catch(PDOException $ex){
           echo 'Error: '.$ex->getMessage();
       }	
   }
   ```
   - O método `querySelectMenu` é responsável por executar uma consulta SQL para selecionar todos os menus no banco de dados. Ele utiliza a conexão estabelecida pela classe `Conexao`. Se a consulta for bem-sucedida, retorna todas as linhas do conjunto de resultados como uma matriz de arrays associativos. Se ocorrer algum erro durante a execução da consulta, uma exceção `PDOException` será capturada e uma mensagem de erro será exibida.

Essa classe pode ser utilizada para obter informações sobre os menus armazenados no banco de dados, utilizando o método `querySelectMenu`.

## classes/Usuario.class-pdo.php:
A classe `Usuario` foi definida, mas atualmente está vazia. Normalmente, em uma aplicação real, a classe `Usuario` teria atributos e métodos para lidar com operações relacionadas aos usuários, como autenticação, criação, edição e exclusão de usuários, entre outras funcionalidades.

Vou adicionar alguns exemplos simples de atributos e métodos que poderiam ser incluídos nesta classe:

```php
<?php
//BUSCANDO AS CLASSES
require_once "Conexao.class.php";

//CRIANDO A CLASSE
class Usuario {
    // Atributos
    private $idUsuario;
    private $nome;
    private $email;
    private $senha;
    
    // Método construtor
    public function __construct($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }
    
    // Métodos
    public function cadastrarUsuario() {
        // Lógica para cadastrar um novo usuário no banco de dados
    }
    
    public function autenticarUsuario() {
        // Lógica para autenticar um usuário com base no email e senha
    }
    
    public function atualizarSenha($novaSenha) {
        // Lógica para atualizar a senha de um usuário
    }
    
    // Outros métodos relacionados a operações com usuários...
}
?>
```

Estes são apenas exemplos simples. Dependendo das necessidades da aplicação, você pode adicionar mais atributos e métodos à classe `Usuario`. Por exemplo, você pode querer incluir métodos para recuperar informações específicas do usuário, verificar permissões, entre outras funcionalidades.

## index.php:
1. `require_once "classes/Artigo.class-pdo.php";`: Esta linha inclui o arquivo que contém a definição da classe `Artigo`. Essa classe provavelmente contém métodos para recuperar informações sobre os artigos do banco de dados.

2. `require_once "classes/Funcoes.class.php";`: Esta linha inclui o arquivo que contém a definição da classe `Funcoes`. Essa classe provavelmente contém métodos auxiliares úteis para manipulação de strings, caracteres, etc.

3. `$objAt = new Artigo();`: Aqui, a classe `Artigo` é instanciada em um objeto chamado `$objAt`. Isso permite que você use os métodos da classe `Artigo` para recuperar informações sobre os artigos do banco de dados.

4. `$objFc = new Funcoes()`: Aqui, a classe `Funcoes` é instanciada em um objeto chamado `$objFc`. Isso permite que você use os métodos auxiliares da classe `Funcoes` para tratar caracteres e strings.

5. `foreach($objAt->querySelectArtigo() as $rst){ ... }`: Este é um loop `foreach` que itera sobre o resultado da consulta `querySelectArtigo()` do objeto `$objAt`. Presumivelmente, esse método retorna uma lista de artigos do banco de dados. Para cada artigo retornado, o loop gera uma linha na tabela HTML exibindo o nome do autor, a categoria e o título do artigo.

6. `<?=$rst['nome']?>`: Aqui, o nome do autor do artigo é exibido na coluna correspondente da tabela HTML.

7. `<?=$objFc->tratarCaracter($rst['menu'], 2)?>`: Aqui, o método `tratarCaracter()` da classe `Funcoes` é chamado para tratar o nome da categoria do artigo antes de ser exibido na coluna correspondente da tabela HTML.

8. `<?=$objFc->tratarCaracter($rst['titulo'], 2)?>`: Aqui, o método `tratarCaracter()` da classe `Funcoes` é chamado para tratar o título do artigo antes de ser exibido na coluna correspondente da tabela HTML.

## relatorio-geral.php:
Este script PHP gera um relatório em formato PDF que lista os artigos disponíveis em diferentes categorias de menus. 

1. `require_once "classes/Artigo.class-pdo.php";`: Inclui o arquivo que contém a definição da classe `Artigo`, responsável por lidar com operações relacionadas aos artigos no banco de dados.

2. `require_once "classes/Funcoes.class.php";`: Inclui o arquivo que contém a definição da classe `Funcoes`, que fornece métodos auxiliares úteis.

3. `require_once "classes/Menu.class-pdo.php";`: Inclui o arquivo que contém a definição da classe `Menu`, responsável por lidar com operações relacionadas aos menus no banco de dados.

4. `require_once "classes/fpdf181/fpdf.php";`: Inclui a biblioteca FPDF, que permite a geração de documentos PDF.

5. `new FPDF("P")`: Cria um novo objeto FPDF com orientação de página definida como retrato.

6. `$pdf->AddPage()`: Adiciona uma nova página ao documento PDF.

7. `foreach($objMn->querySelectMenu() as $rstMn){ ... }`: Itera sobre os menus recuperados do banco de dados usando o método `querySelectMenu()` da classe `Menu`.

8. `$pdf->SetFont($fonte, $estilo, 15)`: Define a fonte, o estilo e o tamanho da fonte para o título do menu.

9. `$pdf->Cell(190, 10, $rstMn['menu'], $border, 1, $alinhamentoC)`: Adiciona uma célula à página PDF com o nome do menu.

10. `$pdf->Image('img/'.$rstMn['img'], 10, 15, -200)`: Adiciona uma imagem ao PDF, que representa o menu.

11. `foreach($objAt->queryListaArtigo($rstMn['idMenu']) as $rstAt){ ... }`: Itera sobre os artigos recuperados do banco de dados usando o método `queryListaArtigo()` da classe `Artigo`, passando o ID do menu como parâmetro.

12. `$pdf->Cell(30, 7, 'AUTOR (A)', 'L, B', 0, $alinhamentoC)`: Adiciona uma célula para exibir o cabeçalho "AUTOR (A)".

13. `$pdf->Cell(160, 7, 'ARTIGOS', 'L, R, B', 1, $alinhamentoC)`: Adiciona uma célula para exibir o cabeçalho "ARTIGOS".

14. `$pdf->Cell(...)` dentro do segundo loop: Adiciona células para exibir o nome do autor e o título do artigo para cada artigo recuperado.

15. `$pdf->AddPage()`: Adiciona uma nova página após o processamento de cada menu.

16. `$pdf->Output($arquivo, $tipo_pdf)`: Gera a saída do documento PDF, enviando-o para o navegador (ou forçando um download, dependendo do valor de `$tipo_pdf`). O nome do arquivo é especificado em `$arquivo`.



