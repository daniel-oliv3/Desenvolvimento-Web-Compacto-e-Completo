##
### Seção 10 - MySQL & SQL Básico
##




<p align="center">
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/mysql.png" width="70%">
</p>



### 339 - Introdução ao Módulo


**O que vamos estudar neste módulo ?**

- Módulo introdutório ao **MySQL** e **SQL**.
- Conhecimento básico para o módulo **PHP** e **MySQL**.
- Principais conhecimentos sobre **MySQL**, **SGBDs**, Bases de dados relacionais 
- O que é **Structured Query Language**, etc...
- Conceiros e terminologias
- Introdução básica a execução de *queries* de **SQL**. 

- Sem Projeto

- Exemplo:
  - mysql-sql_01




### 340 - O que é uma Base De Dados

**Imagina o seguinte cenário**

- És proprietario de uma loja
- Tens centenas de clientes, que fazem centenas de compras.
- Como guardar essas informação?

- Podes guardar cada ficha de cliente num ficheiro de texto.
- Podes guardar cada compra num ficheiro de texto


- Ou criar um único ficheiro para clientes e compras


**Qual é o problema?**

- Como consegues rapidamente obner a ficha de um cliente?
- Como consegues ver todas as compras de um cliente?
- Como consegues ver o total de compras feitas num dia?

- Tens que ter uma alternativa aos ficheiros de texto
- Uma orgazinação de informação mais **eficiente** e **rápida**.


*Este é um mundo das bases de dados*


**O que é uma base de dados ?**

- É uma coleção estruturada e organizada de informação (dados)
- Guardada eletronicamente num sistema informático.


**O que é um DBMS (SGBD) ?**

- Database Management System.
- Sistema de gestão de base de dados.
- São sistemas otimizados para gerir essa informação.
- Quando dizemos "vamos criar uma base de dados" estamos dizendo que vamos usar o SGBD para criar uma nova estrutura para os dados da nossa aplicação.


<p align="center">
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/base-de-dados.jpg" width="70%">
</p>



- Sem Projeto

- Exemplo:
  - mysql-sql_02



### 341 - O que é o MySQL ?

**O que é o MySQL ?**

- É um sistema de gestão de **Bases de Dados Relacionais**.
- É suportado pela Oracle e é *open-source*
- Podemos usar livremente a nível particular ou comercial.
- É um dos sistemas mais populares para bases de dados na web.


<p align="center">
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/bases-de-dados.jpg" width="70%">
</p>

**O que é uma Base de Dados Relacional ?**

- É uma das arquiteturas de bases de dados
- Os dados são armazenados em **tabelas**.
- As tabelas podem ter relações entre si através de **chaves**
- A comunicação com a base de dados é feita com **SQL**.

**O que é SQL ?**


- SQL = Structured Query Language
- Linguagem usada para contruir **queries**
- As **queries** são intruções para comunicação com a base de dados.

- Com o **SQL** podemos pesquisar, inserir, atualizar e eliminar dados, bem como alterar a estrutura da nossa base de dados.


<p align="center">
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/exemplode-tabela-simples.jpg" width="70%">
</p>

- Vamos perceber com mais detalhes o que é o **SQL**
- E como podemos comunicar com a base de dados


- NOTA: 


- Sem Projeto

- Exemplo:
  - mysql-sql_03




### 342 - A Structured Query Language (SQL)

**O que é SQL ?**

- SQL = Structured Query Language
- Linguagem usada para comunicar com bases de dados relacionais.
- A comunicação processa-se através de **queries**.
- As **queries** permitem pesquisdar, inserir, atualizar e eliminar dados, bem como alterar a estrutura da nossa base de dados.

**Vamos entender melhor com um exemplo**

<p align="center">
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/tabela.jpg" width="40%">
</p>

- Desafios:
  - Como Conseguir obter todos os dados da tabela?
  - Como conseguir obter os dados apenas do cliente cujo **id** é igual a 5?
  - Como conseguir obter apenas os nomes dos meus clientes?
  - Como obtenho todos os dados dos clientes ordenados por ordem alfabética do nome?


**Exemplos Desafio**

- Como Conseguir obter todos os dados da tabela?

```sql
SELECT * FROM Clientes
```

<p align="center">
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/selectallfrom.jpg" width="40%">
</p>


- Como conseguir obter os dados apenas do cliente cujo **id** é igual a 5?


```sql
SELECT * FROM Clientes WHERE id = 5
```

<p align="center">
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/id=5.jpg" width="50%">
</p>



- Como conseguir obter apenas os nomes dos meus clientes?

```sql
SELECT nome FROM Clientes
```

<p align="center">
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/nomes-tabela-pesquisa.jpg" width="10%">
</p>


