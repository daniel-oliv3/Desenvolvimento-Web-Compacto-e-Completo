/* 
Vamos ficar a conhecer melhor as JOINS com exercícios práticos.

A nossa base de dados tem tabelas com relações entre si.

- a tabela das encomendas tem relação com a tabela dos clientes.
- a tabela das encomendas também tem relação com a tabela dos colaboradores.
- a tabela das encomendas_produtos tem relação com a tabela das encomendas e dos produtos.

Tudo parece inicialmente muito confuso, mas com as queries em ação vamos obter a informação pretendida.

Vejamos.
*/

-- queremos dados sobre as encomendas do cliente cujo id = 20
SELECT c.*, e.* 
FROM clientes c
LEFT JOIN encomendas e 
ON c.id = e.id_cliente
WHERE c.id = 20
-- são 54 encomendas

-- no histórico das encomendas, queremos saber quem foram os clientes envolvidos nas 20 primeiras
-- encomendas da nossa loja
SELECT e.id, e.data_hora, c.nome
FROM encomendas e LEFT JOIN clientes c
ON e.id_cliente = c.id
LIMIT 20

-- agora queremos a mesma informação, mas sobre as últimas 20 encomendas e ordenadas por ordem da
-- mais recente para a mais antiga
SELECT e.id, e.data_hora, c.nome 
FROM encomendas e LEFT JOIN clientes c
ON e.id_cliente = c.id
ORDER BY e.id DESC
LIMIT 20

-- para efetuar exercícios com right join, vamos eliminar 10 clientes
-- para isso vamos remover usando a expressão DELETE
DELETE FROM clientes WHERE id BETWEEN 100 AND 109
SELECT COUNT(*) total_clientes FROM clientes
-- Não te preocupes com as duas queries anteriores. Iremos percebê-las mais à frente.

/*
Neste momento temos 190 clientes, ao contrário dos 200 iniciais.
Nesta situação, e uma vez que não temos automatismo para remover as encomendas que estavam associadas
com esses clientes, as encomendas deles ficaram na base de dados.

Vejamos agora o que acontece com as nossas joins
*/ 

SELECT c.nome, e.data_hora 
FROM clientes c LEFT JOIN encomendas e 
ON c.id = e.id_cliente
WHERE e.id_cliente = 100
/* 
Queremos os dados do cliente (esquerda) e as repetivas encomendas (direita)
em que o id do cliente nas encomenas é = 100.

Como não temos dados do cliente, porque foi eliminado, e temos um left join,
não vamos ter resultados.

Agora vamos alterar de LEFT JOIN para RIGHT JOIN
*/

SELECT c.nome, e.data_hora 
FROM clientes c 
RIGHT JOIN encomendas e 
ON c.id = e.id_cliente
WHERE e.id_cliente = 100

/* 
O resultado que aparece agora indica todas as encomendas registadas para o cliente ID = 100.
Mas como não temos dados desse cliente na tabela de clientes, apenas aparecem os dados da
tabela da direita, neste caso as encomendas.

Podemos ver que o cliente 100 tinha 56 encomendas. Elas permanecem na tabela, mas o cliente
já não faz parte dos registos, porque foi eliminado.
*/