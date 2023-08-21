##
### Seção 11 - PHP 8 e Conexão com MySQL
##



<p align="left">
  <img alt="...." src="../Seção 9.11 - PHP 8 e Conexão com MySQL/assets/PHP-logo.svg.png" width="40%">
</p>


<p align="right">
  <img alt="...." src="../Seção 9.11 - PHP 8 e Conexão com MySQL/assets/mysql.png" width="40%">
</p>





### 356 - Introdução ao Módulo




**O que vamos ver neste módulo ?**

- Já conhecemos o PHP, Já conhecemos o MySQL e o SQL
- Vamos aprender a conectar o PHP ao MySQL


**Requisitos necessários**


- Ambiente de trabalho VSCode, Laragon, e HeidiSQL
- Visualização dos módulos de PHP e MySQL
- Os conhecimentos básicos de HTML


**Como Funciona a relação entre PHP e o MySQL**


<p align="center">
  <img alt="...." src="../Seção 9.11 - PHP 8 e Conexão com MySQL/assets/php-mysql.jpg" width="70%">
</p>


- **Resultados**: Nenhum valor | Valor único| Array associativo | Array de objetos


**O MySQL, entre termos gerais**

- É um sistema de base de dados usado maioritariamente na web
- Funciona dentro de um servidor
- Perfeito tanto para pequenas como grandes aplicações
- Muito rápido, confiável e fácil de usar
- Podemos comunicar com o MySQL através de SQL standard
- Pode ser usado com muitas linguagem de programação
- É gratuito, desenvolvido e suportado pela *Oracle Corporation*


**Links**

- Visual Studio Code
  - Downloads: https://code.visualstudio.com/download
- Laragon
  - Downloads: https://laragon.org/download/index.html
- HeidiSQL
  - Downloads: https://www.heidisql.com/download.php

- Sem projeto

- Exemplo:
  - php-mysql_01




### 357 - PHP MySQLi ou PDO


- O PHP tem duas formas de ser conectar com o MySQL
  - Com a extenção **MySQLi** - *MySQL improved*
  - **PDO** - PHP Data Object

- Ambas são aceites e têm vantagens e desvantagens
- Vamos ver quais, rapidamente


**MySQL - MySQL improved**


**Vantagens**

- Pode ser usada de forma procedural ou orientada a objetos
- Tem um bom desempenho
- Sintaxe simples


**Desvantagens**

- Só permite conexão com MySQL
- Queries parametrizadas não têm parâmetros nomeados



**PDO - PHP Data Objects**


**Vantagens**

- Totalmente orientada a objetos
- Tem parâmetros nomeados
- Permite a conexão com 12 tipos de bases de dados

**Desvantagens**

- Não é tão performativo como MySQLi


**A nossa decisão**

- Iremos construir todos os exercícios recorrendo a **PDO**
- Trata-se de uma forma mais recente e a tendência é a de abondonar um dia o MySQLi e ficar apenas com PDO
- Aprender PDO também facilitará se quiserres ver como conectar via MySQLi




- Sem projeto

- Exemplo:
  - php-mysql_02





### 358 - Importação de Base de Dados e Requisitos do PDO

- Importar a base de dados

- NAKOHoG5

**Prompt**

- Verifica a versão do PHP
```
php -v
```

- Verifica as extensões ativas
```
php -m
```

- PDO
- pdo_mysql



- Exemplo:
  - php-mysql_03



### 359 - Conectar Via PDO & Controlo de Erros

- Exemplo:
  - php-mysql_04




### 360 - Obter Resultados com Execução de Queries


- Exemplo:
  - php-mysql_05




### 361 - Obter Dados em Diferentes Formatos

- Exemplo:
  - php-mysql_06


### 362 - Apresentar Dados a Partir de uma Query

- Exemplo:
  - php-mysql_07


### 363 - Apresentar os Dados numa Tabela de HTML


- seleciona os 20 primeiros clientes da tabela 

```sql
SELECT * FROM clientes LIMIT 20
```

- Exemplo:
  - php-mysql_08






### 364 - SQL Injection - O Problema de Segurança

- exp sql inject
- password: ' or ''='

- Exemplo:
  - php-mysql_09




### 365 - Mais Segurança com Consultas Parametrizadas

- Exemplo:
  - php-mysql_10


### 366 - Controlar Comunicações com Transações

- Exemplo:
  - php-mysql_11


### 367 - Conclusão Sobre o que Vimos Até Agora

- Já aprendemos a conectar o PHP com o MySQL via PDO
- Habitualmente, vamos desenvolver aplicações recorrendo a **Frameworks** PHP
  - CodeIgniter
  - CokePHP
  - Symfony
  - Laravel

- Podemos usar estes conhecimentos para pequenos projetos
  - Automações que executam tarefas simples
  - Execução de processos para alimentação de bases de dados

- A construção de uma classe pode contribuir para diminuir o tempo de desenvolvimento destas pequenas soluções


**Exemplos**

- Vamos desenvolver um conjunto de scripts que carregam dados de um ficheiro CSV e atualizam ou esmagam informação numa base de dados

- Vamos criar uma API simples que não requer frameworks

- Vamos criar um pequeno sistema que recolhe informações de uma base de dados eexporta essa informação para um ficheiro

- Vamos colocar em prática o nosso conhecimento de PHP

- Vamos criar uma classe para executar as nossas operações crud


- Sem projeto

- Exemplo:
  - php-mysql_12



