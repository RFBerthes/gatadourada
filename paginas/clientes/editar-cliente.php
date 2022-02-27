<?php
    $idCliente = $_GET["idCliente"];
    $sql = "SELECT * FROM clientes WHERE idCliente={$idCliente}";
    $rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do cliente " . mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3>Editar Cliente</h3>
</header>
<div>
    <form action="index.php?menuop=atualizar-cliente" method="post">
        <div>
            <label for="idCliente">ID</label>
            <input type="text" name="idCliente" value="<?=$dados["idCliente"]?>">
        </div>
        <div>
            <label for="nomeCliente">Nome</label>
            <input type="text" name="nomeCliente" value="<?=$dados["nomeCliente"]?>">
        </div>
        <div>
            <label for="dataNasc">Data de Nascimento</label>
            <input type="date" name="dataNasc" value="<?=$dados["dataNasc"]?>">
        </div>
        <div>
            <label for="sexoCliente">Sexo</label>
            <input type="text" name="sexoCliente" value="<?=$dados["sexoCliente"]?>">
        </div>
        <div>
            <label for="contatoCliente">Contato</label>
            <input type="text" name="contatoCliente" value="<?=$dados["contatoCliente"]?>">

        </div>
        <div>
            <label for="profissaoCliente">Profissão</label>
            <input type="text" name="profissaoCliente" value="<?=$dados["profissaoCliente"]?>">

        </div>
        <div>
            <label for="emailCliente">Email</label>
            <input type="email" name="emailCliente" value="<?=$dados["emailCliente"]?>">
        </div>
        <div>
            <input type="submit" value="Atualizar" name="bntAtualizar">
        </div>
    </form>

</div>