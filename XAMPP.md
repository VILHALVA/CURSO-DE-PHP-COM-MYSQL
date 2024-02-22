# XAMPP - MANUAL
## SERVIDORES:
Servidores como XAMPP, WampServer e outros são ferramentas populares que facilitam a configuração e o gerenciamento de ambientes de desenvolvimento web local. Aqui estão algumas informações sobre essas plataformas:

1. **XAMPP**:
   - XAMPP é um pacote de software livre e de código aberto que facilita a criação de um servidor web local.
   - O nome "XAMPP" é um acrônimo que representa os componentes principais do pacote: X (qualquer sistema operacional), Apache, MySQL, PHP e Perl.
   - Além desses componentes principais, o XAMPP geralmente inclui outras ferramentas úteis, como phpMyAdmin (para gerenciamento de banco de dados MySQL), FileZilla FTP Server e Mercury Mail Server.
   - O XAMPP é fácil de instalar e configurar, tornando-o uma escolha popular para desenvolvedores que desejam configurar rapidamente um ambiente de desenvolvimento web local em sistemas Windows, Linux ou macOS.

2. **WampServer**:
   - Assim como o XAMPP, o WampServer é um ambiente de desenvolvimento web local para sistemas Windows.
   - Ele inclui o servidor Apache, o banco de dados MySQL e a linguagem de script PHP.
   - O WampServer também fornece uma interface gráfica simples para gerenciar os serviços do servidor e as configurações do PHP e MySQL.
   - É uma opção conveniente para desenvolvedores que trabalham principalmente em sistemas Windows e desejam configurar rapidamente um ambiente de desenvolvimento web local.

3. **MAMP**:
   - MAMP é uma alternativa ao XAMPP e WampServer, destinada a usuários de macOS.
   - O nome "MAMP" significa Macintosh, Apache, MySQL e PHP.
   - Assim como seus equivalentes para Windows, o MAMP fornece um ambiente de desenvolvimento web local completo e fácil de configurar no macOS.
   - Ele inclui o servidor Apache, o banco de dados MySQL e a linguagem de script PHP, além de ferramentas adicionais úteis para desenvolvedores web.

4. **Principais recursos**:
   - Todos esses servidores locais oferecem uma maneira fácil e rápida de configurar um ambiente de desenvolvimento web no seu próprio computador.
   - Eles são úteis para desenvolver e testar aplicativos web sem a necessidade de hospedá-los em um servidor remoto.
   - Permitem trabalhar offline e experimentar diferentes configurações sem impactar um ambiente de produção.
   - Podem ser desinstalados facilmente quando não forem mais necessários, deixando o sistema operacional limpo.

Esses servidores locais são ferramentas essenciais para desenvolvedores web, permitindo que eles criem e testem aplicativos web de forma eficiente em um ambiente controlado e familiar. Porém, nesse `README`, iremos nos focar apenas no `XAMPP`. 

