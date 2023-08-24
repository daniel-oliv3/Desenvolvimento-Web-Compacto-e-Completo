/*
A instrução DELETE serve para remover linhas de uma tabela.
Tem em atenção que não serve para eliminar dados de uma determinada
coluna de uma determinada linha.
Quando usamos o DELETE, vamos eliminar uma ou mais linhas, e se
a base de dados tiver integridade referencial entre tabelas,
os registos que estiverem relacionados com a tabela que vai
ter linhas eliminadas, vão também ser eliminados automaticamente
nas tabelas relacionadas.

No nosso exemplo, não temos essa relação criada.

A sintaxe do DELETE é relativamente simples

DELETE FROM tabela WHERE condicao

Vamos eliminar um ou mais registos da tabela, cuja condição seja X.
*/

/*
Vamos eliminar um produto
*/

DELETE FROM produtos WHERE id = 10

/* 
Como facilmente podes concluir, vamos eliminar o produto cujo id = 10

Mas agora vamos eliminar mais do que uma linha
*/

DELETE FROM colaboradores WHERE id BETWEEN 5 AND 10

/*
Neste caso eliminamos todos os colaboradores cujo id está entre o valor 5 e 10
inclusive.

Nota que estas operações são irreversíveis.
Devem ser usadas com muita cautela.
*/

/*
Vamos ver quem são os clientes cujo nome começa por Pedro 
*/

SELECT id, nome, cidade FROM clientes WHERE nome LIKE 'Pedro%'
/* 
São apenas dois.
Vamos usar a mesma cláusula where, mas para eliminar esses clientes
*/

DELETE FROM clientes WHERE nome LIKE 'Pedro%'

/* 
Se voltarmos a executar a query SELECT, vamos ver que deixaram de
existir resultados.
*/
SELECT id, nome, cidade FROM clientes WHERE nome LIKE 'Pedro%'

/*
Penso que já consegues perceber como funciona.
Vamos eliminar todos os clientes da cidade de lisboa. 
*/
SELECT nome, cidade FROM clientes WHERE cidade = "Lisboa"
-- vamos buscar os dados apenas para ver quantos existem

-- agora vamos eliminar todos os clientes dessa cidade
DELETE FROM clientes WHERE cidade = "Lisboa"

-- todos os clientes de Lisboa foram eliminados.

/* 
NOTA IMPORTANTE:
Estes exemplos são exemplos simples e, na maior parte dos casos
são muito semelhantes à maior parte das queries que vais ter
que criar para eliminar registos da base de dados.

No entanto, qualquer query de UPDATE ou DELETE pode ser bem mais
complexa, incluindo cláusulas mais detalhadas e até subqueries.

O importante aqui é conhecer as ferramentas fundamentais para
ser mais fácil chegar às soluções mais complexas, quando necessárias,
uma vez que seria impossível exemplificar todo o tipo de operações
que podes ter necessidade de fazer.
*/