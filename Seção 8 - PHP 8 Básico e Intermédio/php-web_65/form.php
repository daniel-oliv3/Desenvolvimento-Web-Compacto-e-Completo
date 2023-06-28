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
            <div class="col-sm-8 card p-4 bg-light">

                <h3>FORMULÁRIO</h3>
                <hr>

                <form action="submissao.php" method="post" name="formulario">

                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <!-- text -->
                            <label class="form-label">Texto</label>
                            <input class="form-control" type="text" name="text_texto">
                        </div>
                        <div class="col-sm-6">
                            <!-- password -->
                            <label class="form-label">Password </label>
                            <input class="form-control" type="password" name="text_password">
                        </div>
                    </div>

                    <!-- select -->
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="form-label">Select</label>
                            <select class="form-select" name="select_pais">
                                <option value="Portugal" selected>Portugal</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Angola">Angola</option>
                                <option value="Moçambique">Moçambique</option>
                                <option value="Cabo Verde">Cabo Verde</option>
                                <option value="Guiné-Bissau">Guiné-Bissau</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <!-- checkbox -->
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="check_1" id="check_1">
                                <label for="check_1" class="form-check-label">Texto da checkbox 1</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="check_2" id="check_2">
                                <label for="check_2" class="form-check-label">Texto da checkbox 2</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="check_3" id="check_3">
                                <label for="check_3" class="form-check-label">Texto da checkbox 3</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- radiobuttons -->
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="radio" id="radio_1">
                                <label for="radio_1" class="form-check-label">Opção 1</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="radio" id="radio_2">
                                <label for="radio_2" class="form-check-label">Opção 2</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="radio" id="radio_3">
                                <label for="radio_3" class="form-check-label">Opção 3</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="form-label">Área de texto</label>
                            <textarea name="text_area" class="form-control" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12 text-center">
                            <input type="submit" value="Enviar" class="btn btn-primary px-5">
                        </div>
                    </div>
                </form>

                <div class="mt-3 text-center">
                    <span id="preencher" style="cursor: pointer;">Preencher</span>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.querySelector("#preencher").addEventListener('click', () => {
            const formulario = document.forms.formulario
            formulario['text_texto'].value = "Daniel Oliveirao"
            formulario['text_password'].value = "abc123"
            formulario['select_pais'].value = "Portugal"
            formulario['check_3'].checked = true
            formulario['radio'][0].checked = true
            formulario['text_area'].textContent = "teste"
        })
    </script>

</body>

</html>



<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    28/06/2023
-->