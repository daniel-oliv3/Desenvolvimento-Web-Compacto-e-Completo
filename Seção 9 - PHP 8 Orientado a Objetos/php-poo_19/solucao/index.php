<?php

require_once "classes.php";

$veiculos = [];

$file = fopen('dados.csv','r');
while(!feof($file)){
    $linha = fgetcsv($file);
    if($linha){
        switch ($linha[0]) {
            case 'automovel':
                $veiculos[] = new Automovel($linha);
                break;
            case 'aviao':
                $veiculos[] = new Aviao($linha);
                break;
            case 'barco':
                $veiculos[] = new Barco($linha);
                break;
            
            default:
                break;
        }
    }
}
fclose($file);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Exercício 3</title>
</head>
<body>
    <h1>Automóveis</h1>
    <ul>
    <?php foreach($veiculos as $veiculo): ?>
        <?php if($veiculo->get_tipo() == 'automovel'):?>
            <li><?= $veiculo->apresentar() ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>

    <h1>Aviões</h1>
    <ul>
    <?php foreach($veiculos as $veiculo): ?>
        <?php if($veiculo->get_tipo() == 'aviao'):?>
            <li><?= $veiculo->apresentar() ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>

    <h1>Barcos</h1>
    <ul>
    <?php foreach($veiculos as $veiculo): ?>
        <?php if($veiculo->get_tipo() == 'barco'):?>
            <li><?= $veiculo->apresentar() ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>
</body>
</html>
