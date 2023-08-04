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
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/tabela.jpg" width="70%">
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
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/selectallfrom.jpg" width="70%">
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
  <img alt="...." src="../Seção 9.10 - MySQL & SQL Básico/assets/nomes-asc.jpg" width="70%">
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


- Sem Projeto

- Exemplo:
  - mysql-sql_05
