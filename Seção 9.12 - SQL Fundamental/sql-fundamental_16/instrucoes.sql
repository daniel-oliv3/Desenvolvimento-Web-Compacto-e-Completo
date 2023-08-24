/*
O SQL contém um enorme conjunto de funções para efetuar
ajustamentos na forma como recolhemos os dados.

Não se trata apenas de ir buscar ou alterar os dados da forma
estrutural como estão organizados. Vimos que podemos trazer os dados
com nomes de colunas diferentes com o ALIAS. Neste vídeo, apenas
como curiosidade, vamos ver a função CONCAT.
Ela permite juntar valores de duas colunas na forma de uma concatenação
de valores (uma colagem de valores) 

Imagina que queres que o SQL te devolva uma frase feita para cada 
cliente indicando o seu nome e o seu endereço de email.

*/

SELECT CONCAT('O meu nome é ', nome, ' e o meu email é: ', email) frase 
FROM clientes LIMIT 10

-- vai pegar nos primeiros 10 clientes e colar todos os textos dentro do concat.
-- Podemos fazer o mesmo com os preços.

SELECT CONCAT('A loja tem ', produto, ' a ', preco_unidade, ' euros cada unidade.') texto 
FROM produtos LIMIT 10

/*
Existe ainda outra alternativa ao CONCAT. O CONCAT_WS.
A diferença principal entre os dois é que, o CONCAT permite juntar cada um dos
parâmetros indicados dentro da função, enquanto o CONCAT_WS permite juntar
vários valores colando-os com uma string permanente. Vejamos.  
*/

SELECT CONCAT_WS('|', nome, telefone, cidade) AS teste FROM clientes

/*
Pode parecer uma funcionalidade pouco útil, mas em muitos casos
podes querer devolver resultados preparados para serem tratados de uma determinada
forma.

Aproveito para indicar algo que é muito importante perceber:
TUDO O QUE POSSAS FAZER COM O SQL, NO MYSQL, PARA TRAZER OS DADOS PRONTOS A SEREM
USÁDOS, DEVES FAZÊ-LO. Evita ao máximo trazer uma pilha de dados para serem
tratados posteriormente no teu PHP, JavaScript, etc.
A ideia é trazer os dados o mais preparados possível para que possam ser usados
no teu frontend.
*/