- Como obtenho todos os dados dos clientes ordenados por ordem alfabética do nome?

```sql
SELECT * FROM Clientes ORDER BY nome ASC
```

<p align="center">
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/nomes-asc.jpg" width="40%">
</p>


**Resumo**

- Esta foi apenas uma *visão muito introdutória* sobre SQL.
- SQL é o padrão para comunicar com as bases de dados relacionais
- Com poucas diferenças, o SQL é usado em qualquer SGBD relacional
- Iremos aprender com muito detalhe como escrever Queries de SQL


- Sem Projeto

- Exemplo:
  - mysql-sql_04









### 343 - Conceitos & Termos Principais nas Bases de Dados Relacionais

**Quais são os conceitos e termos principais a saber ?**

**Base de dados relacional**

- Base de dados organizado em tabelas e onde podem existir relações de dados entre essas tabelas

**Tabela**

- Uma estrutura de dados constituida por **linhas** e **colunas**

**Query**

- Expressão de SQL para comunicar com a base de dados

**Data Typer**

- Cada coluna tem um tipo de dados próprio. Ainda não vimos esse aspecto. Podem conter inteiros, strings, datas, etc...


##


**Relações**

- Duas tabelas podem estar interligadas, Exemplo:

<p align="center">
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/relacionamento-01.jpg" width="50%">
</p>


**Primary Key (PK)**

- A chave primária é um valor único usado para relacionar dados entre tabelas. Só podem existir uma PK por cada tabela


**Foreign Key (FK)**

- A chave estrageira é um valor que dá suporte a chave primária na execução de queries que devolvem resultados relacionais



**Relação de um para muitos**

- É a relação mais comun numa base de dados relacional. Uma tabela de pessoas, por exemplo, e outra tabela com os emails das pessoas, Cada pessoa pode ter mais do que um email

<p align="center">
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/relacionamento-02.jpg" width="50%">
</p>


**Relação de muitos para muitos**

- É a relação em que uma tabela A tem vários registros relacionados com uma tabela B e vice-versa


<p align="center">
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/relacionamento-03.jpg" width="50%">
</p>



**Relação de uma para um**

- A tabela A tem vários registros todos diferentes, e a tabela B só tem um registro relacionado com cada registro da tabela A


<p align="center">
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/relacionamento-04.jpg" width="50%">
</p>


##

- Estruturar corretamente uma base de dados é fundamental
- Saber usar ferramentas de gestão, também é importante
  - Vamos criar um *schema* de uma base de dados
  - Criar essa base de dados em diferentes **aplicações**
  - Perceber que **data types** podemos usar
  - Como criar chaves primárias e estrangeiras
  - Como criar relações entre tabelas
  - Aprender instruções básicas de SQL



- Sem Projeto

- Exemplo:
  - mysql-sql_05






### 344 - Schema de Base de Dados & Data Types

**O que é um Schema de uma base de dados e dos Datatypes?**

O *Schema* não é mais do que a estrutura das tabelas e as suas relações, Serve para definir as tabelas, as suas colunas, os tipod de dados de cada coluna entre características, as relações entre as tabelas, etc...


Os *Data Types* são tipos de dados que cada coluna de cada tabela vai permitir armazenar, Por exmplo, uma coluna pode armazenar valores numéricos, outra pode receber valores string e outro pode receber valores do tipo data e hora

**O que é necessário para criar uma base de dados MySQL ?**

- Em primeiro lugar vamos necessitar do servidor de MySQL.
- Existem várias formas de criar bases de dados. As principais são:
  - Utilizando SQL diretamente através de uma linguagem de programação
  - Recorrer a uma aplicação que, visualmente, permite a gestão
  - Através de mecanismos de importação de bases de dados existentes


**HeidiSQL** 

- Para criar bases de dados
- Site:
  - https://www.heidisql.com/


**Data Type**

- O **Data Type** de uma coluna define que valor essa coluna vai permitir
- Existem mais de 30 data types, mas na maior parte dos casos, não vai usar todos. Apenas alguns dos quais podemos destacar:
  - **Integer** - Valores numéricos inteiros
  - **Float** - Valores numéricos com casas decimais
  - **Varchar** - Valores alfanuméricos (Strings)
  - **DateTime** - Valores relacionados com datas e horas


- Sem Projeto

- Exemplo:
  - mysql-sql_06





### 345 - Criar uma Base de Dados com HeidySQL

**HeidiSQL** 

- HeidiSQL
  - Site: https://www.heidisql.com/

**Laragon**

- Laragon
  - Site: https://laragon.org/
  - Downloads: https://laragon.org/download/


**Base de Dados**

- Criação da base de dados `contatos`
```sql
CREATE DATABASE `contatos` /*!40100 COLLATE 'utf8_unicode_ci' */
```

