<header>
    <h3>Atualizar Cliente</h3>
</header>
<?php
    //recebendo dados editar-cliente
    $idCliente = mysqli_real_escape_string($conexao, $_POST["idCliente"]);
    $nomeCliente = mysqli_real_escape_string($conexao, $_POST["nomeCliente"]);
    $dataNasc = mysqli_real_escape_string($conexao, $_POST["dataNasc"]);
    $sexoCliente = mysqli_real_escape_string($conexao, $_POST["sexoCliente"]);
    $contatoCliente = mysqli_real_escape_string($conexao, $_POST["contatoCliente"]);
    $profissaoCliente = mysqli_real_escape_string($conexao, $_POST["profissaoCliente"]);
    $emailCliente = mysqli_real_escape_string($conexao, $_POST["emailCliente"]);

    $sql = "UPDATE clientes SET
        nomeCliente = '{$nomeCliente}', 
        dataNasc = '{$dataNasc}', 
        sexoCliente = '{$sexoCliente}', 
        contatoCliente = '{$contatoCliente}', 
        profissaoCliente = '{$profissaoCliente}', 
        emailCliente = '{$emailCliente}'
        WHERE idCliente = '{$idCliente}'
        ";

        mysqli_query($conexao, $sql) or die("Erro ao realizar o cadastro. " . mysqli_error($conexao));

        echo "Cliente atualizado com sucesso!";
?>