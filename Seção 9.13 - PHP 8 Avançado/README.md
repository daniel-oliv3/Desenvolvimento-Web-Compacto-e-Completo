##
### Seção 13 - PHP 8 Avançado
##



<p align="center">
  <img alt="...." src="../Seção 9.13 - PHP 8 Avançado/assets/PHP-logo.svg.png" width="70%">
</p>




### 428 - Introdução ao Módulo

- Vamos aprender conceitos mais **avançado** de PHP
- Vamos abordar conceitos, criar um **projeto MVC com aplicação de matéria**


- **Entre outros assuntos, vamos falar sobre**:
    - Composer e gestão de dependências
    - Manipulação de datas e horas
    - Uploud e tratamento de ficheiros
    - Expressões regulares e validações
    - Segurança e encriptação
    - Padrão MVC
    - Packages de PHP
    - Manipulação de dados

**Requisitos Necessários**

- os módulo de HTML e CSS
- JavaScript DOM - nível 1
- PHP básico e Intermédio
- PHP POO
- PHP Conexão com MySQL
- Laragon
- Visial Studio Code
- HeidiSQL


**Downloads**

- **Laragon**
  - Link: https://laragon.org/download/index.html

- **Visual Studio Code**
  - Link: https://code.visualstudio.com/download

- **HeidiSQL**
  - Link: https://www.heidisql.com/download.php



**Algumas Notas Importantes**:


- Na maior parte dos casos vais usar uma **Framework**
- Framework é um kit de desenvolvimento de aplicações
- As frameworks contêm, geralmente:
    - Estrutura de projetos
    - Sistema de roteamento
    - Separação de camadas
    - Gestão de BDs
    - Implementações de segurança
    - Middleware e imensas classes

- Sem Exemplo

- Exemplo
    - php-avancado_01



### 429 - As Frameworks de PHP

- Existem **Frameworks** e **bibliotecas** nas linguagens para web
- São **kits** com **estrutura** e **funcionalidades** para criar aplicações web


<p align="center">
  <img alt="...." src="../Seção 9.13 - PHP 8 Avançado/assets/php-avan-01.jpg" width="70%">
</p>

- O PHP tem várias **frameworks** para desenvolvimento web

<p align="center">
  <img alt="...." src="../Seção 9.13 - PHP 8 Avançado/assets/php-avan-02.jpg" width="70%">
</p>


- A maioria das várias **frameworks** é baseada no **padrão MVC**
- **MVC**
    - **M**odel
    - **V**iew
    - **C**ontroller


<p align="center">
  <img alt="...." src="../Seção 9.13 - PHP 8 Avançado/assets/php-avan-03.jpg" width="70%">
</p>


- Que framework vamos escolher para o resto do módulo ?

- NENHUMA

- Vamos explorar **conceitos mais avançados** de PHP com exemplos
- Muitos dos conceitos vais usar no interior das frameworks
- Durante o módulo, vamos **desenvolver um projeto MVC**
- Vai ser mais fácil escolher a framework e desenvolver web apps com toda a **segurança**, **performance** e **escalabilidade**



- Sem Exemplo

- Exemplo
    - php-avancado_02



### 430 - A Aplicação que Vamos Criar

- Ao longo do módulo, vamos desenvolver uma aplicação
- **Objetivo**: aplicar conceitos básicos, intermédios e avançados de PHP
- Criae uma **estrutura MVC** do zero e a aplicação web por cima dessa estrutura
    - PHP funcional
    - PHP Orientados a Objetos
    - Acesso a base de dados via PDO
    - Registos de logs
    - Queries de SQL
    - Uso de bibliotecas de JavaScript
    - Envio de emails
    - Encriptação e segurança de dados
    - Criação de PDFs
    - Importação e exploração de ficheiros (CSV e XLSX)

**BNG - Basic Name Gathering**

- Trata-se de uma empresa que angaria clientes para vendas de produtos
- Tem um conjunto de colaboradores que contactam diretamente as pessoas e recolhem os seus dados pessoais
    - nome
    - sexo
    - data de nascimento
    - email
    - telefone
    - áreas de interesse

- Os colaboradores têm acesso a uma plataforma atraves de **username** e **password**


- Cada colaboradores pode gerir os dados dos seus clientes
    - Adicionar clientes
    - Editar dados dos clientes
    - Eliminar clientes

- Cada colaborador só tem acesso aos seus clientes


**BNG - Basic Name Gathering**

- Existe um administrador que tem acesso a todos os dados e estatísticas
- O administrador é responsável po gerir os seus colaboradores

- A plataforma será uma estrura MVC e deverá:
    - Disponibilizar funcionalidades para gestão dos clientes para cada colaborador
    - Permitir ao administrador a gestão dos colaboradores
    - Permitir ainda:
        - A obtenção de dados estatísticos
        - importação e exportação de ficheiros
        - ter um registro de *logs* sobre todos os movimentos efetuados
        - acesso a *report* em PDF
        - análise dos colaboradores mais ativos

