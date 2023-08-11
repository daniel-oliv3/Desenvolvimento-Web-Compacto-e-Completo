<?php

    /*
    APRESENTAR OS DADOS NUMA TABELA DE HTML
    
    Vamos fazer um exercício muito simples.
    Carregar os dados dos clientes. Só vamos carregar os primeiro 20.
    Depois vamos apresentar numa tabela formatada com Bootstrap.
    E vamos apresentar o total de clientes listados.
    */

    // dados de ligação
    $database = 'udemy_loja_online';
    $username = 'user_loja_web';
    $password = 'c2hifo8akeka5iriKOT4X2N2NIG3jE';

    // ligação
    $ligacao = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $username, $password);

    // carregar os dados (em formato de array de objetos)
    $resultados = $ligacao->query("SELECT * FROM clientes LIMIT 20")->fetchAll(PDO::FETCH_OBJ);

    // fechar a ligação
    $ligacao = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - Apresentação de dados de uma query SQL</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <h3>Clientes:</h3>
                <hr>
                <table class="table table-bordered table-striped">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Nome</th>
                            <th>Sexo</th>
                            <th>Data nascimento</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Morada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resultados as $cliente): ?>
                            <tr>
                                <td><?= $cliente->nome ?></td>
                                <td><?= $cliente->sexo == 'm' ? 'Masculino' : 'Feminino' ?></td>
                                <td><?= substr($cliente->data_nascimento, 0, 10) ?></td>
                                <td><?= $cliente->email ?></td>
                                <td><?= $cliente->telefone ?></td>
                                <td><?= $cliente->morada . ' - ' . $cliente->cidade ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <p class="mt-3">Total: <strong><?= count($resultados) ?></strong></p>

            </div>
        </div>
    </div>

</body>
</html>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    11/08/2023
-->