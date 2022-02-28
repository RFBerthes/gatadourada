<?php
$idCliente = $_GET["idCliente"];
$sql = "SELECT * FROM clientes WHERE idCliente={$idCliente}";
$rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do cliente " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3>Editar Cliente</h3>
</header>
<div>
    <form action="index.php?menuop=atualizar-cliente" method="post">
        <div class="form-group">
            <label for="idliente">ID</label>
            <input class="form-control" type="text" name="idCliente" value="<?= $dados["idCliente"] ?>">
        </div>
        <div class="form-group">
            <label for="nomeCliente">Nome Completo</label>
            <input class="form-control" type="text" name="nomeCliente" value="<?= $dados["nomeCliente"] ?>">
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="dataNasc">Data de Nascimento</label>
                <input class="form-control" type="date" name="dataNasc" value="<?= $dados["dataNasc"] ?>">

            </div>
            <div class="form-group col-6">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Sexo</label>
                    <select class="form-control" name="sexoCliente" value="<?= $dados["sexoCliente"] ?>">
                        <option value="F">Feminino</option>
                        <option value="M">Masulino</option>
                        <option value="O">Outros</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="contatoCliente">Telefone</label>
            <input class="form-control" type="text" name="contatoCliente" placeholder="(51)99999-9999" value="<?= $dados["contatoCliente"] ?>">
        </div>
        <div class="form-group">
            <label for="profissaoCliente">Profissão</label>
            <input class="form-control" type="text" name="profissaoCliente" value="<?= $dados["profissaoCliente"] ?>">
        </div>
        <div class="form-group">
            <label for="emailCliente">Email</label>
            <input class="form-control" type="email" name="emailCliente" placeholder="nome@exemplo.com" value="<?= $dados["emailCliente"] ?>">
        </div>
        <div class="text-center">
            <input class="btn btn-success" type="submit" value="Atualizar" name="bntAtualizar">
        </div>
    </form>
</div>