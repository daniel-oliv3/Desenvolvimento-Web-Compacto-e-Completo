##
### Seção 12 - SQL Fundamental
##



<p align="center">
  <img alt="...." src="../Seção 9.12 - SQL Fundamental/assets/sql-database.png" width="30%">
</p>



### 382 - Introdução ao Módulo

**Antes de iniciar o módulo, o que é MySQL e SQL ?**

- MySQL - sistema de gestão de bases de dados relacionais
- SQL - structured query language
- MySQL usa o SQL para leitura e manipulação dos dados


**O que vamos estudar neste módulo ?**

- Como efetuar **queries** de *SQL* a uma base de dados usando o MySQL


**Requisitos necessários**:

- Ambiente de trabalho **Laragon** e **HeidiSQL**
- Importação de uma base de dados fornecida no módulo

- Vamos fazer também a importação para o **MySQL Workbench** e **PHPMyAdmin**


**O que contém a base de dados ?**

- Simulação de uma loja online com:
    - 200 clientes
    - 20 colaboradores
    - 25 produtos (frutos)
    - 10 mil encomendas

- Alguns clientes e colaboradores não estão ativos, logo, não estão envolvidos em emcomendas


**Como estão relacionados os dados ?**


<p align="center">
  <img alt="...." src="../Seção 9.12 - SQL Fundamental/assets/sql-fun.jpg" width="70%">
</p>


**Como são habitualmente devolvidos os resultados?**

- Em **PHP** são frequentemente recebidos como **arrays associativos** ou arrays de **objetos**


<p align="center">
  <img alt="...." src="../Seção 9.12 - SQL Fundamental/assets/arrays-assc.jpg" width="70%">
</p>


**Como são habitualmente devolvidos os resultados ?**

- Em **JavaScript** são frequentemente recebidos como:
    - **JSON** (JavaScript Object Notation)
    - Arrays de **objetos**
    - Arrays **associativos** (menos comum)


- Base de dados
    - udemy_loja_online


- **Laragon**
  - Downloads: https://laragon.org/download/index.html

- **HeidiSQL**
  - Downloads: https://www.heidisql.com/download.php

- **MySQL Workbench**
  - Downloads: https://dev.mysql.com/downloads/workbench/

- **PHPMyAdmin**
  - Localhost: http://localhost/phpmyadmin/

- **Visual Studio Code**
  - Downloads: https://code.visualstudio.com/download


- Sem projeto

- Exemplo:
    - sql-fundamental_01


### 383 - Importação da Base de Dados & Utilização no HeidiSQL


**Comandos SQL**

- Selecionar todos os clientes 

```sql
SELECT * FROM clientes
```

- Sem projeto

- Exemplo:
    - sql-fundamental_02





### 384 - Importação da Base de Dados & Utilização no MySQL Workbench



- **DICAS**

```txt

Como deixar o Workbenche no Tema Escuro

Abra o MySQL Workbench. No menu superior, clique em "Edit" (Editar) e selecione "Preferences" (Preferências). Na janela de preferências, localize e clique em "Appearance" (Aparência) no painel esquerdo. No painel direito, você deve encontrar a opção "Interface Theme" (Tema da Interface).

Not
```

- Sem projeto

- Exemplo:
    - sql-fundamental_03




### 385 - Importação da Base de Dados & Utilização no PhpMyAdmin

- Clicar no btn direito no Laragon MySQL/PhpMyAdmin

- PhpMyAdmin
  - Localhost: http://localhost/phpmyadmin/



- Sem projeto

- Exemplo:
    - sql-fundamental_04



### 386 - Algumas Notas Sobre a Sintaxe Do SQL

- Antes de avançar com os exemplos, apenas algumas notas sobre a sintaxe do **SQL**


- As palavras reservadas são case-insensitive
```sql
SELECT = select
```

- Podemos criar **queries** numa linha ou múltiplas linhas
- Podemos efetuar imensas operações numa BD através de SQL
- Nem todas as funlçoes de SQL estão disponíveis de igual modo em diferentes Sistemas de Gestão de Bases de Dados




- Sem projeto

- Exemplo:
    - sql-fundamental_05






### 387 - Introdução ao SELECT


- Exemplo:
    - sql-fundamental_06




### 388 - Ordenar Dados com ORDER BY

- Exemplo:
    - sql-fundamental_07



### 389 - Limitar o Número de Registos com LIMIT & OFFSET

- Exemplo:
    - sql-fundamental_08



### 390 - Obter Dados Únicos com DISTINCT

- Exemplo:
    - sql-fundamental_09



### 391 - Introdução à Cláusula WHERE

- Exemplo:
    - sql-fundamental_10



### 392 - Operadores de Comparação

- Exemplo:
    - sql-fundamental_11




### 393 - Operadores Lógicos - Parte 1

- Exemplo:
    - sql-fundamental_12




### 394 - Operadores Lógicos - Parte 2

- Exemplo:
    - sql-fundamental_13



### 395 - IS NULL & IS NOT NULL


- Exemplo:
    - sql-fundamental_14





### 396 - Alias

- Exemplo:
    - sql-fundamental_15


