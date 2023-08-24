/* 
Outras duas funções de agregação importantes no sistema:

MIN     - Permite ver o valor mínimo num conjunto de resultados
MAX     - Permite ver qual o valor máximo num conjunto de resultados

Vejamos exemplos.
*/

-- quero saber qual é o primeiro cliente de lisboa na tabela de clientes
SELECT id FROM clientes WHERE cidade = "Lisboa" LIMIT 1
SELECT MIN(id) from clientes where cidade = "Lisboa"

-- qual é o preco por unidade mais baixo de todos os produtos
SELECT produto, MIN(preco_unidade) FROM produtos

/* 
Observa que, se tentar adicionar o nome do produto, neste caso a coluna produto,
o sistema vai gerar um erro.

SELECT produto, MIN(preco_unidade) FROM produtos -- não vai funcionar

Esse tipo de resultado poderá ser obtido usando subqueries, sobre as quais
iremos falar muito em breve neste módulo
*/

-- queremos saber qual é o id mais alto dos clientes que têm um email do gmail
SELECT MAX(id) FROM clientes WHERE email LIKE "%gmail.com"

-- quero saber qual é o preço mais alto de todos os produtos
SELECT MAX(preco_unidade) maximo FROM produtos

-- como é óbvio, deveremos atribuir sempre um alias ao resultado para
-- mais facilmente conseguirmos manipular a informação.