- Sem Projeto

- Exemplo:
  - mysql-sql_07




### 346 - Criação de Tabelas da Base de Dados

**Base de Dados**

- contatos

- Criação da tabela `amigos` 
```sql
CREATE TABLE `amigos` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`created_at` DATETIME NULL DEFAULT NULL,
	`updated_at` DATETIME NULL DEFAULT NULL,
	`deleted_at` DATETIME NULL DEFAULT NULL,
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_unicode_ci'
ENGINE=InnoDB
;
```


- Criação da tabela `telefones` 
```sql
CREATE TABLE `telefones` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`id_amigo` INT(10) UNSIGNED NULL DEFAULT NULL,
	`numero` VARCHAR(30) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`created_at` DATETIME NULL DEFAULT NULL,
	`updated_at` DATETIME NULL DEFAULT NULL,
	`deleted_at` DATETIME NULL DEFAULT NULL,
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_unicode_ci'
ENGINE=InnoDB
;

```

- Sem Projeto

- Exemplo:
  - mysql-sql_08





### 347 - Definição de Chaves & Relações dentro da Base de Dados

- Chave estrangeira

```sql
CREATE TABLE `telefones` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`id_amigo` INT(10) UNSIGNED NULL DEFAULT NULL,
	`numero` VARCHAR(30) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
	`created_at` DATETIME NULL DEFAULT NULL,
	`updated_at` DATETIME NULL DEFAULT NULL,
	`deleted_at` DATETIME NULL DEFAULT NULL,
	PRIMARY KEY (`id`) USING BTREE,
	INDEX `FK_telefones_amigos` (`id_amigo`) USING BTREE,
	CONSTRAINT `FK_telefones_amigos` FOREIGN KEY (`id_amigo`) REFERENCES `contatos`.`amigos` (`id`) ON UPDATE RESTRICT ON DELETE CASCADE
)
COLLATE='utf8_unicode_ci'
ENGINE=InnoDB
;
```

- Sem Projeto

- Exemplo:
  - mysql-sql_09





### 348 - Inserção de Registos na Base de Dados Via SQL

- Como inserir um registro

```sql
INSERT INTO amigos VALUES(0, "Joaquim", "2030-10-01 12:30:10", "2030-10-01 12:30:10", NULL)
```

- Como adicionar um telefone a um id especifico

```sql
INSERT INTO telefones VALUES(0, 4, "35813142", NOW(), NOW(), NULL)
```

- Como adicionar dois telefones a um id especifico

```sql
INSERT INTO telefones VALUES(0, 2, "2215202", NOW(), NOW(), NULL);
INSERT INTO telefones VALUES(0, 2, "2215555", NOW(), NOW(), NULL);
```

- Como selecionar todos os números de telefones

```sql
SELECT * FROM telefones
```

- Como deletar um telefone de um id especifico

```sql
DELETE FROM amigos WHERE id = 4
```


- Sem Projeto

- Exemplo:
  - mysql-sql_10










### 349 - Como Eliminar & Importar Bases de Dados


- Dump
  - base_dados_contactos.sql

- Exemplo:
  - mysql-sql_11



### 350 - Introdução às Instruções de SQL - Parte 1

- Dump
  - base_dados_contactos.sql

**Consultas SQL**

- Lista todos os dados da tabela de amigos

```sql
SELECT * FROM amigos
```

- Lista apenas os nomes dos amigos

```sql
SELECT nome FROM amigos
```

- Lista os nomes dos amigos por ordem alfabética

```sql
SELECT nome FROM amigos ORDER BY nome ASC
```

- Lista apenas o amigo cujo id = 2

```sql
SELECT * FROM amigos WHERE id = 2
```


- Lista todos os telefones do amigo cujo id = 5

```sql
SELECT * FROM telefones WHERE id_amigo = 5
```

```sql
-- Neste resultado a tabela apresenta os telefones, mas não apresenta 
-- o nome do amigo, quero apenas o nome do amigo e os respectivos telefones
```

- Solução

```sql
SELECT amigos.nome, telefone.numero
FROM amigos, telefones
WHERE amigos.id = telefones.id_amigo
AND telefones.id_amigo = 5
```


- Quero apenas os telefones da amiga chamada Cristina

```sql
SELECT amigos.nome, telefones.numero FROM amigos, telefones
WHERE amigos.id = telefones.id_amigo
AND amigos.nome = "Cristina"
```


- Quero a mesma query, mas com o nome da coluna igual ao nome da Cristina

```sql
SELECT telefones.numero 'Cristina' FROM amigos, telefones
WHERE amigos.id = telefones.id_amigo
AND amigos.nome = "Cristina"
```

- Quero a mesma query, mas com o nome da coluna igual ao nome da Cristina