### 397 - CONCAT & CONCAT_WS

- Exemplo:
    - sql-fundamental_16



### 398 - Organização das Instruções de uma Query

- Exemplo:
    - sql-fundamental_17



### 399 - Introdução as JOINS

- **(INNER) JOIN**: 
    - Registros de retorno que têm valores correspondentes em ambas as tabelas
- **LEFT (OUTER) JOIN**: 
    - Retorna todos os registros da tabela da esquerda, e os registros combinados da tabela da direita
- **RIGHT (OUTER) JOIN**: 
    - Retorna todos os registros da tabela da direita, e os registros combinados da tabela da esquerda
- **FULL (OUTER) JOIN**:
    - Devolve todos os registros quando há uma correspobdência na tabela da esquerda ou da direita

**Tipos diferentes de JOINS**

<p align="center">
  <img alt="...." src="../Seção 9.12 - SQL Fundamental/assets/SQL-JOIN.jpg" width="70%">
</p>


- Exemplo:
    - sql-fundamental_18


### 400 - Exercícios Práticos com JOINS - Parte 1

- Exemplo:
    - sql-fundamental_19



### 401 - Exercícios Práticos com JOINS - Parte 2

- Exemplo:
    - sql-fundamental_20


### 402 - Funções de Agregação - COUNT

- Exemplo:
    - sql-fundamental_21



### 403 - Funções de Agregação - MIN & MAX

- Exemplo:
    - sql-fundamental_22


### 404 - Funções de Agregação - AVG & SUM

- Exemplo:
    - sql-fundamental_23


### 405 - Introdução ao Uso de Subqueries & GROUP BY

- Exemplo:
    - sql-fundamental_24


### 406 - GROUP BY com Mais Exemplos

- Exemplo:
    - sql-fundamental_25


### 407 - HAVING

- Exemplo:
    - sql-fundamental_26
  

### 408 - UNION & UNION ALL

- Exemplo:
    - sql-fundamental_27


### 409 - Simples Case & Searched Case

- Exemplo:
    - sql-fundamental_28


### 410 - INSERT

- Exemplo:
    - sql-fundamental_29



### 411 - UPDATE

- Exemplo:
    - sql-fundamental_30



### 412 - DELETE

- Exemplo:
    - sql-fundamental_31


### 413 - SQL Data Type


- Numa base de dados, cada coluna aceita um tipo de dado específico
- O tipo de dados são designados por **Data Types**
- Uma coluna pode aceitar números, textos, datas, etc.
- Cada SGBD tem um vasto conjunto de **Data Types**
- A maior parte dos Data Types são comuns aos SGDBs relacionais
- Vamos conhecer os Data Types mais significativos no MySQL

**Data Types de Texto**

<p align="center">
  <img alt="...." src="../Seção 9.12 - SQL Fundamental/assets/datatype_01.jpg" width="70%">
</p>


**Data Types de Números**

<p align="center">
  <img alt="...." src="../Seção 9.12 - SQL Fundamental/assets/datatype_02.jpg" width="70%">
</p>


**Data Types de Datas e Horas**

<p align="center">
  <img alt="...." src="../Seção 9.12 - SQL Fundamental/assets/datatype_03.jpg" width="70%">
</p>


- Os **Datas Types** têm particular importâncias nas seguintes situações:
    - Quando estamos a construir ou alterar uma tabela
    - Quando vamos inserir ou atualizar dados

- Podemos contruir tabelas usando as aplicações de gestão
- Podemos contruir tabelas usando **SQL**
- É isso ai 


- Sem projeto

- Exemplo:
    - sql-fundamental_32


### 414 - CREATE TABLE

- Exemplo:
    - sql-fundamental_33



### 415 - Primary Key & Foreing Key

- Exemplo:
    - sql-fundamental_34



### 416 - ALTER TABLE

- Exemplo:
    - sql-fundamental_35



### 417 - DROP TABLE & TRUNCATE Table

- Exemplo:
    - sql-fundamental_36


### 418 - Exercícios com a Loja Online - Parte 1

- Exemplo:
    - sql-fundamental_37


### 419 - Exercícios com a Loja Online - Parte 2

- Exemplo:
    - sql-fundamental_38


### 420 - Exercícios com a Loja Online - Parte 3

- Exemplo:
    - sql-fundamental_39



### 421 - Inserir uma Nova Encomenda na Loja Online

- Exemplo:
    - sql-fundamental_40



### 422 - Eliminar uma Nova Encomenda na Loja Online

- Exemplo:
    - sql-fundamental_41


### 423 - Funções do SQL que Podem Ser Úteis - Strings - Parte 1

- Exemplo:
    - sql-fundamental_42



### 424 - Funções do SQL que Podem Ser Úteis - Strings - Parte 2

- Exemplo:
    - sql-fundamental_43



### 425 - Funções do SQL que Podem Ser Úteis - Números

- Exemplo:
    - sql-fundamental_44



### 426 - Funções do SQL que Podem Ser Úteis - Datas & Horas

- Exemplo:
    - sql-fundamental_45


### 427 - Considerações Finais do Módulo

- Exemplo:
    - sql-fundamental_46




















































































































































