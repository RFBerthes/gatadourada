<?php
//Incluindo arquivo de conexã ao banco 
include("db/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gata Dourada 1.0</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</head>

<body>
    <header class="bg-dark">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?menuop=home">INÍCIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?menuop=clientes">CLIENTES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?menuop=agenda">AGENDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?menuop=financeiro">FINANCEIRO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Ficha de Anamnese</a>
                </li>
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                    <li class="nav-item">
                        <a class="btn btn-outline-warning btn-sm text-light mt-1" href="index.php?menuop=logout">SAIR</a>
                    </li>
                </ul>
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
            <?php
            //Menu do cabeçalho
            $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";
            switch ($menuop) {
                case 'home':
                    include("paginas/home/home.php");
                    break;
                case 'clientes':
                    include("paginas/clientes/clientes.php");
                    break;
                case 'cad-cliente':
                    include("paginas/clientes/cad-cliente.php");
                    break;
                case 'inserir-cliente':
                    include("paginas/clientes/inserir-cliente.php");
                    break;
                case 'editar-cliente':
                    include("paginas/clientes/editar-cliente.php");
                    break;
                case 'atualizar-cliente':
                    include("paginas/clientes/atualizar-cliente.php");
                    break;
                case 'excluir-cliente':
                    include("paginas/clientes/excluir-cliente.php");
                    break;
                case 'agenda':
                    include("paginas/agenda/agenda.php");
                    break;
                case 'financeiro':
                    include("paginas/financeiro/financeiro.php");
                    break;

                default:
                    include("paginas/home/home.php");
                    break;
            }
            ?>
    </main>

    <footer class="container-fluid fixed-bottom bg-dark">
        <div class="text-center">Gata Dourada 1.0</div>
    </footer>


    <!-- jQuery e Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/validation.js"></script>
</body>

</html>