<?php

/* 
É necessário perceber como devemos segurar as informações de um utilizador
da nossa aplicação.
- O nome do utilizador, tratando-se de um dado pessoal, que é o email, deve
se sempre encriptado de forma reversiva. Isto é, guardamos o dado na base de dados
de forma encriptada usando um método que permite fazer o processo inverso e obter
o texto verdadeiro.

No caso da password, devemos garantir que isso não acontece.
Uma vez definida a password, não é possível reverter o processo na base de dados.

Como procedemos então à verificação se a password está correta?
Encriptamos com a mesma metodologia a password inserida no momento do login,
e comparamos com o valor que está na base de dados.

Mais ou menos... :)

Metodologias mais arcaicas recorriam ao uso de MD5 ou SHA1
*/

echo md5("aminhapassword");
echo '<br>';
echo sha1("aminhapassword");

/* 
Como podes verificar, não é possível perceber a password definida.
Mas se refrescar a página, vamos sempre obter o mesmo resultado de encriptação.
*/