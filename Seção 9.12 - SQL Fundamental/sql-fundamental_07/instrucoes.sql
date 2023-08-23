/*
O ORDER BY é uma cláusula opcional da instrução SELECT.
A cláusula ORDER BY permite ordenar as linhas devolvidas pela instrução SELECT 
por uma ou mais expressões de ordenação, em ordem ascendente ou descendente. 
*/

-- ordenar por ordem crescente os produtos pelo seu nome
SELECT produto FROM produtos ORDER BY produto

-- isto é o mesmo que escrever
SELECT produto FROM produtos ORDER BY produto ASC

-- ASC significa Ascending e DESC significa Descending
SELECT produto FROM produtos ORDER BY produto DESC

-- vamos selecionar dados de todos os clientes e ordenar por ordem alfabética
SELECT nome, email, cidade FROM clientes ORDER BY nome ASC	

-- facilmente conseguimos ver o resultado.

-- vamos fazer um pouco diferente.
-- vamos buscar todos os clientes, mas ordenar por ordem alfabética da cidade
-- e depois ordenar pela ordem alfabética do nome
-- a ideia é ordenar por cidade e por nome em simultâneo.

SELECT nome, email, cidade FROM clientes ORDER BY cidade, nome 	

-- neste caso, a cidade será a primeira ordem, e logo depois o nome.
-- o resultado na prática é o agrupamento sequencial de pessoas de uma
-- cidade, seguido da sua ordenação por ordem alfabética do nome.
-- todas as pessoas da Amadora ficaram em primeiro lugar e ordenadas por
-- ordem alfabética dos seus nomes.

-- mas podemos ainda fazer diferente.
-- ordenar as cidades por ordem decrescente e o nome por ordem crescente
SELECT nome, email, cidade FROM clientes ORDER BY cidade DESC, nome ASC 	

-- neste caso em primeiro surgem as pessoas de viseu, ordenadas por ordem
-- alfabética crescente.

-- vamos ver nos produtos, do mais caro para o mais barato
SELECT id, produto, preco_unidade FROM produtos ORDER BY preco_unidade DESC

-- ficamos a saber que o mais caro é o Abacate e o mais barato é o limão.

-- queremos ver as encomendas mais recentes.
SELECT * FROM encomendas ORDER BY data_hora DESC	

-- quando a tabela foi construída, as encomendas foram entrando no registo
-- de forma sequencial. De igual modo, a data de cada encomenda foi sendo cada vez
-- mais recente. Portanto, quando olhas para o resultado, vês que o id_encomenda
-- mais recente é o 10000 (a última encomenda registada).
-- se as encomendas tivessem datas não sequenciais o MySQL iria continuar a devolver
-- a lista das encomendas ordenadas pela data.