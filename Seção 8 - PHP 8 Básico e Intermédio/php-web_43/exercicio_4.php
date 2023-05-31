<?php

    /* 
    Dada a coleção de nomes, devem ser todos apresentados,
    mas a partir de maria (inclusive) devem ser com texto a vermelho
    */

    $nomes = ['joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo'];
    $css = '';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coleção de Nomes</title>
    <style>
        .vermelho {
            color: red;
        }
    </style>
</head>
<body>
    
        <?php foreach($nomes as $nome): ?>
        <?php if($nome == 'maria') $css = 'vermelho' ?>
            <h3 class="<?= $css ?>"> <?= $nome ?> </h3>
        <?php endforeach; ?>
    

</body>
</html>




<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    31/05/2023
-->