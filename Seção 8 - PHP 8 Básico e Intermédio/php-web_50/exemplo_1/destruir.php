<?php
session_start();

// remove todas as variáveis da sessão
session_unset();

// destrói a sessão.
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php require_once 'nav.php' ?>

    <hr>
    <h2>Todos os valores na sessão foram destruídos.</h2>

</body>
</html>