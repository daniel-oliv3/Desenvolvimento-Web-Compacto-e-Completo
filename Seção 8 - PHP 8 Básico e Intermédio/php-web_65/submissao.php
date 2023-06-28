<?php

// verifica se houve um request do tipo POST
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso inválido.');
}

// -----------------------------------
/*
REGRAS DE VALIDAÇÃO:
- Todos os campos são de preenchimento obrigatório excepto o textarea.
- o primeiro campo de texto tem que ter entre 5 e 30 caracteres.
- o campo da senha, tem que ter exatamente 12 caracteres.
- das 3 checkboxes, pelo menos uma tem que estar selecionada.
- nos radiobuttons tem que existir uma opção selecionada.
- no caso do textarea, não é obrigatório, mas se tiver texto
  tem que ter, no mínimo, 30 caracteres.
*/

$erros = [];

// texto
if (empty($_POST['text_texto'])) {
    $erros[] = 'O campo Texto é de preenchimento obrigatório';
} else {
    if (strlen($_POST['text_texto']) < 5 || strlen($_POST['text_texto']) > 30) {
        $erros[] = 'O campo Texto tem que ter entre 5 e 30 caracteres.';
    }
}

// password
if (empty($_POST['text_password'])) {
    $erros[] = 'O campo Password é de preenchimento obrigatório';
} else {
    if (strlen($_POST['text_password']) != 12) {
        $erros[] = 'O campo Password tem que ter 12 caracteres';
    }
}

// select
if (empty($_POST['select_pais'])) {
    $erros[] = 'Tem que estar selecionado um país';
}

// checkboxes
if (empty($_POST['check_1']) && empty($_POST['check_2']) && empty($_POST['check_3'])) {
    $erros[] = 'Pelo menos uma checkbox tem que estar selecionada.';
}

// radiobuttons
if (empty($_POST['radio'])) {
    $erros[] = 'Tem que existir um radiobutton selecionado.';
}

// Área de texto
if (!empty($_POST['text_area']) && strlen($_POST['text_area']) < 30) {
    $erros[] = 'Se vai escrever texto na área de texto, escreva, pelo menos, 30 caracteres';
}

// ----------------------------
// apresenta os erros, se existirem, caso contrário, apresenta os resultados
if (!empty($erros)) {

    echo '<h4>ERROS!</h4>';
    echo '<ul>';
    foreach ($erros as $erro) {
        echo "<li>$erro</li>";
    }
    echo '</ul>';
} else {
    echo '<pre>';
    print_r($_POST);
}






?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    28/06/2023
-->