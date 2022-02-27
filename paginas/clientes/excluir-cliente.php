<header>
    <h3>Excluir Cliente</h3>
</header>
<?php
    //recebendo dados clientes
    $idCliente = mysqli_real_escape_string($conexao, $_GET["idCliente"]);

    $sql = "DELETE FROM clientes WHERE idCliente = '{$idCliente}'";

        mysqli_query($conexao, $sql) or die("Erro ao excluir o cliente. " . mysqli_error($conexao));

        echo "Cliente excluído com sucesso!";
?>