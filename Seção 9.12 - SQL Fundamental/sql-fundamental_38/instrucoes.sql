-- quero obter os dados de uma encomenda:
-- cliente, colaborador e quando foi efetuada a encomenda

SELECT 
clientes.nome cliente,
colaboradores.nome colaborador,
encomendas.data_hora
FROM encomendas
LEFT JOIN clientes
ON encomendas.id_cliente = clientes.id
LEFT JOIN colaboradores
ON encomendas.id_colaborador = colaboradores.id
WHERE encomendas.id = 1

-- quero obter os dados completos de uma encomenda
-- cliente, colaborador, quando foi a encomenda, os produtos e as quantidades

SELECT 
clientes.nome cliente,
colaboradores.nome colaborador,
encomendas.data_hora,
produtos.produto,
encomendas_produtos.quantidade
FROM encomendas
LEFT JOIN clientes
ON encomendas.id_cliente = clientes.id
LEFT JOIN colaboradores
ON encomendas.id_colaborador = colaboradores.id
LEFT JOIN encomendas_produtos
ON encomendas.id = encomendas_produtos.id_encomenda
LEFT JOIN produtos
ON produtos.id = encomendas_produtos.id_produto
WHERE encomendas.id = 1

-- quero a mesma informação, mas com o cálculo do total gasto por cada produto
-- com os dados do total por produto apresentado em euros com duas casas decimais e o símbolo
SELECT 
clientes.nome cliente,
colaboradores.nome colaborador,
encomendas.data_hora,
produtos.produto,
encomendas_produtos.quantidade,
CONCAT(FORMAT(encomendas_produtos.quantidade * produtos.preco_unidade,2)," €") total_por_produto
FROM encomendas
LEFT JOIN clientes
ON encomendas.id_cliente = clientes.id
LEFT JOIN colaboradores
ON encomendas.id_colaborador = colaboradores.id
LEFT JOIN encomendas_produtos
ON encomendas.id = encomendas_produtos.id_encomenda
LEFT JOIN produtos
ON produtos.id = encomendas_produtos.id_produto
WHERE encomendas.id = 1

-- quero a mesma informação, mas a coluna dos produtos e quantidade
-- passam a ser uma frase do tipo x produto
SELECT 
clientes.nome cliente,
colaboradores.nome colaborador,
encomendas.data_hora,
CONCAT(encomendas_produtos.quantidade, " " , produtos.produto) produto,
CONCAT(FORMAT(encomendas_produtos.quantidade * produtos.preco_unidade,2)," €") total_por_produto
FROM encomendas
LEFT JOIN clientes
ON encomendas.id_cliente = clientes.id
LEFT JOIN colaboradores
ON encomendas.id_colaborador = colaboradores.id
LEFT JOIN encomendas_produtos
ON encomendas.id = encomendas_produtos.id_encomenda
LEFT JOIN produtos
ON produtos.id = encomendas_produtos.id_produto
WHERE encomendas.id = 1

-- Como podes verificar, 9 Uva não faz sentido, porque deveríamos ter
-- o produto no plural. Vamos resolver essa questão.

SELECT 
clientes.nome cliente,
colaboradores.nome colaborador,
encomendas.data_hora,
CASE (encomendas_produtos.quantidade)
	WHEN 1 THEN CONCAT(encomendas_produtos.quantidade, " " , produtos.produto)
	ELSE CONCAT(encomendas_produtos.quantidade, " " , produtos.produto, "s")
END produto,
CONCAT(FORMAT(encomendas_produtos.quantidade * produtos.preco_unidade,2)," €") total_por_produto
FROM encomendas
LEFT JOIN clientes
ON encomendas.id_cliente = clientes.id
LEFT JOIN colaboradores
ON encomendas.id_colaborador = colaboradores.id
LEFT JOIN encomendas_produtos
ON encomendas.id = encomendas_produtos.id_encomenda
LEFT JOIN produtos
ON produtos.id = encomendas_produtos.id_produto
WHERE encomendas.id = 1