<div class="container bg-dark text-white mt-2 mb-2" style="width:500px">
    <div class="card card-signin my-5 text-white bg-dark">
        <div class="card-body">
            <h5 class="card-title text-center">Bem vindo ao P&P</h5>
            <h5 class="card-title text-center">Identifique-se</h5>
            <form action="login.php" method="post" class="form-signin">
                <div class="form-label-group">
                    <!-- <label for="usuario">Usuário</label> -->
                    <input type="text" name="usuario" id="usuario" class="form-control mb-3" placeholder="Usuário" required autofocus>
                </div>
                <div class="form-label-group">
                    <!-- <label for="senha">Senha</label> -->
                    <input type="password" name="senha" id="senha" class="form-control mb-3" placeholder="Senha" required>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Lembrar de mim</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase my-2" type="submit">ENTRAR</button>
            </form>
            <?php if (isset($_GET['erro1'])) { ?>
                <script>
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Usuário ou senha inválidos!!',
                        // footer: 'Tente novamente'
                    })
                </script>
                <!-- <div class="alert alert-danger" role="alert" style="text-align:center">
                  <strong>Ops..Usuário ou senha inválidos</strong>
                </div> -->
            <?php } elseif (isset($_GET['erro2'])) { ?>
                <script>
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Usuário cadastrado com função inválida, procure o adminstrador!',
                        // footer: 'Tente novamente'
                    })
                </script>
            <?php } elseif (isset($_GET['erro3'])) { ?>
                <script>
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Sessão não iniciada! autentique-se',
                        // footer: 'Tente novamente'
                    })
                </script>
            <?php } ?>
        </div>
    </div>
</div>