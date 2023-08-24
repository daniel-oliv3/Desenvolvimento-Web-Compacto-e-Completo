/* 
A expressão SQL CASE permite avaliar uma lista de condições e retorna 
um dos resultados possíveis. 
A expressão CASE tem dois formatos: CASE simples e CASE pesquisado.

Pode utilizar a expressão CASE numa cláusula ou declaração que permita uma expressão válida. 
Por exemplo, pode utilizar a expressão CASE em declarações 
como SELECT, DELETE, e UPDATE ou em cláusulas como SELECT, ORDER BY, e HAVING.

Vejamos alguns exemplos.
*/

/* 
No modo SIMPLE CASE, a condição a avaliar é colocada dentro de parêntisis
e avaliada depois em várias condições WHEN.
*/

-- vou selecionar os primeiros 50 clientes e, se forem do sexo f, vêm identificados como
-- femininos, se forem sexo m, vêm como masculinos
SELECT
nome, 
CASE(sexo) 
    WHEN 'm' THEN 'masculino' 
    WHEN 'f' THEN 'feminino' 
END sexo
FROM clientes
LIMIT 50



/* 
------------------------------------------------
No SEARCHED CASE a condição é avaliada em cada situação WHEN
*/

-- quero perceber destes 50 clientes, quem tem nomes curtos, médios e longos
-- curtos = menos ou 30 caracteres
-- médios = entre 31 e 34 caracteres
-- longos = 35 ou mais caracteres

SELECT
nome,
LENGTH(nome) caracteres,
CASE 
    WHEN LENGTH(nome) <= 30 THEN 'nome curto'
    WHEN LENGTH(nome) > 30 AND LENGTH(nome) < 35 THEN 'nome médio'
    WHEN LENGTH(nome) >= 35 THEN 'nome longo'
END avaliacao
FROM clientes
LIMIT 50


-- quero uma coluna com a identificação dos domínios GMAIL e HOTMAIL
-- os restantes domínios são desconhecidos e apresentados com ...
SELECT
nome,
email,
CASE
    WHEN email LIKE "%@gmail.com" THEN "GMAIL"
    WHEN email LIKE "%@hotmail.com" THEN "HOTMAIL"
    ELSE "..."
END dominio
FROM clientes
LIMIT 50