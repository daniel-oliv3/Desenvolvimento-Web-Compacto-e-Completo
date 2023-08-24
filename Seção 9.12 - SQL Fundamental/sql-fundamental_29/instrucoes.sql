/* 
A instrução INSERT permite inserir um ou mais registos numa tabela.
na realidade, o INSERT permite:
1. Inserir uma linha numa tabela.
2. Inserir múltiplas linhas numa tabela.
3. Copiar linhas de uma tabela e inserir noutra tabela.

A sintaxe é, no seu formato mais simples:

INSERT INTO tabela (coluna1, coluna2, ...)
VALUES (valor1, valor2, ...);

Existem alguns pontos a ter em conta:

1. O número de valores tem que ser igual ao número de colunas.
2. Antes de ser adicionada a nova linha, o sistema vai verificar a integridade
referencial (chaves primárias, estrangeiras, etc.). Se um desses constrangimentos
ou limitações forem violadas, o sistema vai gerar um erro e interromper a
inserção do registo.

Vamos fazer uma inserção simples.
Vamos adicionar um colaborador
*/

INSERT INTO colaboradores(nome, sexo, ativo) VALUES('colaborador1', 'm', 1)
/* 
A inserção é executada sem problema.
Repara que indiquei apenas 3 colunas e respetivos valores,
mas a tabela dos colaboradores tem 4 colunas!
Neste caso, como a primeira coluna (id) é de auto-incremento,
não é necessário indicar esse valor, porque o sistema vai
definir o valor de forma automática.

Também podemos inserir apenas alguns valores.
*/

INSERT INTO colaboradores(nome) VALUES('colaborador2')

-- ou 

INSERT INTO colaboradores(nome, ativo) VALUES('colaborador3', 1)

/*
Nestes dois casos, as colunas que não foram indicadas, vão ficar
automaticamente com o valor padrão definido no schema para cada uma delas. 
*/

/*
Não é necessário especificar as colunas se a sequência de valores
corresponder à sequência de colunas na tabela.
Por exemplo:
*/

INSERT INTO colaboradores VALUES(0,'colaborador4', 'm', 1)

/*
Repara que atribuí um valor para cada coluna existente na tabela
dos colaboradores. No caso da primeira coluna, que é a do ID do
colaborador, defini o valor 0.
O valor zero vai indicar que é para atribuir automaticamente o
valor do ID que está definido como coluna de auto incremento.
Logo, independentemente do número de registos já existente,
este novo registo vai assumir o próximo id de colaborador que estiver
disponível.

Toma nota que a melhor prática é escrever a query identificando claramente
quais as colunas que vão ser afetadas pelos valores.

Então a forma mais correta será:
*/

INSERT INTO colaboradores(nome, sexo, ativo) VALUES('colaboradora5', 'f', 1)

/*
Mais uma vez não foi necessário usar a coluna inicial do id, porque
ela vai ter um valor automaticamente atribuído por ser de auto incremento. 
*/

/*
Também podemos inserir vários registos de uma vez só.
Para isso usamos uma primeira parte da query para definir onde
vamos inserir os registos, e vamos repetir depois os VALUES.

Vejamos.
*/

INSERT INTO colaboradores(nome, sexo, ativo)
VALUES
('comercial1','m',1),
('comercial2','f',1),
('comercial3','m',1),
('comercial4','f',1)

/*
Observa alguns detalhes: Primeiro, como referi, indiquei onde vou
inserir os registos, neste caso a tabela e as respetivas colunas.
Depois surge a expressão VALUES. A partir daí, temos entre parêntisis
cada uma das linhas de dados a inserir, separadas por uma vírgula no final.
No final de todas as linhas, vamos concluir um um ponto e virgula. 
*/

/*
Agora vamos para uma experiência diferente.
Vamos criar duas tabelas - tabela A e tabela B, exatamente com a mesma
estrutura.
Para isso vamos criar a tabela A com:
> id de auto incremento
> nome varchar(50)
> email varchar(50)

Depois vamos copiar e colar a tabela A e alterar o nome para tabela B
*/

/*
Depois de criadas as duas tabelas, vamos inserir 3 registos na tabela A  
*/

INSERT INTO tabela_a(nome, email)
VALUES
('joao', 'joao@gmail.com'),
('ana', 'ana@gmail.com'),
('carlos', 'carlos@gmail.com');

/*
Podemos usar o INSERT para copiar dados de uma tabela para a outra
da seguinte forma: 
*/

INSERT INTO tabela_b(nome, email)
SELECT nome, email
FROM tabela_a

/*
Podemos voltar a repetir a operação, mas adicionando cláusulas. 
*/

INSERT INTO tabela_b(nome, email)
SELECT nome, email
FROM tabela_a
WHERE id <= 2

/*
Neste caso vai adicionar novamente o joao e a ana, porque são
os registos que têm id igual ou inferior a 2 na tabela A

Por exemplo:
INSERT INTO tabela_b
SELECT *
FROM tabela_a

Não vai funcionar neste momento, porque vou estar a tentar
selecionar todas as colunas de A (incluindo o id que é automático)
e a tentar inserir exatamente igual na tabela B.
Acontece que a tabela B já tem os IDs que estamos a capturar na
query, logo, vai gerar um erro de integridade relativamente
à chave primária da tabela B.
*/

/* 
Para terminar esta matéria, é importante ter em atenção que
determinados tipos de colunas obrigam a determinados tipos de dados.
Iremos ver isso em mais detalhe quando falármos sobre Data Types
na construção de tabelas com o SQL.
Por agora vamos apenas adicionar na tabela A uma nova coluna:
data_hora do tipo DATETIME.

Como podes verificar, a nova coluna adicionada fez com que os três
registos que já existiam totalmente preenchidos passassem a ter
uma coluna data_hora com valor NULL.

Vamos adicionar um novo registo, com a data_hora.
Neste caso, apenas a título de exemplo, podemos inserir a
data de duas formas: através de uma string, ou através de funções
do SQL.

Vamos adicionar com uma string
*/

INSERT INTO tabela_a(nome, email, data_hora)
VALUES('teste1', 'teste1@gmail.com', '2030-10-20 12:30:15')

/*
O formato da data em string deve ser:
ano, mês, dia, espaço, hora, minutos e segundos.
Exatamente como é apresentado. 

Podemos ainda usar funções. Iremos ver mais sobre elas
noutros vídeos do módulo.
*/
INSERT INTO tabela_a(nome, email, data_hora)
VALUES('teste2', 'teste2@gmail.com', NOW())

/*
A função NOW() define a data e hora exata do momento em que o 
registo é inserido na tabela.
*/