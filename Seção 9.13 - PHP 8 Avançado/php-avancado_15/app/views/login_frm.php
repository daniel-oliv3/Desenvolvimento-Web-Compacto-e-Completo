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
                        <form action="#" method="post">
                            <div class="mb-3">
                                <label for="text_username" class="form-label">Utilizador</label>
                                <input type="email" name="text_username" id="text_username" value="" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="text_password" class="form-label">Password</label>
                                <input type="password" name="text_password" id="text_password" class="form-control" required>
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-secondary px-4">Entrar<i class="fa-solid fa-right-to-bracket ms-2"></i></button>
                            </div>

                            <div class="mb-3 text-center">
                                <a href="#">Esqueci-me da password!</a>
                            </div>

                            <div class="alert alert-danger p-2 text-center">
                                [mensagem de erro]
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>