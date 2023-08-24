/*
Se pretenderes remover uma tabela da tua base de dados, também o podes fazer
através do SQL.

DROP TABLE [IF EXISTS] tabela

DROP TABLE, tal como o nome indica, significa deixa cair a tabela.
A instrução IF EXISTS vai permitir validar que a tabela só vai ser 
eliminada se de facto existir.

No caso de executar DROP TABLE para uma tabela que não existe, vamos ter um erro de SQL.
*/

DROP TABLE tabela_inexistente
DROP TABLE IF EXISTS tabela_inexistente

/* Esta operação é irreversível, pelo que, deves ter cuidado ao executá-la.*/

/*
Outra situação que pode ser importante para a tua aplicação é a remoção
por completo de todos os registos da tabela, mas sem a eliminar.

Poderías imaginar que um DELETE FROM tabela vai resolver, mas existe um aspeto
que deves ter em conta.

DELETE FROM tabela elimina todos os registos, de facto, mas mantém o
valor de AUTO INCREMENT da coluna que tem a chave primária.

Pelo contrário a instrução TRUNCATE tabela vai eliminar todos os registos
e fazer um reset do AUTO INCREMENT.
*/ 

DELETE FROM socios_telefones
-- o AI vai manter-se.
TRUNCATE socios_telefones
-- o AI vai ser revertido para o início.

/*
Tem em atenção que não é possível usar a expressão TRUNCATE numa tabela
que tem relação com outra.
Por exemplo, não é possível fazer TRUNCATE socios, uma vez que esta tabela
tem uma relação com uma chave estrangeira na tabela socios_telefones.

Neste caso deve usar o DELETE para eliminar os registos
e o ALTER TABLE para fazer alterar o AI para 1.
*/
DELETE FROM socios;
ALTER TABLE socios AUTO_INCREMENT 1