/*
Para limitar o número de linhas devolvidas por uma declaração SELECT, 
utilizam-se as cláusulas LIMIT e OFFSET. 
*/

-- vamos buscar os primeiros 10 clientes da tabela
SELECT id, nome, email FROM clientes LIMIT 10

-- vamos articular com o order by para ir buscar os últimos 10
SELECT id, nome, email FROM clientes ORDER BY id DESC LIMIT 10

-- coloquei o id para verificares que estamos a ver do último para o primeiro
-- mas apenas os 10 últimos.
-- imagina que queres ver os clientes 6 a 10
-- podemos usar o OFFSET

SELECT id, nome, email FROM clientes LIMIT 5 OFFSET 5

-- basicamente o offset vai indicar que, das linhas todas devolvidas, 
-- vai ignorar as primeiras 5 e depois vai recolher as 5 seguintes.

-- neste caso vai ignorar as primeiras 10 e vai devolver as 3 seguintes
SELECT id, nome, email FROM clientes LIMIT 3 OFFSET 10

-- outra forma mais curta de escrever o mesmo código:
SELECT id, nome, email FROM clientes LIMIT 10, 3
-- o prmeiro valor é o offset e o valor a seguir à virgula é o limit

-- agora vamos buscar apenas o fruto mais caro
SELECT * FROM produtos ORDER BY preco_unidade DESC LIMIT 1

-- vamos buscar o fruto mais barato
SELECT * FROM produtos ORDER BY preco_unidade LIMIT 1

-- e como ir buscar o terceiro produto mais caro?
SELECT * FROM produtos ORDER BY preco_unidade DESC LIMIT 2,1
-- é a melancia

-- IMPORTANTE: O SQL não é standard entre todas as bases de dados relacionais
-- Por essa razão, algumas expressões funcionam no MySQL, mas podem não funcionar
-- da mesma forma noutros SGBDs.