### 368 - Criar Classe para Gestão de MySQL Através de PDO

- Importar base de dados
  - db_stock

- Exemplo:
  - php-mysql_13



### 369 - Criar Uma Base de Dados com PHP


- Exemplo:
  - php-mysql_14



### 370 - Submissão de Dados de um Formulário para uma Base de Dados


- Criar a base de dados
- Criação da tabela
```sql
CREATE TABLE `clientes` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`email` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`created_at` DATETIME NULL DEFAULT NULL,
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_unicode_ci'
ENGINE=InnoDB
;
```

- Pass 
  - user_meus_clientes: 45tA873IwA8a8aYIg53ud6lA6aQiTO

- “\”
- “/”

```php
<?php ?>

<?= ?>
```


- Exemplo:
  - php-mysql_15

### 371 - Apresentação de Dados do Exercício Anterior


- Exemplo:
  - php-mysql_16




### 372 - Conclusões & Exercício Prático de CRUD


- Este módulo serviu para mostrar como ligar o **PHP** ao **MySQL** via *PDO*
- Habitualmente, vamos recorrer a **frameworks** de PHP para a criação de aplicações mais complexas
- Entender os conceitos deste módulo e importante para percerber como a comunicação com a base de dados funciona
- Existem várias soluções já testatas para a substituir a "nossa" classe **Database**
- Vamos concluir este módulo com um exercício de **CRUD**.

- **CRUD** - Create, Read, Update e Delete
- Funcionalidades da aplicação:
- Gerir uma lista de contatos com **nomes** e **telefones**
  - Permitir **adicionar, editar** e **remover** contatos
  - Impedir **telefones** duplicados
  - Permitir pesquisa por nome e/ou telefone
  - Funcionalidade para **exportação dos dados** para CSV.


- **IMPORTANTE**: É apenas um exercício prático
- Em cenários profissionais, teríamos que olhar para varias questões
  - Segurança da aplicação
  - Múltiplas validações dos dados
  - Encriptação de dados pessoais na base de dados
  - Controle de rotas muito apurada
  - Vários outros aspectos

- O objetivo é colocar em prática algumas logicas de programação
- **Não deves usar este execício num cenário de produção**

- Alguns recursos ja vão estar disponiveis para poderes avançar no desenvolvimento da solução


- Sem projeto

- Exemplo:
  - php-mysql_17


### 373 - Memória Descritiva a Aplicação

**PHP PDO Contactos**

**Memória descritiva**

- **Enquadramento**:
  - Desenvolver uma aplicação PHP com acesso a base de dados MySQL que permite efetuar a gestão de contactos telefónicos com base no binómio NOME e TELEFONE.

- **Normas obrigatórias**:
  - Os nomes estão limitados a um mínimo de 3 e máximo 50 letras.
  - Os telefones estão limitados e um mínimo de 3 e máximo de 12 letras.
  - Os nomes podem surgir repetidos.
  - Os números de telefone são únicos.
  - O sistema deve conter um mecanismo de inserção, edição e eliminação de registos, bem como um espaço para pesquisa por nome e/ou telefone.
  - Por razões de operacionalidade e testagem, o sistema deverá ter uma funcionalidade para limpeza completa dos registos existentes.
  - Ao lado do sistema enunciado anteriormente, deve existir um link para download de toda a informação em formato CSV.

- **Descrição da aplicação**:
- A página inicial deverá apresentar um campo de pesquisa do lado esquerdo e do lado direito um botão para adição de novos registos.
- Imediatamente abaixo, deverá ser apresentado o resultado da pesquisa, ou todos os registos se não houver pesquisa, em formato de tabela.
- Deverá ser apresentada uma informação no caso de não existirem registos.
- A tabela deverá apresentar 4 colunas: Nome, Telefone, Editar e Eliminar.
- A tabela deverá, quando apresentada, mostrar o total de registos apresentados.
- A funcionalidade de adição de novos registos deverá obrigar a definir nome e telefone. O telefone deve ser único, não sendo permitido guardar um número de telefone que tenha sido anteriormente atribuído a outro registo.
- A funcionalidade de edição de registos existentes deve apresentar os dados a editar no formulário, deve permitir que ambos sejam editáveis e não permitir que o telefone seja alterado para um número que já exista na base de dados associado a outro registo.
- A eliminação de cada registo deve ser objeto de confirmação.
- A eliminação de todos os registos deve ser objeto de confirmação.




- Exemplo:
  - php-mysql_18




### 374 - Apresentação do HTML da Aplicação



- Exemplo:
  - php-mysql_19



### 375 - Desenvolvimento das Regras de Negócio - Parte 1

- pswd-1: NAKOHoG5
- pswd-2: d6VONaXIN8vA3ab5mogI3uYizuseFO

- Exemplo:
  - php-mysql_20


### 376 - Desenvolvimento das Regras de Negócio - Parte 2


- Exemplo:
  - php-mysql_21



### 377 - Desenvolvimento das Regras de Negócio - Parte 3


- Exemplo:
  - php-mysql_22



### 378 - Desenvolvimento das Regras de Negócio - Parte 4


- Exemplo:
  - php-mysql_23



### 379 - Desenvolvimento das Regras de Negócio - Parte 5


- Exemplo:
  - php-mysql_24



### 380 - Desenvolvimento das Regras de Negócio - Parte 6


- Exemplo:
  - php-mysql_25



### 381 - Conclusões

- Sem projeto

- Exemplo:
  - php-mysql_26


































