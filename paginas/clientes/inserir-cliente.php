<header>
    <h3>Inserir Cliente</h3>
</header>
<?php
    //recebendo dados cad-clientes
    $nomeCliente = mysqli_real_escape_string($conexao, $_POST["nomeCliente"]);
    $dataNasc = mysqli_real_escape_string($conexao, $_POST["dataNasc"]);
    $sexoCliente = mysqli_real_escape_string($conexao, $_POST["sexoCliente"]);
    $contatoCliente = mysqli_real_escape_string($conexao, $_POST["contatoCliente"]);
    $profissaoCliente = mysqli_real_escape_string($conexao, $_POST["profissaoCliente"]);
    $emailCliente = mysqli_real_escape_string($conexao, $_POST["emailCliente"]);

    $sql_ins = "INSERT INTO clientes (
        dataCad,
        nomeCliente, 
        dataNasc, 
        sexoCliente, 
        contatoCliente, 
        profissaoCliente, 
        emailCliente) 
        VALUES(
            CURRENT_TIMESTAMP,
            '{$nomeCliente}',
            '{$dataNasc}',
            '{$sexoCliente}',
            '{$contatoCliente}',
            '{$profissaoCliente}',
            '{$emailCliente}'
        )
        ";

        mysqli_query($conexao, $sql_ins) or die("Erro ao realizar o cadastro. " . mysqli_error($conexao));

        echo "Cliente cadastrado com sucesso!";
?>