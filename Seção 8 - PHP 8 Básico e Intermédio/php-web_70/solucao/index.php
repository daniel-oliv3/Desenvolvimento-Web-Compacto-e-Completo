<?php 
    session_start();
    $erro = !empty($_SESSION['erro']) ? $_SESSION['erro'] : '';
    unset($_SESSION['erro']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Nível 1 - Exercício 01</title>
    <style>
        .wrapper {
            width: 600px;
            margin: 50px auto;
        }

        input[type=text] {
            width: 100%;
            padding: 5px;
            margin: 10px 0px;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <form action="tratamento.php" method="post">
            <label>Valor 1</label>
            <input type="text" name="text_valor_1">
            <label>Valor 2</label>
            <input type="text" name="text_valor_2">
            <input type="submit" value="Executar">
        </form>
    </div>

    <?php if(!empty($erro)): ?>
        <p style="color: red;"><?= $erro ?></p>
    <?php endif; ?>

</body>

</html>





<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    30/06/2023
-->