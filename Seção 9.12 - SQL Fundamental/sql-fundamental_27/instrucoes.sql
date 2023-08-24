/* 
Vamos falar sobre UNION e UNION ALL.

O operador UNION combina conjuntos de resultados de duas ou mais declarações SELECT 
num único conjunto de resultados. 

Quero, por exemplo, ir buscar os nomes dos produtos e os nomes dos colaboradores
tudo isto numa única query.
*/

SELECT nome FROM colaboradores
UNION
SELECT produto FROM produtos

/* 
Como podes verificar, apenas vem uma coluna com o nome como título.
O produto da segunda coluna foi esquecido para a apresentação dos dados.
Além disso, os registos vêm em sequência: primeiro a lista completa dos colaboradores
e só depois a lista de produtos.

O que podemos fazer para preparar os dados para a nossa aplicação.
Vamos normalizar a informação para que tenhamos os dados mais claros.
*/

SELECT "colaboradores" AS contexto, id, nome AS valor
FROM colaboradores 
UNION
SELECT "produtos" AS contexto, id, produto AS valor
FROM produtos

/*
Repara que agora, temos 3 colunas, todas com a mesma designação nas duas queries.
contexto, id e valor
contexto para percebermos se estamos na lista de colaboradores ou nos produtos,
o id é igual em ambos, logo não precisa de alias.
Finalmente o valor corresponde ao nome, no caso dos colaboradores, e ao produto no caso dos
produtos.

Assim, com uma simples query, podemos retornar dois conjuntos de dados (ou mais) de uma vez só.


Outro exemplo.
Quero obter os totais de clientes, colaboradores, produtos e encomendas registadas.
Simples.
*/
SELECT "clientes" AS contexto, COUNT(*) AS total FROM clientes
UNION
SELECT "colaboradores" AS contexto, COUNT(*) AS total FROM colaboradores
UNION
SELECT "produtos" AS contexto, COUNT(*) AS total FROM produtos
UNION
SELECT "encomendas" AS contexto, COUNT(*) AS total FROM encomendas

/* 
Com uma única query, obtive os totais de 4 realidades distintas.

A próxima query, por exemplo, não vai funcionar.
Estamos a tentar devolver um conjunto de dados que não corresponde
relativamente ao número de colunas.

O mesmo cuidado deveremos ter relativamente ao tipo de dados.
Se tentar efetuar uma query em que na mesma coluna vamos ter dados
de natureza (data type) diferente e que o MySQL não consegue converter,
então vamos ter um erro.
*/
SELECT DISTINCT(cidade) AS valor FROM clientes
UNION
SELECT id, nome FROM colaboradores

/* 
Um aspeto muito importante do UNION.
Ele vai remover valores duplicados, se existirem.
A forma mais simples de ver essa questão em ação é repetir as duas queries
*/
SELECT nome FROM colaboradores
UNION
SELECT nome FROM colaboradores
/* 
Existem 20 colaboradores no total.
Em condições normais o sistema deveria apresentar 40 resultados,
mas o UNION remove valores duplicados.

Por exemplo, vejamos que precos por unidade existem nos produtos
*/

SELECT * FROM produtos ORDER BY preco_unidade DESC

/*
Como podemos verificar, existem valores que se repetem
ao nível do preço dos produtos.
Se, por alguma razão, quisermos apenas os preços únicos
independentemente do produto, podemos fazer o seguinte:
*/

SELECT preco_unidade FROM produtos
UNION
SELECT preco_unidade FROM produtos

/* 
Dos 25 resultados iniciais, passamos a ter apenas 21, porque os valores duplicados
são descartados.

Esta é a principal diferença entre UNION e UNION ALL.

No caso do UNION ALL, o sistema não descarta valores duplicados.
Voltando à query dos colaboradores...
*/

SELECT nome FROM colaboradores
UNION ALL
SELECT nome FROM colaboradores

/* 
Vamos ter 40 registos equivalentes aos nomes dos 20 colaboradores
que temos na loja, mas sem expurgar os duplicados.
*/