<?php

// vamos iniciar a sessão... vai ser importante
session_start();

$inputs = [];
if (isset($_SESSION['inputs'])) {
    
    // recolhe informação da sessão
    $inputs = $_SESSION['inputs'];

    // remove a informação para estar vazia em futuros requests
    unset($_SESSION['inputs']);

}

function show_error($campo){
    global $inputs;
    if(key_exists($campo, $inputs)){
        if(!empty($inputs[$campo]['erro'])){
            return '<span class="text-danger"><small><i>' . $inputs[$campo]['erro'] . '</i></small></span>';
        } else {
            return '';
        }
    } else {
        return '';
    }
}

function show_value($campo){
    global $inputs;
    if(key_exists($campo, $inputs)){
        if(!empty($inputs[$campo]['value'])){
            return $inputs[$campo]['value'];
        } else {
            return '';
        }
    } else {
        return '';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Formulário</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>

<body class="bg-dark">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-6 card p-4 bg-light">
                <h3>LOGIN</h3>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-8">

                        <form action="submissao.php" method="post" name="formulario">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <!-- text -->
                                    <label class="form-label">Username</label>
                                    <input class="form-control" type="text" name="text_username" value="<?= show_value('text_username') ?>">
                                    <?= show_error('text_username') ?>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-12">
                                    <!-- password -->
                                    <label class="form-label">Password</label>
                                    <input class="form-control" type="password" name="text_password">
                                    <?= show_error('text_password') ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12 text-center">
                                    <input type="submit" value="Entrar" class="btn btn-primary px-5">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>



<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    28/06/2023
-->