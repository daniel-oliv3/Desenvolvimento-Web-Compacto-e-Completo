/*
Vamos começar a obter muito potencial do SQL e das tabelas relacionais.
Como o nome indica, um sistema de base de dados relacional não faz sentido
se não existirem relações entre essas tabelas.

Essas relações podem ser definidas principalmente em dois campos:
1. Uma tabela pode conter registos relacionados com outras tabelas.
2. Na execução de certas operações, como por exemplo a eliminação de registos,
as tabelas podem estar explicitamente relacionadas ao ponto de eliminar um cliente e
automaticamente o sistema eliminar todas as encomendas desse cliente.

Vamos falar sobre JOINs durante os próximos vídeos.

Para que possamos estudar este mecanismo, a base de dados já tem 
criadas condições especiais.

Temos 8 clientes que não têm encomendas.
3 colaboradores que não estão ativos, logo, também não estão envolvidos em encomendas.

Com este tipo de condições estamos preparados para ver como funcionam as JOINS.

Os clientes que não têm encomendas:
1
16
30
47
66
102
151
190
*/

/* 
esta query vai devolver os nomes dos clientes, o id e data hora das encomendas
em que cada cliente estave envolvido. Como podes ver são 10 mil encomendas no total.
*/
SELECT clientes.nome, encomendas.id, encomendas.data_hora 
FROM clientes, encomendas
WHERE encomendas.id_cliente = clientes.id

-- podemos obter o mesmo resultado da seguinte forma

SELECT clientes.nome, encomendas.id, encomendas.data_hora
FROM clientes JOIN encomendas
ON encomendas.id_cliente = clientes.id

/* 
A expressão JOIN (também pode ser INNER JOIN) vai juntar no mesmo resultado
os dados da tabela clientes com os dados da tabela de encomendas.

Na prática ambas devolvem o mesmo resultado.

INNER JOIN (ou simplesmente JOIN), vai buscar apenas os dados que existam
nas duas tabelas. Se uma das tabelas não tem dados relacionados com a outra,
esses dados não são devolvidos.

Acontece que eu sei que o cliente cujo ID = 1 não tem encomendas.
Imagina que quero dados sobre o esse cliente e todas as encomendas que ele tem.
Neste caso ele não tem nenhuma, mas ainda assim quero os dados desse cliente
*/

SELECT clientes.nome, encomendas.id, encomendas.data_hora
FROM clientes LEFT JOIN encomendas
ON clientes.id = encomendas.id_cliente
WHERE clientes.id = 1

/* 
Esta query assume que a tabela clientes é a tabela da esquerda.
A tabela de encomendas é a da direita.
Porquê?
Porque pedimos FROM clientes LEFT JOIN encomendas

Na tabela de clientes existe um cliente com o id = 1
Na tabela de encomendas não existem encomendas relacionadas.
A expressão ON vai criar a relação.
Como nas encomendas não existem registos relacionados com o cliente
então vamos ter os resultados como NULL.

Neste caso só existe um cliente com o ID =1 (como é óbvio),
e como não existem encomendas, apenas é devolvida uma linha.

Vejamos a mesma query, mas para o cliente cujo ID = 2

*/
SELECT clientes.nome, encomendas.id, encomendas.data_hora
FROM clientes LEFT JOIN encomendas
ON encomendas.id_cliente = clientes.id
WHERE clientes.id = 2

/* 
A Beatriz Alexandra Ribeiro Cunha, cliente ID = 2
tem 41 encomendas relacionadas consigo.

Vejamos a situação dos colaboradores.
Queremos saber que colaboradores estiveram envolvidos em cada encomenda
*/

SELECT colaboradores.*, encomendas.*
FROM colaboradores LEFT JOIN encomendas 
ON colaboradores.id = encomendas.id_colaborador

/* 
Esta query coloca os colaboradores no lado esquerdo e os dados da encomenda do lado direito.
Podemos inverter esta situação facilmente.
*/

SELECT encomendas.*, colaboradores.*
FROM colaboradores
LEFT JOIN encomendas ON encomendas.id_colaborador = colaboradores.id

-- podemos simplificar a quantidade de código.

SELECT e.*, c.*
FROM colaboradores c
LEFT JOIN encomendas e ON e.id_colaborador = c.id


-- Vejamos um esquema que nos permite entender melhor como funcionam as joins
-- APRESENTAÇÃO 018