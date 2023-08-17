<?php
require_once('header.php');
?>

<div class="row justify-content-center">
    <div class="col-sm-8 col-md-6 col-10">

        <div class="card p-4">

            <form action="adicionar_contacto.php" method="post">
                <p class="text-center"><strong>NOVO CONTACTO</strong></p>
                <div class="mb-3">
                    <label for="text_nome" class="form-label">Nome</label>
                    <input type="text" name="text_nome" id="text_nome" class="form-control" minlength="3" maxlength="50" required>
                </div>
                <div class="mb-3">
                    <label for="text_telefone" class="form-label">Telefone</label>
                    <input type="text" name="text_telefone" id="text_telefone" class="form-control" minlength="3" maxlength="12" required>
                </div>
                <div class="text-center">
                    <a href="index.php" class="btn btn-outline-dark">Cancelar</a>
                    <input type="submit" value="Guardar" class="btn btn-outline-dark">
                </div>
            </form>

        </div>

        <!-- error message -->
        <div class="mt-3 alert alert-danger p-2 text-center">
            mensagem de erro aqui...
        </div>

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