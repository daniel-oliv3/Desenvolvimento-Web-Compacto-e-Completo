<?php
require_once('header.php');
?>

<!-- search & add new -->
<div class="row align-items-center mb-3">
    <div class="col">

        <form action="index.php" method="post">
            <div class="row">
                <div class="col-auto"><input type="text" class="form-control" name="text_search" id="text_search" minlength="3" maxlength="20" required></div>
                <div class="col-auto"><input type="submit" class="btn btn-outline-dark" value="Procurar"></div>
                <div class="col-auto"><a href="index.php" class="btn btn-outline-dark">Ver tudo</a></div>
            </div>
        </form>

    </div>

    <div class="col text-end">
        <a href="adicionar_contacto.php" class="btn btn-outline-dark">Adicionar contacto</a>
    </div>
</div>

<!-- show contact's table -->
<div class="row">
    <div class="col">

        <!-- no results -->
        <p class="text-center opacity-75 mt-3">Não foram encontrados contactos registados.</p>

        <!-- widh results -->
        <table class="table table-sm table-striped table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th width="40%">Nome</th>
                    <th width="30%">Telefone</th>
                    <th width="15%"></th>
                    <th width="15%"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>[nome]</td>
                    <td>[telefone]</td>
                    <td class="text-center"><a href="editar_contacto.php">Editar</a></td>
                    <td class="text-center"><a href="eliminar_contacto.php">Eliminar</a></td>
                </tr>
            </tbody>
        </table>

        <!-- total results & delete all-->
        <div class="row">
            <div class="col">
                <p>Total: <strong>0</strong></p>
            </div>
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