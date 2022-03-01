<header>
    <div class="text-center mt-3">
        <h3><img src="img/removeuser.svg">Excluir Cliente</h3>
    </div>
</header>
<?php
//recebendo dados clientes
$idCliente = mysqli_real_escape_string($conexao, $_GET["idCliente"]);

$sql = "DELETE FROM clientes WHERE idCliente = '{$idCliente}'";

mysqli_query($conexao, $sql) or die("Erro ao excluir o cliente. " . mysqli_error($conexao));

echo "Cliente excluído com sucesso!";
?>

<div class="text-center">
    <a class="btn btn-primary" href="index.php?menuop=clientes">Voltar a lista</a>
</div>