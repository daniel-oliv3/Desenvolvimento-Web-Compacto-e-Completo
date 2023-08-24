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





















