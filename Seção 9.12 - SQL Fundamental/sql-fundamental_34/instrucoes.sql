/*
Neste vídeo vamos falar suscintamente sobre
PRIMARY KEY
FOREIGN KEY

Uma tabela consiste num conjunto de colunas e linhas.

Tipicamente, uma tabela tem uma coluna cujos valores identificam 
de forma única cada linha da tabela. 
Esta coluna é chamada a chave primária.

Cada tabela tem apenas uma chave primária. 
A chave primária não aceita NULL ou valores duplicados.

As vantagens mais significativas de uma chave primária são: 
> Identifica de forma única cada linha de uma tabela. 
> Obtém um índice único para cada coluna de chave primária 
  que ajuda com um acesso mais rápido a esse valor.

Basicamente a existência de uma chave primária permite
acelerar o processo de pesquisa, inserção, atualização e eliminação
dos dados. Existem explicações mais técnicas sobre a forma
como essa optimização funciona na prática, mas não é
fundamental conheceres esses meandros dos bastidores do SGBD.


Uma chave estrangeira é uma coluna que impõe uma ligação entre
os dados em duas tabelas. Numa referência de chave estrangeira, 
a coluna de chave primária da Tabela A é referenciada pela coluna 
da Tabela B. A coluna da Tabela A torna-se a chave estrangeira.

Este binómio PRIMARY KEY e FOREIGN KEY assume um papel fundamental
na integridade referencial de duas tabelas.
Vejamos um exemplo prático simples.
*/

/*
Vamos criar duas tabelas. 
*/

-- socios -----------------------------
CREATE TABLE `socios` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(50) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	
    PRIMARY KEY (`id`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;

-- socios_telefones -----------------------------
CREATE TABLE `socios_telefones` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`id_socio` INT(10) UNSIGNED NULL DEFAULT NULL,
	`telefone` VARCHAR(20) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	
    PRIMARY KEY (`id`) USING BTREE,
	
    INDEX `FK_socios_telefones_socios` (`id_socio`) USING BTREE,
	
    CONSTRAINT `FK_socios_telefones_socios` 
    FOREIGN KEY (`id_socio`) 
    REFERENCES `socios` (`id`) 
    ON UPDATE NO ACTION ON DELETE CASCADE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;


/*
Agora vamos adicionar 3 registos de socios na primeira tabela.
Depois vamos adicionar vários registos de telefones relacionados
com os sócios. 
*/

INSERT INTO socios VALUES
(0,'joao'),
(0,'ana'),
(0,'carlos')

INSERT INTO socios_telefones VALUES
(0,1,'110'),
(0,1,'111'),
(0,1,'112'),
(0,2,'220'),
(0,2,'221'),
(0,2,'222'),
(0,3,'330'),
(0,3,'331'),
(0,3,'332')

/*
Neste momento a tabela sócios tem 3 nomes.
Relacionados com esses 3 nomes, a tabela socios_telefones
tem 3 telefones para cada um dos socios.

O facto de existir uma relação entre as duas tabelas
através da chave primária e estrangeira, vai permitir,
neste caso, que a eliminação de um registo na tabela socios
vá automaticamente remover os registos relacionados
na tabela socios_telefones
*/

DELETE FROM socios WHERE id = 2

/*
Como podes ver nos resultados, após a execução da query,
os dados do sócio id = 2 desapareceram da tabela dos socios,
mas também da tabela dos socios_telefones. 
*/