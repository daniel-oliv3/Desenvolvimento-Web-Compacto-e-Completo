/*
Na tabela dos clientes, temos várias cidades.
Como sabemos que cidades são essas?
Podemos usar a instrução DISTINCT para obter essa informação. 

O DISTINCT é usado para remover duplicados nos resultados das queries
*/

SELECT DISTINCT cidade FROM clientes

-- se quisermos ordenar alfabeticamente, também o podemos fazer
SELECT DISTINCT cidade FROM clientes ORDER BY cidade

-- por exemplo:
SELECT * FROM produtos ORDER BY preco_unidade
-- vai devolver os dados de todos os produtos por ordem crescente.
-- podes ver que existem produtos com o mesmo preço.
-- podemos saber que preços diferentes existem da seguinte forma
SELECT DISTINCT preco_unidade FROM produtos ORDER BY preco_unidade
-- existem no total 25 produtos, mas apenas estão a ser apresentados
-- 21, uma vez que existem produtos com o mesmo preço por unidade.

-- IMPORTANTE: Se alguma coluna tiver valor NULL, o distinct vai incluir
-- esse valor na lista de valores distintos