```sql
-- Exemplo 2
SELECT telefones.numero AS 'Cristina' FROM amigos, telefones
WHERE amigos.id = telefones.id_amigo
AND amigos.nome = "Cristina"
```


**NOTA**: 

- Comentários em SQL

```sql
-- SELECT * FROM amigos
```

- Exemplo:
  - mysql-sql_12












### 351 - Introdução às Instruções de SQL - Parte 2

- Dump
  - base_dados_contactos.sql

```sql
-- Vamos executar queries de atualização, inserção e eliminação de dados.

-- C R U D

-- Create
-- Read (Select)
-- Update
-- Delete
```

**Consultas SQL**

- Atualizar o nome de Cristina para Maria

```sql
UPDATE amigos SET nome = "Maria" WHERE nome = "Cristina"
```

- Atualizar todos os telefones que começam pelo algarismo 5 e vão passar a ser iniciados por 10 mais o número que ja existe

```sql
UPDATE telefones SET numero = (10, numero) WHERE numero LIKE '5%'
```

- Selecionar número começado por 5

```sql
SELECT *FROM telefones WHERE numero LIKE '5%'
```

- Atualizar todos os telefones do joao para que fiquem apenas com dois últimos algarismos 

```sql
UPDATE telefones SET numero = SUBSTRING(numero, 2, 2)
WHERE telefones.id_amigo = (SELECT id FROM amigos WHERE nome = 'Joao')
-- SubQueries
```


- Adicionar mais 1 amigo (apenas o nome)

```sql
INSERT INTO amigos(nome) VALUES('Hugo')
```


- Adicionar mais 3 amigo numa única query

```sql
INSERT INTO amigos VALUES
(7, 'Daniel', NOW(), NOW(), NULL),
(8, 'Priscila', NOW(), NOW(), NULL),
(9, 'Damasceno', NOW(), NOW(), NULL),
```

- Deletar o amigo cujo id e igual 2

```sql
DELETE FROM amigos WHERE id = 2
```

```sql
-- O mecanismo elimina o amigo e todos os
-- Telefones relacionados (integridade referencial)
```

- Deletar todos os amigos cujos nomes começam pela letra 'D'

```sql
DELETE FROM amigos WHERE nome LIKE 'D%'
```


- Deletar todos os registros das duas tabelas

```sql
DELETE FROM amigos 
```

```sql
-- Vai aparecer uma mensagem indicando que esta operação vai 
-- ser arriscada porque não tem uma cláusula  WHERE
```

##

- Alterar o auto incremento da tabela

```sql
ALTER TABLE amigos AUTO_INCREMENT = 1;
ALTER TABLE telefones AUTO_INCREMENT = 1;
```


- Exemplo:
  - mysql-sql_13












### 352 - Exportar & Importar Bases De Dados no HeidiSQL

- Exemplo:
  - mysql-sql_14



### 353 - Criar uma Base de Dados com MySQL Workbench

- MySQL Workbench
  - Site: https://dev.mysql.com/downloads/workbench/

**SQL**

- Criação de uma nova base de dados

```sql
CREATE SCHEMA `loja_online` ;
```

- Criação da tabela loja_online

```sql
CREATE TABLE `loja_online`.`clientes` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome_cliente` VARCHAR(55) NULL,
  `created_at` DATETIME NULL,
  PRIMARY KEY (`id`));
```

- Inserindo registros a tabela

```sql
INSERT INTO `loja_online`.`clientes` (`nome_cliente`, `created_at`) VALUES ('Daniel', '2030-01-10 12:30:10');
INSERT INTO `loja_online`.`clientes` (`nome_cliente`, `created_at`) VALUES ('Priscila', '2030-01-10 12:30:10');
INSERT INTO `loja_online`.`clientes` (`nome_cliente`, `created_at`) VALUES ('Carlos', '2030-01-10 12:30:10');
```

- Selecionar dados

```sql
SELECT nome_cliente FROM loja_online.clientes;
```


- Exemplo:
  - mysql-sql_15





### 353 - Criar uma Base de Dados com PhpMyAdmin

**PhpMyAdmin**

- PhpMyAdmin
  - Site: https://www.phpmyadmin.net/
  - Dowmloads: https://files.phpmyadmin.net/phpMyAdmin/5.2.1/phpMyAdmin-5.2.1-all-languages.zip

- Copiar o arquivo baixado (phpMyAdmin) na pasta `C:\laragon\etc\apps`

- Fazer uma copia e alterar essa copia do arquivo `config.sample.inc.php`, para `config.inc.php`
- Editar o ficheiro `config.inc.php`


- PhpMyAdmin 
  - Localhost: http://localhost/phpmyadmin/


**Criação da Base de Dados**

- Exemplo:
  - mysql-sql_16






























