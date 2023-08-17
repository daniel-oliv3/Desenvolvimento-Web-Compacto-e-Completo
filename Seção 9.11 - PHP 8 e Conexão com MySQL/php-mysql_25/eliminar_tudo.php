<?php

use sys4soft\Database;

require_once('header.php');

require_once('config.php');
require_once('libraries/Database.php');

// check if the delete_all is present in the url
if(!empty($_GET['delete_all'])){
    $database = new Database(MYSQL_CONFIG);
    $results = $database->execute_non_query("DELETE FROM contactos");
    header('Location: index.php');
}
?>

<div class="row">
    <div class="col text-center">
        <h3 class="text-danger mb-4">Deseja eliminar todos os contactos?</h3>
        <a href="index.php" class="btn btn-outline-dark yes-no-width">Não</a>
        <a href="eliminar_tudo.php?delete_all=yes" class="btn btn-outline-danger yes-no-width">Sim</a>
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