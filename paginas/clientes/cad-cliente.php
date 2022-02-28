<header>
    <h3>Cadastro Cliente</h3>
</header>
<div>
    <form action="index.php?menuop=inserir-cliente" method="post">
        <div class="form-group">
            <label for="nomeCliente">Nome Completo</label>
            <input class="form-control" type="text" name="nomeCliente">

        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="dataNasc">Data de Nascimento</label>
                <input class="form-control" type="date" name="dataNasc">

            </div>
            <div class="form-group col-6">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Sexo</label>
                    <select class="form-control" name="sexoCliente">
                        <option value="F">Feminino</option>
                        <option value="M">Masulino</option>
                        <option value="O">Outros</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="contatoCliente">Telefone</label>
            <input class="form-control" type="text" name="contatoCliente" placeholder="(51)99999-9999">
        </div>
        <div class="form-group">
            <label for="profissaoCliente">Profissão</label>
            <input class="form-control" type="text" name="profissaoCliente">
        </div>
        <div class="form-group">
            <label for="emailCliente">Email</label>
            <input class="form-control" type="email" name="emailCliente" placeholder="nome@exemplo.com">
        </div>
        <div class="text-center">
            <input class="btn btn-success" type="submit" value="Adicionar" name="bntAdicionar">
        </div>
    </form>

</div>