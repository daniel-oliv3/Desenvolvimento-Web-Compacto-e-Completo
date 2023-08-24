/*
À medida que as nossas queries vão ficando mais complexas
e com mais quantidade de instruções, começa a ser dificil ler
o nosso código se quisermos manter tudo na mesma linha.

Podemos escrever queries de SQL em linhas diferentes.
Na prática há muito poucas normas que tens que seguir para
separar em várias linhas uma mesma query.

Se por alguma razão vais querer executar duas instruções
de uma vez só, a principal preocupação é finalizar a primeira
query com um ; escrevendo a segunda query de seguida.

Se achares melhor para a tua leitura, podes colocar um ; no final
de cada query, mas isso é redundante.
*/

SELECT nome, email, telefone FROM clientes WHERE id < 20

-- o mesmo que

SELECT nome, email, telefone
FROM clientes
WHERE id < 20

-- o mesmo que

SELECT 
    nome, email, telefone
FROM 
    clientes
WHERE 
    id < 20

-- ou ainda

SELECT 
    nome, 
	email, 
	telefone
FROM 
    clientes
WHERE 
    id < 20