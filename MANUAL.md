# MYSQL - MANUAL
## MYSQL:
### COMO INSTALAR?
Para instalar o MySQL, você pode seguir estes passos básicos:

1. **Baixar o instalador**:
   - Visite o site oficial do MySQL para baixar o instalador. Você pode encontrar o instalador em [https://dev.mysql.com/downloads/](https://dev.mysql.com/downloads/).
   - Na página de downloads, escolha a versão do MySQL que deseja instalar. Existem diferentes versões disponíveis, incluindo o MySQL Community Server (versão gratuita) e o MySQL Enterprise Edition (versão comercial com recursos adicionais).
   - Selecione o sistema operacional adequado (Windows, Linux, macOS) e clique no botão de download correspondente para baixar o instalador.

2. **Executar o instalador**:
   - Após o download ser concluído, execute o arquivo de instalação baixado.
   - Dependendo do seu sistema operacional, pode ser necessário fornecer permissões de administrador para executar o instalador.

3. **Configurar o MySQL**:
   - Durante o processo de instalação, você será guiado por uma série de etapas para configurar o MySQL.
   - Você pode optar por instalar apenas o servidor MySQL ou incluir outros componentes, como o MySQL Workbench (uma ferramenta de modelagem e administração visual) e as MySQL Shell utilities.
   - Durante a instalação, você será solicitado a configurar uma senha para o usuário root do MySQL. Certifique-se de escolher uma senha segura e lembre-se dela, pois será necessária para acessar o MySQL posteriormente.

4. **Concluir a instalação**:
   - Após configurar todas as opções desejadas, conclua o processo de instalação. Isso pode levar alguns minutos, dependendo da configuração do seu sistema.

5. **Iniciar o serviço MySQL**:
   - Após a instalação ser concluída, o serviço MySQL deve ser iniciado automaticamente.
   - Você pode verificar se o serviço MySQL está em execução acessando o painel de controle de serviços do seu sistema operacional (por exemplo, no Windows, você pode abrir o "Gerenciador de Serviços" e verificar se o serviço "MySQL" está em execução).

6. **Testar a instalação**:
   - Para testar se o MySQL foi instalado corretamente, você pode abrir um terminal ou prompt de comando e digitar o seguinte comando para acessar o MySQL Shell:

     ```
     mysql -u root -p
     ```

   - Você será solicitado a digitar a senha que configurou durante a instalação. Se tudo estiver configurado corretamente, você será conectado ao MySQL Shell.

Esses são os passos básicos para instalar o MySQL no seu sistema. Lembre-se de consultar a documentação oficial do MySQL para obter informações mais detalhadas sobre o processo de instalação e configuração, especialmente se você encontrar problemas durante a instalação.

### ADICIONANDO MYSQL.EXE AO PATH:
1. **Encontre o diretório do MySQL**:
   - Primeiro, você precisa localizar o diretório onde o executável `mysql.exe` está instalado. Por padrão, o MySQL é instalado no diretório `bin` dentro do diretório de instalação do MySQL. Por exemplo, `C:\Program Files\MySQL\MySQL Server 8.0\bin`.

2. **Copie o caminho do diretório**:
   - Após localizar o diretório `bin`, copie o caminho completo do diretório. Você pode fazer isso clicando com o botão direito do mouse no diretório e selecionando "Propriedades". Na janela de propriedades, você verá o caminho completo que pode ser copiado.

3. **Abrir Configurações do Sistema (System Properties)**:
   - Pressione `Win + R` para abrir a caixa de diálogo "Executar".
   - Digite `sysdm.cpl` e pressione Enter. Isso abrirá as Propriedades do Sistema.

4. **Acessar as Variáveis de Ambiente (Environment Variables)**:
   - Na janela Propriedades do Sistema, vá para a guia "Avançado" e clique no botão "Variáveis de Ambiente".

5. **Editar a variável PATH**:
   - Na seção "Variáveis do Sistema" (ou "Variáveis de Usuário", se você preferir instalar apenas para o usuário atual), encontre a variável chamada "Path" e clique em "Editar".

6. **Adicionar o caminho do MySQL ao PATH**:
   - Na janela de Edição de Variável de Ambiente, clique em "Novo" e cole o caminho do diretório `bin` que você copiou anteriormente.
   - Clique em "OK" para fechar todas as janelas e salvar as alterações.

7. **Verificar a configuração**:
   - Abra um novo prompt de comando e digite `mysql`. Se tudo estiver configurado corretamente, você deverá ver a saída do comando `mysql`, indicando que o `mysql.exe` foi encontrado e está disponível no PATH.

Agora você pode usar o comando `mysql` em qualquer lugar no prompt de comando sem precisar especificar o caminho completo para o executável. Certifique-se de ter cuidado ao modificar as variáveis de ambiente, pois alterações incorretas podem afetar o funcionamento do sistema.

### INICIANDO SERVIDOR MYSQL:
1. **No Windows**:

   - Se você estiver usando XAMPP, WampServer ou uma instalação independente do MySQL no Windows, geralmente há uma opção para iniciar o servidor MySQL através de uma interface gráfica ou de um painel de controle.
   - No XAMPP, por exemplo, você pode abrir o painel de controle do XAMPP, clicar no botão "Start" próximo ao serviço MySQL para iniciar o servidor.
   - Se você estiver usando uma instalação independente do MySQL, você pode iniciar o servidor executando o arquivo `mysqld` ou `mysqld.exe` no diretório de instalação do MySQL.

2. **No Linux**:

   - No Linux, você pode iniciar o servidor MySQL executando o seguinte comando no terminal:

     ```
     sudo service mysql start
     ```

   - Se você instalou o MySQL via um pacote de gerenciamento de pacotes como o apt, o serviço MySQL pode ser iniciado automaticamente após a instalação.

3. **No macOS**:

   - No macOS, você pode iniciar o servidor MySQL executando o seguinte comando no Terminal:

     ```
     sudo /usr/local/mysql/support-files/mysql.server start
     ```

   - Certifique-se de ajustar o caminho conforme necessário, dependendo de onde o MySQL está instalado no seu sistema.

Após iniciar o servidor MySQL, você pode verificar se ele está em execução verificando o status do serviço ou tentando se conectar ao servidor usando o cliente MySQL.

- Para verificar o status do serviço no Windows, Linux ou macOS, você pode usar comandos como `sudo service mysql status` (Linux) ou `sudo /usr/local/mysql/support-files/mysql.server status` (macOS).

- Para conectar-se ao servidor MySQL, você pode usar o cliente MySQL digitando `mysql -u root -p` no terminal e fornecendo a senha do usuário root quando solicitado. Se a conexão for bem-sucedida, isso indicará que o servidor MySQL está em execução corretamente.

## PHP (APACHE):
### COMO INSTALAR?
Para instalar o Apache e o PHP em um ambiente de desenvolvimento, você pode usar pacotes como XAMPP, WampServer ou instalar individualmente o Apache e o PHP. Aqui estão algumas maneiras de fazer isso:

1. **XAMPP**:

   - Baixe o XAMPP do [site oficial](https://www.apachefriends.org/pt_br/index.html).
   - Execute o instalador e siga as instruções na tela para concluir a instalação.
   - Após a instalação, inicie o XAMPP e inicie os serviços do Apache e do PHP no painel de controle.
   - O XAMPP inclui Apache, PHP, MySQL e outras ferramentas necessárias para configurar um ambiente de desenvolvimento web.

2. **WampServer**:

   - Baixe o WampServer do [site oficial](https://www.wampserver.com/en/).
   - Execute o instalador e siga as instruções na tela para concluir a instalação.
   - Após a instalação, inicie o WampServer e verifique se os serviços do Apache e do PHP estão em execução.
   - O WampServer também inclui Apache, PHP, MySQL e outras ferramentas para desenvolvimento web.

3. **Instalação Individual do Apache e PHP**:

   - Baixe o Apache do [site oficial](https://httpd.apache.org/download.cgi).
   - Baixe o PHP do [site oficial](https://www.php.net/downloads).
   - Instale o Apache seguindo as instruções de instalação fornecidas no site.
   - Após a instalação do Apache, você precisará configurá-lo para carregar o PHP. Isso geralmente envolve editar o arquivo de configuração do Apache (httpd.conf) para incluir as configurações do PHP.
   - Baixe o PHP e siga as instruções de instalação fornecidas no site. Certifique-se de configurar o PHP para funcionar com o Apache editando o arquivo de configuração do PHP (php.ini) e especificando o caminho para o módulo do PHP no Apache.
   - Após a instalação e configuração, inicie o Apache e o PHP e verifique se estão funcionando corretamente.

Essas são algumas maneiras comuns de instalar o Apache e o PHP em um ambiente de desenvolvimento. A escolha entre elas depende das suas necessidades e preferências pessoais. Os pacotes como XAMPP e WampServer são mais fáceis de configurar, enquanto a instalação individual oferece mais controle sobre cada componente.

### ADICIONANDO O PHP.EXE AO PATH:
1. **Encontre o diretório do PHP**:
   - Primeiro, você precisa localizar o diretório onde o executável `php.exe` está instalado. Por padrão, o PHP é instalado em um diretório como `C:\xampp\php` (se você estiver usando XAMPP), `C:\wamp\bin\php` (se você estiver usando WampServer), ou em qualquer outro diretório que você tenha escolhido durante a instalação do PHP.

2. **Copie o caminho do diretório**:
   - Após localizar o diretório onde o PHP está instalado, copie o caminho completo do diretório. Você pode fazer isso clicando com o botão direito do mouse no diretório e selecionando "Propriedades". Na janela de propriedades, você verá o caminho completo que pode ser copiado.

3. **Abrir Configurações do Sistema (System Properties)**:
   - Pressione `Win + R` para abrir a caixa de diálogo "Executar".
   - Digite `sysdm.cpl` e pressione Enter. Isso abrirá as Propriedades do Sistema.

4. **Acessar as Variáveis de Ambiente (Environment Variables)**:
   - Na janela Propriedades do Sistema, vá para a guia "Avançado" e clique no botão "Variáveis de Ambiente".

5. **Editar a variável PATH**:
   - Na seção "Variáveis do Sistema" (ou "Variáveis de Usuário", se você preferir instalar apenas para o usuário atual), encontre a variável chamada "Path" e clique em "Editar".

6. **Adicionar o caminho do PHP ao PATH**:
   - Na janela de Edição de Variável de Ambiente, clique em "Novo" e cole o caminho do diretório onde o PHP está instalado.
   - Clique em "OK" para fechar todas as janelas e salvar as alterações.

7. **Verificar a configuração**:
   - Abra um novo prompt de comando e digite `php -v`. Se tudo estiver configurado corretamente, você verá a versão do PHP instalada e outras informações relacionadas ao PHP.

Agora você pode usar o comando `php` em qualquer lugar no prompt de comando sem precisar especificar o caminho completo para o executável. Certifique-se de ter cuidado ao modificar as variáveis de ambiente, pois alterações incorretas podem afetar o funcionamento do sistema.

### INICIANDO E USANDO O PHP:
1. **Configurar o ambiente de desenvolvimento**:
   - Se você estiver usando XAMPP, WampServer, MAMP ou algum outro pacote similar, inicie o servidor Apache (e MySQL, se necessário) através do painel de controle do pacote.

2. **Criar um arquivo PHP**:
   - Abra um editor de texto ou uma IDE (Integrated Development Environment) de sua preferência.
   - Crie um novo arquivo com a extensão ".php". Por exemplo, "meu_script.php".

3. **Escrever código PHP**:
   - Escreva o código PHP dentro do arquivo que você criou. Por exemplo:

   ```php
   <?php
   echo "Olá, mundo!";
   ?>
   ```

4. **Salvar o arquivo PHP**:
   - Salve o arquivo PHP no diretório raiz do servidor web ou em um diretório acessível pelo servidor web. Por exemplo, se você estiver usando XAMPP, o diretório raiz padrão é `htdocs`.

5. **Acessar o arquivo PHP no navegador**:
   - Abra um navegador da web e digite o URL do seu arquivo PHP no navegador. Por exemplo, se o arquivo PHP estiver no diretório raiz, você pode digitar algo como `http://localhost/meu_script.php`.

6. **Verificar a saída do PHP**:
   - Se tudo estiver configurado corretamente, o navegador exibirá a saída do PHP, que neste caso será "Olá, mundo!".

7. **Parar o servidor Apache (e MySQL)**:
   - Quando você terminar de usar o PHP, lembre-se de parar o servidor Apache (e MySQL, se necessário) através do painel de controle do pacote que você está usando.

Esses são os passos básicos para iniciar e usar o PHP em um ambiente de desenvolvimento local. Lembre-se de que você pode precisar ajustar as configurações do servidor web (como o Apache) para garantir que o PHP seja processado corretamente. Além disso, ao desenvolver aplicativos PHP mais complexos, você pode precisar aprender sobre conceitos adicionais, como incluir arquivos, conectar-se a bancos de dados e manipular formulários.