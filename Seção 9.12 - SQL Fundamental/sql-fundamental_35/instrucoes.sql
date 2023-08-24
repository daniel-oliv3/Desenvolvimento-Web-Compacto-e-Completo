/*
Uma vez criada uma nova tabela, poderás querer alterar a sua estrutura,
a qualquer momento.

A declaração ALTER TABLE permite realizar as seguintes operações numa tabela:

    > Adicionar uma nova coluna utilizando a cláusula ADD.

    > Modificar o atributo de uma coluna, tal como restrição, valor por padrão, etc., utilizando a cláusula MODIFY.

    > Remover colunas utilizando a cláusula DROP.
*/

/* 
Vamos alterar a tabela dos sócios, adicionando uma nova coluna Email
*/

ALTER TABLE socios
ADD email VARCHAR(50) NULL DEFAULT NULL

/*
Como podes facilmente observar, foi adicionada uma nova coluna no final das duas existentes.

Agora imagina que queres adicionar uma outra coluna, mas antes do email que
adicionámos na execução anterior.
*/

ALTER TABLE socios
ADD cidade VARCHAR(50) NULL DEFAULT NULL AFTER nome

/*
Neste caso, adicionámos uma nova coluna, imediatamente a seguir ao nome.
Se quiseres adicionar duas colunas ou mais de uma vez só, podes fazê-lo. 
*/

ALTER TABLE socios
ADD created_at DATETIME NULL,
ADD updated_at DATETIME NULL,
ADD deleted_at DATETIME NULL

/* 3 novas colunas foram adicionadas no final da tabela.*/

/* Não existe a expressão BEFORE, mas existe a expressão FIRST */
ALTER TABLE socios
ADD nova_coluna INT(10) NULL FIRST

-- --------------------------------------------------
/*
Vamos modificar a tabela.
Vamos alterar a coluna do email por forma a ter máximo de 100 caracteres
*/

ALTER TABLE socios
MODIFY email VARCHAR(100) NULL DEFAULT NULL

/* Podemos modificar várias colunas... */
ALTER TABLE socios
MODIFY created_at INT(10) NULL DEFAULT NULL,
MODIFY updated_at INT(10) NULL DEFAULT NULL,
MODIFY deleted_at INT(10) NULL DEFAULT NULL

-- --------------------------------------------------
/*
Para remover uma coluna da estrutura, vamos usar o DROP
*/

ALTER TABLE socios
DROP email

/* ou várias colunas removidas ao mesmo tempo */

ALTER TABLE socios
DROP COLUMN cidade, 
DROP COLUMN created_at,
DROP COLUMN updated_at,
DROP COLUMN deleted_at

/* a expressão COLUMN é facultativa */