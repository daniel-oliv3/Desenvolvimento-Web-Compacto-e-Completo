/* 
Já deverás ter pensado, após estes exemplos todos, como vamos
afinal inserir uma nova encomenda na base de dados.

Neste caso, temos que alimentar duas tabelas:
a tabela das encomendas e a tabela das encomendas_produtos.

Quando a tua aplicação vai registar numa nova encomenda,
neste caso para um cliente que já existe,
vai ter que efetuar as seguintes operações.

1. adicionar os dados da nova encomenda na tabela das encomendas
2. adicionar todos os produtos e respetivas quantidades na tabela
das encomendas_produtos.

Vamos pensar numa encomenda apenas com dois produtos comprados:
6 bananas (id = 4)
12 maçãs (id = 8)

O cliente vai ser o id = 160 - José Lucas Costa Ramos
O colaborador vai ser o id = 12 - Pedro Pereira
*/

-- vamos primeiro inserir a data da encomenda
INSERT INTO encomendas 
VALUES(0,160, 12, NOW(), 0, 0)

/*
Encomenda com id de auto incremento, 160 que é o id do cliente, 
12 que é o id do colaborador, NOW() para inserir a data_hora atual,
e os dois zeros correspondem, respetivamente, se a encomenda foi paga
e se foi cancelada. Neste caso fica indicada como não paga.

Agora vamos necessitar ir buscar o último índice adicionado na tabela das encomendas.
Como não sabemos qual é o valor atribuído automaticamente pelo sistema de auto incremento,
vamos precisar saber qual é esse valor para depois inserir os registos na tabela de
encomendas_produtos.

Para isso vamos recorrer à função LAST_INSERT_ID()
*/
SELECT LAST_INSERT_ID()

/*
Esta instrução, executada de imediato logo após a primeira, vai devolver o
id criado pela instrução INSERT. Vamos pegar nesse id e usar na query seguinte
para definir na tabela encomendas_produtos, que produtos e quantidades estão
envolvidas nesta encomenda
*/

INSERT INTO encomendas_produtos VALUES
(0, id_da_nova_encomenda, 4, 6),
(0, id_da_nova_encomenda, 8, 12)

/* 
Agora estamos em condições de verificar os dados inseridos.
Vamos primeiro usar uma query que já tinhamos criado,
para ver todos os dados da encomenda.
*/

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
WHERE encomendas.id = xxxxx

/* 
E finalmente podemos ver os dados mais importantes da encomenda:
Quem comprou, quem vendeu, quando e qual o preço total final.
*/

SELECT
clientes.nome cliente,
colaboradores.nome colaborador,
data_hora,
CONCAT(FORMAT(total,2), " €") total
FROM
(
	SELECT 
	id_encomenda, id_cliente, id_colaborador, data_hora, SUM(total) total
	FROM 
	(
		SELECT 
		encomendas_produtos.id_encomenda,
		encomendas.id_cliente,
		encomendas.id_colaborador,
		encomendas.data_hora,
		encomendas_produtos.quantidade,
		produtos.produto, 
		CAST(encomendas_produtos.quantidade * produtos.preco_unidade AS DECIMAL(20,2)) total
		FROM encomendas_produtos
		LEFT JOIN produtos ON encomendas_produtos.id_produto = produtos.id
		LEFT JOIN encomendas  ON encomendas.id = encomendas_produtos.id_encomenda
	) a
	GROUP BY id_encomenda
) final
LEFT JOIN clientes
ON id_cliente = clientes.id
LEFT JOIN colaboradores
ON id_colaborador = colaboradores.id
WHERE final.id_encomenda = xxxxx

/* 
No caso de ser para inserção de um novo cliente, temos um passo adicional.
Neste caso, anterior a todos os outros.

1. inserimos os dados do novo cliente (nome, email, telefone, etc.)
2. vamos buscar o LAST_INSERT_ID() para saber qual o número do cliente.
3. vamos adicionar a nova encomenda já com o novo número de cliente acabado de criar.
4. vamos buscar o LAST_INSERT_ID() para saber o id da encomenda acabada de criar.
5. vamos adicionar os dados da tabela encomendas_produtos.
*/