## INSTALAÇÃO:
1. **Faça o download do XAMPP**:
   - Visite o site oficial do [XAMPP](https://www.apachefriends.org/pt_br/index.html).
   - Na página inicial, você encontrará opções de download para diferentes sistemas operacionais, como Windows, Linux e macOS. Escolha a versão adequada para o seu sistema e faça o download do instalador.

2. **Execute o instalador**:
   - Após o download ser concluído, execute o arquivo de instalação do XAMPP.
   - Dependendo do seu sistema operacional, pode ser necessário fornecer permissões de administrador para a instalação.

3. **Escolha os componentes**:
   - Durante o processo de instalação, você será solicitado a selecionar os componentes que deseja instalar. Por padrão, o XAMPP instala o Apache, MySQL, PHP e Perl.
   - Você pode selecionar ou desmarcar componentes conforme sua necessidade. Por exemplo, se você não precisa do Perl, pode desmarcá-lo.

4. **Escolha o diretório de instalação**:
   - Escolha o diretório onde deseja instalar o XAMPP. O diretório padrão costuma ser adequado para a maioria dos usuários, mas você pode alterá-lo conforme necessário.

5. **Conclua a instalação**:
   - Após escolher os componentes e o diretório de instalação, siga as instruções na tela para concluir o processo de instalação.
   - Dependendo do seu sistema operacional, pode ser necessário aguardar alguns minutos até que a instalação seja concluída.

6. **Inicie os serviços**:
   - Após a instalação ser concluída, você pode iniciar os serviços do XAMPP.
   - No Windows, você pode iniciar o XAMPP a partir do menu Iniciar ou usando o atalho criado na área de trabalho.
   - No Linux, você pode iniciar o XAMPP executando o script `xampp_start` no terminal.
   - No macOS, você pode iniciar o XAMPP a partir do Launchpad ou executando o script `xampp_start` no terminal.

7. **Verifique a instalação**:
   - Após iniciar o XAMPP, abra um navegador da web e digite `http://localhost` na barra de endereços.
   - Se a instalação for bem-sucedida, você verá a página inicial do XAMPP, que inclui informações sobre os serviços Apache, MySQL, PHP e outros.

Com o XAMPP instalado e em execução, você pode começar a desenvolver e testar seus aplicativos web localmente no seu próprio computador. Lembre-se de parar os serviços do XAMPP quando não estiverem em uso para economizar recursos do sistema.

## COMO USAR O MYSQL NO XAMPP?
1. **Iniciar o XAMPP**:
   - Inicie o XAMPP no seu computador. Dependendo do seu sistema operacional, você pode iniciar o XAMPP a partir do menu Iniciar (no Windows), Launchpad (no macOS) ou executando o script `xampp_start` no terminal (no Linux).

2. **Iniciar o servidor MySQL**:
   - No painel de controle do XAMPP, você verá uma lista de serviços disponíveis, incluindo Apache, MySQL, PHP e outros.
   - Localize o botão de "Start" ou "Iniciar" ao lado do serviço MySQL e clique nele para iniciar o servidor MySQL. Aguarde até que o status do MySQL mude para "Running" ou "Executando".

3. **Acessar o phpMyAdmin**:
   - O phpMyAdmin é uma ferramenta web popular para gerenciar bancos de dados MySQL. Você pode acessá-lo abrindo um navegador da web e digitando `http://localhost/phpmyadmin` na barra de endereços.
   - Isso abrirá a interface do phpMyAdmin no seu navegador, onde você poderá gerenciar seus bancos de dados MySQL.

4. **Realizar operações no MySQL**:
   - No phpMyAdmin, você pode criar, editar, excluir e gerenciar bancos de dados e tabelas MySQL usando uma interface gráfica amigável.
   - Você pode criar um novo banco de dados clicando em "Banco de Dados" no menu principal, inserindo um nome para o banco de dados e clicando em "Criar".
   - Para criar tabelas, você pode selecionar o banco de dados desejado na barra lateral esquerda, clicar em "Tabela" e preencher os detalhes da tabela, como nome das colunas, tipos de dados e outras propriedades.
   - Além disso, você pode executar consultas SQL diretamente no phpMyAdmin clicando na aba "SQL" e digitando suas consultas na área de texto.

5. **Parar o servidor MySQL quando não estiver em uso**:
   - Após concluir suas tarefas, é uma boa prática parar o servidor MySQL para economizar recursos do sistema. No painel de controle do XAMPP, você pode clicar no botão "Stop" ou "Parar" ao lado do serviço MySQL para interromper o servidor.

## COMO USAR O MYSQL SHELL NO XAMPP?
Para usar o MySQL Shell no XAMPP, você precisará acessá-lo via linha de comando. Aqui estão os passos para fazer isso:

1. **Inicie o XAMPP**:
   - Primeiro, inicie o XAMPP no seu computador. Certifique-se de que o serviço MySQL esteja em execução. Você pode fazer isso abrindo o painel de controle do XAMPP e iniciando o serviço MySQL, se ainda não estiver em execução.

2. **Abra um terminal ou prompt de comando**:
   - Dependendo do seu sistema operacional:
     - No Windows: Pressione `Win + R`, digite `cmd` e pressione Enter.
     - No Linux: Use o atalho `Ctrl + Alt + T` para abrir um terminal.
     - No macOS: Abra o Terminal a partir da pasta "Utilitários" em "Aplicativos".

3. **Navegue até o diretório do MySQL no XAMPP**:
   - O MySQL Shell geralmente está localizado na pasta `bin` dentro do diretório de instalação do XAMPP.
   - Você pode navegar até esse diretório usando o comando `cd`. Por exemplo:

     ```
     cd C:\xampp\mysql\bin    (no Windows)
     cd /opt/lampp/mysql/bin  (no Linux)
     cd /Applications/XAMPP/xamppfiles/mysql/bin  (no macOS)
     ```

   - Certifique-se de substituir o caminho pelo caminho real onde o XAMPP está instalado no seu sistema.

4. **Inicie o MySQL Shell**:
   - No diretório `bin` do MySQL, você pode executar o MySQL Shell digitando o seguinte comando e pressionando Enter:

     ```
     mysql -u root -p
     ```

   - Isso iniciará o MySQL Shell e solicitará sua senha do MySQL. Pressione Enter após digitar sua senha (se você não configurou uma senha, pode deixar em branco e pressionar Enter).

5. **Comece a usar o MySQL Shell**:
   - Agora você está no MySQL Shell e pode começar a executar comandos SQL ou comandos especiais do shell.
   - Por exemplo, você pode listar todos os bancos de dados existentes usando o comando:

     ```
     SHOW DATABASES;
     ```

   - Ou você pode selecionar um banco de dados específico usando:

     ```
     USE nome_do_banco_de_dados;
     ```

   - Para sair do MySQL Shell, você pode digitar `exit` e pressionar Enter.

## COMO USAR O PHP NO XAMPP?
1. **Inicie o XAMPP**:
   - Primeiro, inicie o XAMPP no seu computador. Dependendo do seu sistema operacional, você pode iniciar o XAMPP a partir do menu Iniciar (no Windows), Launchpad (no macOS) ou executando o script `xampp_start` no terminal (no Linux).

2. **Inicie o servidor Apache**:
   - No painel de controle do XAMPP, você verá uma lista de serviços disponíveis, incluindo Apache, MySQL, PHP e outros.
   - Localize o botão "Start" ou "Iniciar" ao lado do serviço Apache e clique nele para iniciar o servidor Apache. Aguarde até que o status do Apache mude para "Running" ou "Executando".

3. **Crie um arquivo PHP**:
   - Abra um editor de texto ou uma IDE (Integrated Development Environment) de sua preferência.
   - Crie um novo arquivo com a extensão ".php". Por exemplo, "meu_script.php".

4. **Escreva código PHP**:
   - Escreva o código PHP dentro do arquivo que você criou. Por exemplo:

   ```php
   <?php
   echo "Olá, mundo!";
   ?>
   ```

5. **Salve o arquivo PHP**:
   - Salve o arquivo PHP no diretório raiz do servidor web do XAMPP, que é geralmente o diretório `htdocs` dentro do diretório de instalação do XAMPP.

6. **Acesse o arquivo PHP no navegador**:
   - Abra um navegador da web e digite o URL do seu arquivo PHP no navegador. Por exemplo, se o arquivo PHP estiver no diretório raiz do servidor web, você pode digitar algo como `http://localhost/meu_script.php`.

7. **Verifique a saída do PHP**:
   - Se tudo estiver configurado corretamente, o navegador exibirá a saída do PHP, que neste caso será "Olá, mundo!".

8. **Encerre o servidor Apache**:
   - Quando terminar de usar o PHP, pare o servidor Apache através do painel de controle do XAMPP.

Essas são as etapas básicas para usar o PHP no XAMPP. Você pode criar e executar scripts PHP mais complexos seguindo os mesmos princípios, apenas escrevendo o código PHP necessário em arquivos .php no diretório `htdocs` e acessando-os pelo navegador da web.




