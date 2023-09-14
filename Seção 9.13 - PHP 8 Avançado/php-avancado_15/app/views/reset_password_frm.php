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

                        <p class="text-center">Indique o seu nome de utilizador.<br>Vamos enviar um email com um <strong>código</strong> para recuperar a password.</p>

                        <form action="#" method="post">

                            <div class="mb-4">
                                <label for="text_username" class="form-label">Utilizador</label>
                                <input type="email" name="text_username" id="text_username" value="" class="form-control" required>
                            </div>
                            <div class="mb-4 text-center">
                                <a href="#" class="btn btn-secondary"><i class="fa-solid fa-caret-left me-2"></i>Voltar</a>
                                <button type="submit" class="btn btn-secondary">Enviar código<i class="fa-regular fa-paper-plane ms-2"></i></button>
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