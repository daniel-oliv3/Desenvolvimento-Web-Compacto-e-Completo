<?php

// CONTROLAR COMUNICAÇÕES COM TRANSAÇÕES

/*
Vê como é simples controlar eventuais erros num processo
de comunicação.
Adicionei um beginTransaction() antes de iniciar as comunicações.
Depois as comunicações.
No final, não existindo nenhum erro, surge o commit()
O commit() vai consolidar na base de dados todas as comunicações definidas.

No caso de acontecer um erro, como é o caso, as 3 primeiras inserções
não vão ser aplicadas, porque vai ser disparada a exceção e, dentro do
bloco do catch, temos um rollBack().

O rollBack() indica que tudo o que foi inserido com sucesso, dentro da
transação, deve ser revertido.
*/

// dados de ligação
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'NAKOHoG5';

// ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

try {
    $ligacao->beginTransaction();
    $ligacao->exec("INSERT INTO usuarios VALUES(0,'user1','111')");
    $ligacao->exec("INSERT INTO usuarios VALUES(0,'user2','222')");
    $ligacao->exec("INSERT INTO usuarios VALUES(0,'user3','333')");
    // erro propositado
    $ligacao->exec("INSERT INTO users VALUES(0,'user4','444')");
    $ligacao->commit();

} catch (PDOException $err) {

    $ligacao->rollBack();
    echo 'Aconteceu um erro no SQL!';

}



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    16/08/2023
-->