/* 
Em múltiplas circunstâncias vais sentir a necessidade de inserir uma query
dentro de outra query. Por vezes até mais do que uma.

Este conceito é designado por subquery: uma query dentro de outra.
Por vezes também é designado por inner query e a query principal é
designada por outer query.

Definições à parte, o uso de subqueries é inevitável em determinadas
situações.

Na maior parte dos casos, a subquery (ou subqueries) vão ser usadas para
recolha dos dados que vão ajudar a chegar aos resultados na query principal.

Vamos imaginar que queres a lista de encomendas efetuadas por todos os clientes
cujo nome começa por "João".

Podemos escrever a query da seguinte forma:
*/

SELECT encomendas.*
FROM encomendas
LEFT JOIN clientes 
ON encomendas.id_cliente = clientes.id 
WHERE clientes.nome LIKE "João%"
ORDER BY encomendas.id_cliente

-- ou 

SELECT encomendas.*
FROM encomendas
WHERE id_cliente IN
(
    SELECT id
    FROM clientes
    WHERE nome LIKE "João%"
)
ORDER BY encomendas.id_cliente

/* 
Este é um exemplo onde o uso de subqueries não é necessário, mas permite explicar
como funciona.
No primeiro exemplo, fizemos uma JOIN para ir buscar a informação.
No segundo exemplo, criámos uma query com uma simples cláusula WHERE IN e
para definir os IDs dos clientes que vão para dentro do IN, usámos uma subquery
que vai buscar os IDs dos clientes que pretendemos.

Como podes observar, a subquery ficou entre parêntisis, e embora não tenha sido necessário
neste caso, na maior parte dos casos vais necessitar de usar um alias na query.
Isto é, vais colocar a query dentro de parêntisis e a seguir aos parêntisis vais atribuir um nome
e é esse nome que será usado para aceder aos valores da subquery na query principal.

Por exemplo:
Quero saber o total de cada encomenda de um determinado cliente.

Vai ser um pouco complexa, mas vamos lá.
*/

/*
1. Vamos calcular o preco total de cada produto encomendado em cada encomenda.
O que pretendo obter é, por cada produto de cada encomenda, 
o id da encomenda, o id do cliente, a quantidade de produto e o nome, e o preço
total da compra desse produto, isto é, a multiplicação da quantidade pelo preço por unidade
*/
SELECT 
    ep.id_encomenda,
    e.id_cliente,
    ep.quantidade,
    p.produto, 
	 CAST(ep.quantidade * p.preco_unidade AS DECIMAL(20,2)) total
FROM encomendas_produtos ep
LEFT JOIN produtos p ON ep.id_produto = p.id
LEFT JOIN encomendas e ON e.id = ep.id_encomenda

/* 
A tabela de resultados vai mostrar cada uma das linhas das encomendas_produtos
com o resultado da multiplicação da quantidade de cada produto pelo preço de cada unidade.

Repara que temos como resultados:
id_encomenda, id_cliente, quantidade, produto e total.
Na realidade vamos precisar apenas do id_encomenda, id_cliente e total

2. Vamos envolver tudo isto numa subquery e vamos atribuir-lhe o alias 'a' (podes ser outra letra qualquer ou outro nome)
Se não o fizeres o sistema vai gerar um erro.
Agora vamos fazer um select do id_encomenda, id_cliente e o somatório do total

Para que a query fique finalizada, vamos ter que agrupar os valores calculados pelo número da encomenda.
Para isso vamos usar algo que ainda não usámos. Group By.

*/
SELECT id_encomenda, id_cliente, SUM(total) total
FROM 
(
	SELECT 
	ep.id_encomenda,
	e.id_cliente,
	ep.quantidade,
	p.produto, CAST(ep.quantidade * p.preco_unidade AS DECIMAL(20,2)) total
	FROM encomendas_produtos ep
	LEFT JOIN produtos p ON ep.id_produto = p.id
	LEFT JOIN encomendas e ON e.id = ep.id_encomenda
	WHERE e.id = 3
) a
GROUP BY id_encomenda

/* 
O que temos agora é:
O id da encomenda, o id do cliente relacionado com a encomenda e o total do valor da encomenda.

Vamos analisar os dados da encomenda 3 executando apenas a subquery.
Tem apenas 3 produtos:
9 Côcos custaram 23,85
8 laranjas custaram 2,0
3 kiwis custaram 2,55

Se somar estes três valores, vamos ter no total: 28,4

Agora vamos voltar a correr a query completa.
Repara no valor da encomenda id_encomenda = 3...

Como temos o id do cliente de cada encomenda, podemos ir buscar informações adicionais
sobre o cliente.

Como o cliente 1 não tem encomendas:
SELECT * FROM encomendas WHERE id_cliente = 1
Vamos buscar informações sobre o cliente 2
*/

SELECT c.nome, c.email, c.telefone, b.id_encomenda, b.total FROM clientes c LEFT JOIN 
(
	SELECT id_encomenda, id_cliente, SUM(total) total
	FROM 
	(
		SELECT 
		ep.id_encomenda,
		e.id_cliente,
		ep.quantidade,
		p.produto, CAST(ep.quantidade * p.preco_unidade AS DECIMAL(20,2)) total
		FROM encomendas_produtos ep
		LEFT JOIN produtos p ON ep.id_produto = p.id
		LEFT JOIN encomendas e ON e.id = ep.id_encomenda
	) a
	GROUP BY id_encomenda
) b

ON b.id_cliente = c.id
WHERE c.id = 2


/* 
Este já é um processo mais avançado para chegar aos resultados.
Como podes calcular, as queries podem tornar-se bastante grandes, dependendo da
forma como temos as nossas tabelas organizadas.
É importante perceber que, apesar da query ser grande, a performance do sistema
não é afetada pela quantidade de código, e temos a certeza que os dados estão
bem estruturados no nosso schema, uma vez que não há repetição de informação.

Se ficáste assustado e confuso com este percurso para chegar ao resultado,
não desanimes. Não é suposto dominares estes conceitos desde o princípio.
Só com experiência conseguirás chegar a estes resultados.

Na realidade, numa boa parte dos casos não vais estar a usar sempre queries tão complexas.
*/