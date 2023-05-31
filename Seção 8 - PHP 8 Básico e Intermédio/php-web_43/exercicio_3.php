<?php

    /* 
    Dada a coleção de nomes, apresenta toda a coleção excepto o nome cujo índice = 4 (maria)
    */

    $nomes = ['joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coleção de Nomes</title>
</head>
<body>
    
    <?php foreach($nomes as $key => $value): ?>
        <?php if($key == 4) continue ?>
        <p><?= $value ?></p>
    <?php endforeach; ?>
    

</body>
</html>




<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    31/05/2023
-->