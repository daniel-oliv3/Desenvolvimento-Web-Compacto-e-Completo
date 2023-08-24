/*
Para alterar dados já existentes em qualquer tabela da base de dados
recorremos ao uso da declaração UPDATE.

A sintaxe mais simples é a seguinte:

UPDATE 
    tabela
SET
    coluna1 = valor1,
    coluna2 = valor2
WHERE
	condicao;

Traduzindo o texto para linguagem corrente, podemos dizer que se
trata de atualizar, na tabela, alterando o valor da coluna1 para valor1,
alterando o valor da coluna2 para valor2, de acordo com a condição.

É muito importante destacar a importância da condição.
Em algumas situações, se esquecermos a condição, arriscamo-nos a alterar
todos os dados de uma tabela. Iremos ver um exemplo.
*/

/*
Vamos começar por alterar o nome de um colaborador 
*/

SELECT * FROM colaboradores WHERE id = 5

/*
Como podes observar, trata-se da Débora Barros.
Vamos alterar o nome e o sexo dela.
*/

UPDATE colaboradores
SET nome = 'Mário Antunes',
sexo = 'm'
WHERE id = 5

/*
Agora, se executar-mos a query SELECT, vamos ver que os dados foram alterados. 

Vamos voltar a ler a query.
Atualizar a tabela dos colaboradores, definindo o nome como Mário Antunes, o sexo como 'm'
onde o id do colaborador na tabela é = 5.

Se não tivessemos colocado a condição, todos os dados de todos os colaboradores
iriam ser alterados para Mário Antunes do sexo masculino.

MUITA ATENÇÃO:
No HeidiSQL, assim como noutras aplicações de gestão das bases de dados
pode ser apresentada uma mensagem no caso de usar-mos o UPDATE sem a cláusula
WHERE uma vez que o sistema deteta que podemos ter um erro na query.

No caso de estares a executar a query na tua aplicação, não vais ter essa
rede de segurança.
*/

/*
Com a mesma sintaxe, podemos alterar várias linhas. 
*/

UPDATE colaboradores
SET ativo = 100
WHERE ativo = 1

/*
Como podes ver, todos os colaboradores que tinham o valor 1 na coluna ativo
passaram a ter o valor 100.

É bem simples de perceber como funciona.

Agora vamos voltar a colocar tudo como estava anteriormente.
*/

UPDATE colaboradores
SET ativo = 1
WHERE ativo = 100