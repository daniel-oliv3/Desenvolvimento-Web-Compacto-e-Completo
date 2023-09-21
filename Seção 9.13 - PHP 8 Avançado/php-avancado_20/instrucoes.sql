/*
Estamos a viver numa era em que a proteção de dados pessoais
está a ser um assunto levado cada vez mais a sério.

Anteriormente, o nome, telefone, email, etc. eram valores que
eram guardados nas bases de dados sem qualquer encriptação.

Isso poderia permitir que um hacker, tendo acesso direto à base de dados,
podesse descarregar toda a informação dos nossos clientes, por exemplo.

Existem várias formas de encriptar dados numa base de dados.
É importante perceber que, neste caso, pretendemos que a base de dados
fique com um valor completamente ilegível, mas que possamos
desencriptar para poder apresentar nas nossas aplicações.

Se executár a próxima query, vais ver que o valor "joao" vai
ficar completamente encriptado. Fica impossível de ser lido.
*/

SELECT AES_ENCRYPT("joao", "chavechavedeencriptacao")

-- para adicionar um pouco mais de complexidade à chave...
SELECT AES_ENCRYPT("joao", UNHEX(SHA2('chavedeencriptacao', 512)))

/*
Vamos mostrar um exemplo diretamente numa base de dados de teste.
1. No heidisql vamos criar uma base de dados "teste"
2. Vamos criar uma tabela "clientes"
3. A tabela vai ter 4 colunas:
    id
    nome
    email
    telefone
4. O id vai ser numérico, chave primária e auto_incremento.
5. As outras colunas vão ser do tipo VARBINARY(200)
6. Como chave de encriptação vamos usar:

Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A

- Vamos ver que podemos usar o AES_ENCRYPT para encriptar os dados
- Se for usada a mesma chave de encriptação com a função AES_DECRYPT,
vamos conseguir voltar a ter os dados legíveis.
*/

-- para inserir vários dados.
INSERT INTO clientes VALUES
(
	0,
	AES_ENCRYPT("joao", "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A"), 
	AES_ENCRYPT("joao@teste.com", "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A"), 
	AES_ENCRYPT("123456789", "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A")
),
(
	0,
	AES_ENCRYPT("ana", "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A"), 
	AES_ENCRYPT("ana@teste.com", "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A"), 
	AES_ENCRYPT("222333444", "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A")
),
(
	0,
	AES_ENCRYPT("carlos", "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A"), 
	AES_ENCRYPT("carlos@teste.com", "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A"), 
	AES_ENCRYPT("543654765", "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A")
);

-- para ir buscar os dados.
SELECT
    AES_DECRYPT(nome, "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A") nome,
    AES_DECRYPT(email, "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A") email,
    AES_DECRYPT(telefone, "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A") telefone
FROM clientes

-- para procurar um determinado nome
SELECT
    AES_DECRYPT(nome, "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A") nome,
    AES_DECRYPT(email, "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A") email,
    AES_DECRYPT(telefone, "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A") telefone
FROM clientes
WHERE AES_ENCRYPT("joao", "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A") = nome

-- ou para ir buscar nomes que contenam as letras 'na'
SELECT
    AES_DECRYPT(nome, "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A") nome,
    AES_DECRYPT(email, "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A") email,
    AES_DECRYPT(telefone, "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A") telefone
FROM clientes
WHERE AES_DECRYPT(nome, "Nxp9beezlFBRmpBJVk03KvZWF9h1tD2A") LIKE "%na"