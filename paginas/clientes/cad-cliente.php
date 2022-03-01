<header>
    <div class="text-center mt-3">
        <h3><img src="img/person_add.svg">Cadastro Cliente</h3>
    </div>
</header>
<div>
    <form action="index.php?menuop=inserir-cliente" method="post" class="needs-validation" novalidate>
        <div class="form-group">
            <label for="nomeCliente">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><img src="img/contact.svg"></span>
                <input class="form-control" type="text" name="nomeCliente" placeholder="Nome completo" required >
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
                    <input class="form-control" type="date" name="dataNasc" required>
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
                        <select class="form-control" name="sexoCliente" required>
                            <option selected value="">Selecione o gênero</option>
                            <option value="F">Feminino</option>
                            <option value="M">Masulino</option>
                            <option value="O">Outros</option>
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
                <input class="form-control" type="text" name="contatoCliente" placeholder="(51)99999-9999" required>
                <div class="invalid-feedback">
                    Por favor, insira o número de telefone.
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="profissaoCliente">Profissão</label>
            <div class="input-group">
                <span class="input-group-text"><img src="img/profissao.svg"></span>
                <input class="form-control" type="text" name="profissaoCliente" placeholder="Em qual área trabalha" required>
                <div class="invalid-feedback">
                    Por favor, insira a profissão.
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="emailCliente">Email</label>
            <div class="input-group">
                <span class="input-group-text"><img src="img/email.svg"></span>
                <input class="form-control" type="email" name="emailCliente" placeholder="nome@exemplo.com" required>
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