<?php
include("db/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gata Dourada 1.0</title>
</head>

<body>
    <header>
        <h1>Gata Dourada 1.0</h1>
        <nav>
            <a href="index.php?menuop=home">HOME</a>
            <a href="index.php?menuop=clientes">CLIENTES</a>
            <a href="index.php?menuop=agenda">AGENDA</a>
            <a href="index.php?menuop=financeiro">FINANCEIRO</a>
            <a href="index.php?menuop=financeiro">SAIR</a>
        </nav>
        </nav>
    </header>
    <main>
        <hr>
        <?php
        $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "hoome";
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

</body>

</html>