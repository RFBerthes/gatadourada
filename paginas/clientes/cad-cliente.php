<header>
    <h3>Cadastro Cliente</h3>
</header>
<div>
    <form action="index.php?menuop=inserir-cliente" method="post">
        <div>
            <label for="nomeCliente">Nome</label>
            <input type="text" name="nomeCliente">
        </div>
        <div>
            <label for="dataNasc">Data de Nascimento</label>
            <input type="date" name="dataNasc">
        </div>
        <div>
            <label for="sexoCliente">Sexo</label>
            <input type="text" name="sexoCliente">
        </div>
        <div>
            <label for="contatoCliente">Contato</label>
            <input type="text" name="contatoCliente">

        </div>
        <div>
            <label for="profissaoCliente">Profissão</label>
            <input type="text" name="profissaoCliente">

        </div>
        <div>
            <label for="emailCliente">Email</label>
            <input type="email" name="emailCliente">
        </div>
        <div>
            <input type="submit" value="Adicionar" name="bntAdicionar">
        </div>
    </form>

</div>