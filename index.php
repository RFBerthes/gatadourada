<?php
session_start();
define("raiz", "/gatadourada/");
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="description" content="Titulo" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Gata Dourada 1.0</title>
	<link rel="stylesheet" href="<?php echo raiz ?>bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo raiz ?>bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" href="<?php echo raiz ?>media/css/style.css">
    <link rel="stylesheet" href="<?php echo raiz ?>media/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo raiz ?>media/css/login.css">


</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <img src="<?php echo raiz ?>media/imagens/logo.png">
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <form action="<?php echo raiz ?>servicosbd/login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>