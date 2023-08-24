/* 
O SQL tem um vasto conjunto de funções, já vimos algumas, que permitem
efetuar várias operações para tratamento de strings, números, datas, etc.

Vamos ver como tirar partido delas durante os próximos vídeos.
*/

-- quero saber qual é o comprimento em caracteres do nome dos clientes
SELECT nome, LENGTH(nome) tamanho FROM clientes
-- ou
SELECT nome, CHAR_LENGTH(nome) tamanho FROM clientes

-- pretendo saber em que posição de uma coleção de letras, aparece a letra A
SELECT FIELD("a", "z", "d", "a", "f") posicao

-- outra alternativa
SELECT FIND_IN_SET("a", "z,d,a,f") posicao

-- formatar um número para que tenho determinada quantidade de casas decimais
SELECT FORMAT(10,2) valor
SELECT FORMAT(0,2) valor
SELECT FORMAT(12.43,1) valor
SELECT FORMAT(12.53,1) valor

-- quero procurar a posição de uma determinada string dentro de outra
SELECT INSTR("frase original para análise", "para") posicao
SELECT nome, INSTR(nome, "Silva") posicao FROM clientes ORDER BY posicao DESC
SELECT nome, LOCATE("Silva", nome) posicao FROM clientes ORDER BY posicao DESC
SELECT nome, POSITION("Silva" IN nome) posicao FROM clientes ORDER BY posicao DESC

-- quero todos os nomes em maiúsculas
SELECT UCASE(nome) nome FROM clientes

-- quero todos os nomes em minúsculas
SELECT LCASE(nome) nome FROM clientes

-- quero apenas as 3 primeiras letras de cada nome
SELECT nome, LEFT(nome, 3) FROM clientes

-- quero as últimas 3 letras de cada nome
SELECT nome, RIGHT(nome, 3) FROM clientes

-- quero que todos os nomes dos colaboradores tenham o mesmo comprimento.
-- se não tiverem, os caracteres restantes vão ser preenchidos por hífens
SELECT LPAD(nome, 20, "-") nome FROM colaboradores
-- repara como temos todos os nomes com 20 caracteres
SELECT LENGTH(LPAD(nome, 20, "-")) nome FROM colaboradores

-- se quisermos preencher à direita
SELECT RPAD(nome, 20, "-") nome FROM colaboradores