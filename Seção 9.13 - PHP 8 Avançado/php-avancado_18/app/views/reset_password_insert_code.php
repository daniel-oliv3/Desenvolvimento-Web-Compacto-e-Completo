<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6 col-sm-8 col-10">
            <div class="card p-4">

                <div class="d-flex align-items-center justify-content-center my-4">
                    <img src="assets/images/logo_64.png" class="img-fluid me-3">
                    <h2><strong><?= APP_NAME ?></strong></h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-8">

                        <p class="text-center">Introduza o código que lhe enviámos por email.</p>

                        <form action="#" method="post">

                            <div class="row justify-content-center mb-4">
                                <div class="col-8">
                                    <h5 class="text-center">Código</h5>
                                    <input type="text" name="text_code" id="text_code" value="" class="form-control form-control-lg fw-bold text-center" required>
                                </div>
                            </div>

                            <div class="mb-4 text-center">
                                <a href="#" class="btn btn-secondary px-4"><i class="fa-solid fa-chevron-left me-2"></i>Voltar</a>
                                <button type="submit" class="btn btn-secondary px-4">Avançar<i class="fa-solid fa-chevron-right ms-2"></i></button>
                            </div>

                        </form>

                        <div class="alert alert-danger p-2 text-center">
                            [mensagem de erro]
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>