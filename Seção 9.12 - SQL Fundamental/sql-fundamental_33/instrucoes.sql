/*
Podemos criar tabelas dentro de bases de dados usando SQL.
Vamos ver um exemplo simples. 
*/

CREATE TABLE `tabela_teste` (
	`id` INT NOT NULL,
	`nome` VARCHAR(50) NULL DEFAULT NULL,
	`email` VARCHAR(50) NULL DEFAULT NULL,
	`created_at` DATETIME NULL,
	PRIMARY KEY (`id`)
)

/*
O que significa o este código?
CREATE TABLE e o nome da tabela. Parece simples de entender.
Logo depois, vem um parêntisis dentro do qual vamso descrever
cada uma das colunas que queremos colocar dentro da tabela.

Cada uma das colunas começa por ter um nome e um Data Type.
Logo depois, vem a indicação se a coluna aceita valores NULL ou não.
Depois pode surgir o valor atribuído por padrão (DEFAULT)

Cada uma das instruções para criação das colunas está separada
por uma virgula. No final, temos a expressão PRIMARY KEY e o nome da coluna
que vai ter a chave primária.

É claro que a estrutura pode ser bem mais complexa.
Ainda assim, é importante referir que, para projetos de complexidade
baixa ou média, na maior parte dos casos vais criar a estrutura da base
de dados e respetivas tabelas através de uma aplicação de gestão.

Em aplicações com maior complexidade, podes ter funcionalidades
que permitem adicionar tabelas nas tuas bases de dados.

Vamos olhar para um esquema mais complexo.
*/

CREATE TABLE `clientes` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(100) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`sexo` VARCHAR(1) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`data_nascimento` DATETIME NULL DEFAULT NULL,
	`email` VARCHAR(50) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`telefone` VARCHAR(10) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`morada` VARCHAR(50) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`cidade` VARCHAR(50) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`cliente_ativo` TINYINT(3) UNSIGNED NULL DEFAULT NULL,
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=201

/*
Esta é a query que seria necessária para criar a tabela dos clientes
da nossa base de dados udemy_loja_online.

A explicação é relativamente simples, mas há alguns termos que
devemos explicar um pouco melhor:

UNSIGNED - A coluna não vai aceitar valores negativos.

AUTO_INCREMENT - A coluna tem agregado um sistema que vai atribuir
automaticamente e de forma sequencial um valor numérico que vai permitir
identificar de forma única cada registo. No MySQL esse valor começa no 1.

COLLATE - fornecer regras de ordenação, como trata maiúsculas e minúsculas,
como são tratados os acentos nas letras, etc.
Existem enúmeras strings para definir a COLLATION.

USING BTREE - Permite que o índice da chave primária funcione mais
rápido. O índice é fundamental para acelerar os processos de pesquisa
nas tabelas, quando usamos cláusulas nas queries.

ENGINE=InnoDB - É um motor de armazenamento para o sistema de
gestão de bases de dados MySQL e MariaDB.

Alguns destes conceitos são um pouco mais avançados e só vais ter
necessidade de aprofundar muito os teus conhecimentos sobre elas
em situações muito concretas ou se a tua atividade envolver muito
a gestão das infraestruturas.

Mas vejamos no HeidiSQL onde podes ir buscar informação sobre
a criação das tabelas e, dessa forma, perceber como as tuas opções
de criação podem ser transformadas em SQL.
*/