- Entre outras funcionalidades...



- Sem Exemplo

- Exemplo
    - php-avancado_03



### 431 - O que é o Composer e Como Instalar

- O que é o Composer ?

- Gestor de dependências de projetos PHP
- Permite gerir dependências ao nível de cada projeto

- **Exemplo**:

- Tens um projeto que depende de várias bibliotecas e algumas dessas bibliotecas dependem de outra


- **Com o Composer**:
    - Permite definir que biblioteca são necessárias para o projeto
    - Faz o download das bibliotecas de forma inteligente
    - Permite atualizar essas bibliotecas apenas com um comando

<p align="center">
  <img alt="...." src="../Seção 9.13 - PHP 8 Avançado/assets/composer-01.jpg" width="30%">
</p>


**Como instalamos o Composer** ?

- Podes instaklar em qualquer sistema
- Vamos ver como instalar para Windows


- Composer
    - Link: https://getcomposer.org/


- Sem Exemplo

- Exemplo
    - php-avancado_04


### 432 - Criação da Estrutura Inicial do Projeto

**Bootstrap 5**
  - Link: https://getbootstrap.com/

**Font Awesome**
  - Link: https://fontawesome.com/



**Comandos Terminal VSCode**

- Iniciar o composer
```
composer init
```


- Exemplo
    - php-avancado_05



### 433 - Autoload com Composer

- **Extensões VSCode**
  - `Fold/unfold all icone`
  - `PHP INtelephense`
  - `Random String Generator`


- Autoload `vendor`
```
composer dump-autoload -o
```


- Exemplo
    - php-avancado_06




### 434 - O Sistema de Roteamento


- Autoload 
```
composer dump-autoload -o
```

**URLs**

- http://localhost/avancado/php-avancado_07/public/?ct=novo
- http://localhost/avancado/php-avancado_07/public/?ct=novo&mt=executar
- http://localhost/avancado/php-avancado_07/public/?ct=novo&mt=executar&id=100
- http://localhost/avancado/php-avancado_07/public/?ct=novo&id=100&operacao=acao
- http://localhost/avancado/php-avancado_07/public/novo/100/acao

- Exemplo
    - php-avancado_07



### 435 - Teste ao Roteamento de Controladores

- ct
- mt
- id

**URLs**

- http://localhost/avancado/php-avancado_08/public/?ct=main&mt=index&id=10
- http://localhost/avancado/php-avancado_08/public/?ct=main&mt=teste


- Exemplo
    - php-avancado_08




### 436 - Vamos Adicionar um Ficheiro com Funções

**URLs**

- http://localhost/avancado/php-avancado_09/public/

- Autoload 
```
composer dump-autoload -o
```

- Exemplo
    - php-avancado_09


### 437 - Criar Uma Função para Debug de Resultados

**URLs**

- http://localhost/avancado/php-avancado_10/public/


- Exemplo
    - php-avancado_10



### 438 - Mecanismo Base da Camada de Visualização

**URLs**

- http://localhost/avancado/php-avancado_11/public/

- Exemplo
    - php-avancado_11



### 439 - Visualização de Dados na Nossa Aplicação

**URLs**

- http://localhost/avancado/php-avancado_12/public/

- Exemplo
    - php-avancado_12



### 440 - É Hora de Adicionar Suporte para MySQL

**URLs**

- http://localhost/avancado/php-avancado_13/public/


- Autoload
```
composer dump-autoload -o
```


- Exemplo
    - php-avancado_13


### 441 - Finalização da Nossa Framework

```sql
TRUNCATE agents
```

**URLs**

- http://localhost/avancado/php-avancado_14/public/

- Exemplo
    - php-avancado_14





### 442 - A Framework com Todas As Views

**URLs**

- http://localhost/avancado/php-avancado_15/public/

- Exemplo
    - php-avancado_15



### 443 - BNG - Início do Desenvolvimento da Aplicação

```sql
TRUNCATE agents; TRUNCATE persons;
```

**URLs**

- http://localhost/avancado/php-avancado_16/public/

- Exemplo
    - php-avancado_16



### 444 - BNG - Validação do Formulário de Login

**URLs**

- http://localhost/avancado/php-avancado_17/public/

- Exemplo
    - php-avancado_17



### 445 - BNG - Verificação do Login na Base de Dados

**URLs**

- http://localhost/avancado/php-avancado_18/public/

**Users**

- admin@bng.com - Aa123456
- agent1@bng.com - Aa123456
- agent2@bng.com - Aa123456

- Exemplo
    - php-avancado_18






### 446 - Validação de Valores com filter_var

- Documentação: https://www.php.net/manual/en/filter.filters.validate.php 

- Exemplo
    - php-avancado_19


### 447 - Encriptação de Dados com AES_ENCRYPT & AES_DECRYPT No SQL

- Exemplo
    - php-avancado_20



















































