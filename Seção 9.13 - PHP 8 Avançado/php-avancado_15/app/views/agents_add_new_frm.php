<div class="container-fluid mt-5 mb-5">
    <div class="row justify-content-center pb-5">
        <div class="col-lg-8 col-md-10">
            <div class="card p-4">

                <div class="row justify-content-center">
                    <div class="col-10">

                        <h4><strong>Adicionar novo agente</strong></h4>

                        <hr>

                        <form action="#" method="post">

                            <div class="mb-3">
                                <label for="text_name" class="form-label">Nome do agente</label>
                                <input type="email" name="text_name" id="text_name" value="" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="select_profile" class="form-label">Perfil</label>
                                <select name="select_profile" id="select_profile" class="form-control" required>
                                    <option value="admin">Administrador</option>
                                    <option value="agente">Agente</option>
                                </select>
                            </div>
                            
                            <div class="mb-3 text-center">
                                <a href="#" class="btn btn-secondary"><i class="fa-solid fa-xmark me-2"></i>Cancelar</a>
                                <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-user-plus me-2"></i>Criar agente</button>
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