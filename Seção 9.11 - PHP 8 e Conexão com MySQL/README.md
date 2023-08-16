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

- Sem projeto

- Exemplo:
  - php-mysql_12



### 368 - Criar Classe para Gestão de MySQL Através de PDO


- Exemplo:
  - php-mysql_13



### 369 - Criar Uma Base de Dados com PHP


- Exemplo:
  - php-mysql_14



### 370 - Submissão de Dados de um Formulário para uma Base de Dados


- Exemplo:
  - php-mysql_15



### 371 - Apresentação de Dados do Exercício Anterior


- Exemplo:
  - php-mysql_16




### 372 - Conclusões & Exercício Prático de CRUD


- Sem projeto

- Exemplo:
  - php-mysql_17


### 373 - Memória Descritiva a Aplicação


- Sem projeto

- Exemplo:
  - php-mysql_18










