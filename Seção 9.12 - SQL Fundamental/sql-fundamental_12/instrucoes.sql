/* 
Existem enúmeros operadores lógicos. Iremos ver exemplos rápidos de cada
um deles neste vídeo e no próximo
Alguns operadores lógicos servem para ligar duas ou mais condições.
Outros têm uma aplicação muito própria.
Mas nada como ver na prática com exemplos simples.
*/

-- -----------------------------------------------------------
-- AND - permite juntar várias condições nas quais todas têm que ser
-- verdadeiras para que o resultado seja devolvido.

SELECT nome, email FROM clientes WHERE cidade = "Coimbra" AND sexo = "f"

SELECT nome, email FROM clientes WHERE cidade = "Paris" AND sexo = "m"
-- esta query não vai devolver resultados, porque não existem clientes de Paris.

-- -----------------------------------------------------------
-- OR
-- a mesma query pode ter um resultado distinto com o uso do OR
SELECT nome, email FROM clientes WHERE cidade = "Paris" OR sexo = "m"
-- neste caso, vem o resultado se a cidade for Paris (que não existe) ou o sexo seja masculino.
-- na prática vêm todos os resultados dos clientes cujo sexo é masculino.

-- vamos usar o OR para ir buscar
SELECT * FROM produtos WHERE preco_unidade < 1 OR preco_unidade > 2
-- todos os preços com valores entre 1 (inclusive) e 2 (inclusive) vão ser ignorados.

-- -----------------------------------------------------------
-- NOT - permite devolver os registos cujas condições indicadas não sejam verdadeiras
SELECT nome FROM clientes WHERE NOT sexo = 'm'
-- neste caso, vai devolver todos os clientes do sexo feminino

SELECT * FROM produtos WHERE NOT preco_unidade <= 1.5
-- devolve todos os produtos cujo preço é superior a 1.5 (exclusive)

-- -----------------------------------------------------------
-- EXISTS - operador pouco usado, mas aqui fica.

SELECT * FROM clientes WHERE EXISTS (SELECT cidade FROM clientes WHERE cidade = "Coimbra")
-- Esta query tem um resultado irrelevante. Porquê?
-- Estamos a pedir todos os clientes desde que a subquery que é executada contenha 
-- pelo menos um resultado. Como neste caso contém, então todos os clientes vão ser
-- devolvidos.

-- vejamos o caso em que vamos perguntar à base de dados se existe
-- algum cliente da cidade de lisboa e do sexo masculino.
-- se existir, devolve todos os nomes dos clientes da cidade de lisboa

SELECT nome FROM clientes WHERE cidade = "Lisboa" AND EXISTS(SELECT id FROM clientes WHERE cidade = "Lisboa" AND sexo = "m")

