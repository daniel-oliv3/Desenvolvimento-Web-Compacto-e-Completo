<?php

/* 
O PHP contém duas funções complementares para tornar o processo mais complexo.
password_hash() permite criar a password.
password_verify() permite verificar se uma password e a encriptação de outra coincidem.
*/

$password = "aminhapassword";
echo password_hash($password, PASSWORD_DEFAULT);

/* 
O primeiro parâmetro é a password real, o segundo define o mecanismo de encriptação.
Neste caso, define o algorítmo a usar para encriptar a password verdadeira.

No caso, PASSWORD_DEFAULT é o mesmo que definir PASSWORD_BCRYPT que é o padrão.
Existem outros algorítmos, mas vamos ficar com este por agora que é suficiente.

Repara que o resultado da encriptação nunca é o mesmo.

Para nós não tem importância.
Quem vai ter a responsabilidade de verificar se a password é válida, é a função
password_verify()

Essa função não precisa que lhe indiquemos qual foi o algorítmo usado para
a encriptação. Ao receber o valor encriptado, a função vai perceber qual
foi o algorítmo.
*/
echo '<br>';

$password_real = "aminhapassword";
$password_encriptada = password_hash($password_real, PASSWORD_DEFAULT);

if(password_verify($password_real, $password_encriptada)){
    echo "OK";
} else {
    echo "NOK!";
}

/* Se mudar o texto no primeiro argumeno de password_verify, o valor vai dar falso. */