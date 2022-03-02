<?php
$idCliente = $_GET["idCliente"];
$sql = "SELECT * FROM clientes WHERE idCliente={$idCliente}";
$rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do cliente " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
    <div class="text-center mt-3">
        <h3><img src="img/useredit.svg">Editar Cliente</h3>
    </div>
</header>
<div>
    <form action="index.php?menuop=atualizar-cliente" method="post" class="needs-validation" novalidate>
        <div class="form-group">
            <label for="idliente">ID</label>
            <div class="input-group">
                <span class="input-group-text"><img src="img/id.svg"></span>
                <input class="form-control" required type="text" name="idCliente" value="<?= $dados["idCliente"] ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="nomeCliente">Nome Completo</label>
            <div class="input-group">
                <span class="input-group-text"><img src="img/contact.svg"></span>
                <input class="form-control" required type="text" name="nomeCliente" value="<?= $dados["nomeCliente"] ?>">
                <div class="invalid-feedback">
                    Por favor, insira o nome do(a) cliente.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="dataNasc">Data de Nascimento</label>
                <div class="input-group">
                    <span class="input-group-text"><img src="img/calendar.svg"></span>
                    <input class="form-control" required type="date" name="dataNasc" value="<?= $dados["dataNasc"] ?>">
                    <div class="invalid-feedback">
                        Por favor, insira a data de nascimento.
                    </div>
                </div>
            </div>
            <div class="form-group col-6">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Sexo</label>
                    <div class="input-group">
                        <span class="input-group-text"><img src="img/genero.svg"></span>
                        <select class="form-control" required name="sexoCliente">
                            <option <?php echo ($dados["sexoCliente"] == "") ? 'selected' : '' ?> value="">Selecione o gênero</option>
                            <option <?php echo ($dados["sexoCliente"] == "F") ? 'selected' : '' ?> value="F">Feminino</option>
                            <option <?php echo ($dados["sexoCliente"] == "M") ? 'selected' : '' ?> value="M">Masulino</option>
                            <option <?php echo ($dados["sexoCliente"] == "O") ? 'selected' : '' ?> value="O">Outros</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, selecione o gênero.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="contatoCliente">Telefone</label>
            <div class="input-group">
                <span class="input-group-text"><img src="img/phone.svg"></span>
                <input class="form-control" required type="text" name="contatoCliente" placeholder="(51)99999-9999" value="<?= $dados["contatoCliente"] ?>">
                <div class="invalid-feedback">
                    Por favor, insira o número de telefone.
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="profissaoCliente">Profissão</label>
            <div class="input-group">
                <span class="input-group-text"><img src="img/profissao.svg"></span>
                <input class="form-control" required type="text" name="profissaoCliente" value="<?= $dados["profissaoCliente"] ?>">
                <div class="invalid-feedback">
                    Por favor, insira a profissão.
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="emailCliente">Email</label>
            <div class="input-group">
                <span class="input-group-text"><img src="img/email.svg"></span>
                <input class="form-control" required type="email" name="emailCliente" placeholder="nome@exemplo.com" value="<?= $dados["emailCliente"] ?>">
                <div class="invalid-feedback">
                    Por favor, insira o email.
                </div>
            </div>
        </div>
        <div class="text-center">
            <input class="btn btn-success" type="submit" value="Adicionar" name="bntAdicionar">
        </div>
    </form>
</div>