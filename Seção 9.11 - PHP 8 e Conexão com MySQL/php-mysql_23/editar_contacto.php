<?php

use sys4soft\Database;

require_once('header.php');

// check if there is an id available in the query string
if(empty($_GET['id'])){
    header('Location: index.php');
}

require_once('config.php');
require_once('libraries/Database.php');

$id = $_GET['id'];
$erro = null;
$database = new Database(MYSQL_CONFIG);

// get contact data
$params = [
    ':id' => $id
];
$results = $database->execute_query("SELECT * FROM contactos WHERE id = :id", $params);
$contact = $results->results[0];

// check if there was a post
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome = $_POST['text_nome'];
    $telefone = $_POST['text_telefone'];

    $params = [
        ':id' => $id,
        ':telefone' => $telefone
    ];

    // check if there is another contact with the same number
    $results = $database->execute_query("SELECT id FROM contactos WHERE id <> :id AND telefone = :telefone", $params);

    if($results->affected_rows != 0){
        // another contact was found with the same number
        $erro = 'Já existe outro contacto com o mesmo telefone.';
    } else {

        // updates the current contact
        $params = [
            ':id' => $id,
            ':nome' => $nome,
            ':telefone' => $telefone
        ];
        $results = $database->execute_non_query(
            "UPDATE contacts " . 
            "SET nome = :nome, telefone = :telefone, updated_at = NOW() " . 
            "WHERE id = :id", $params);
        
        header('Location: index.php');
    }
}
?>

<div class="row justify-content-center">
    <div class="col-sm-8 col-md-6 col-10">

        <div class="card p-4">

            <form action="editar_contacto.php" method="post">
                <p class="text-center"><strong>EDITAR CONTACTO</strong></p>
                <div class="mb-3">
                    <label for="text_nome" class="form-label">Nome</label>
                    <input type="text" name="text_nome" id="text_nome" class="form-control" minlength="3" maxlength="50" required value="<?= $contact->nome ?>">
                </div>
                <div class="mb-3">
                    <label for="text_telefone" class="form-label">Telefone</label>
                    <input type="text" name="text_telefone" id="text_telefone" class="form-control" minlength="3" maxlength="12" required value="<?= $contact->telefone ?>">
                </div>
                <div class="text-center">
                    <a href="index.php" class="btn btn-outline-dark">Cancelar</a>
                    <input type="submit" value="Atualizar" class="btn btn-outline-dark">
                </div>
            </form>

        </div>

        <!-- error message -->
        <?php if(!empty($erro)): ?>
            <div class="mt-3 alert alert-danger p-2 text-center">
                <?= $erro ?>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php
require_once('footer.php');
?>



<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    17/08/2023
-->