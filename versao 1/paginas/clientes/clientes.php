<header>
    <div class="text-center mt-3">
        <h3><img src="img/person.svg">Clientes</h3>
    </div>
</header>
<div>
    <!-- Botão novo cliente -->
    <a class="btn btn-sm btn-outline-secondary mb-2" href="index.php?menuop=cad-cliente"> <img src="img/person_add.svg">Novo Cliente</a>
</div>
<div>
    <!-- Caixa de pesquisa (filtro) -->
    <form action="index.php?menuop=clientes" method="post">
        <div class="input-group">
            <input type="text" class="form-control" name="txt_pesquisa" placeholder="Digite aqui...">
            <button class="btn btn-outline-success btn-sm" type="submit"><img src="img/search.svg">Pesquisar</button>
        </div>
    </form>
</div>
<div class="tabela">
    <!-- Lista de cliente -->
    <table class="table table-hover table-bordered table-sm">
        <thead class="thead-dark">
            <tr class="text-center">
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Contato</th>
                <th>Registro</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //paginação
            $quantidade = 10;
            $pagina = (isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1);
            $inicio = ($quantidade * $pagina) - $quantidade;


            //recupera texto pesquisa
            $txt_pesquisa = (isset($_POST["txt_pesquisa"])) ? $_POST["txt_pesquisa"] : "";

            $sql = "SELECT 
        idCliente,
        contatoCliente,
        emailCliente,
        upper(nomeCliente) AS nomeCliente,
        lower(emailCliente) AS emailCliente,
        CASE	
            WHEN sexoCliente='F' THEN 'FEMININO'
            WHEN sexoCliente='M' THEN 'MASCULINO'
        ELSE
            'NÃO ESPECIFICADO'
        END as sexoCliente,
        DATE_FORMAT(dataNasc, '%d/%m/%Y') AS dataNasc,
        DATE_FORMAT(dataCad, '%d/%m/%Y') AS dataCad
        FROM clientes
        WHERE 
        idCliente = '{$txt_pesquisa}' or
        nomeCliente LIKE '%{$txt_pesquisa}%' ORDER BY nomeCliente ASC
        LIMIT $inicio , $quantidade
        ";

            $rs = mysqli_query($conexao, $sql) or die("Ero ao executar a consulta!" . mysqli_connect_error($conexao));
            while ($dados = mysqli_fetch_assoc($rs)) {

            ?>
                <tr class="text-center">
                    <td> <?= $dados["idCliente"] ?> </td>
                    <td> <?= $dados["nomeCliente"] ?> </td>
                    <td> <?= $dados["emailCliente"] ?> </td>
                    <td> <?= $dados["contatoCliente"] ?> </td>
                    <td> <?= $dados["dataCad"] ?> </td>
                    <td> <a href="index.php?menuop=editar-cliente&idCliente=<?= $dados["idCliente"] ?>"> <button type="button" class="btn btn-sm btn-outline-warning"> <img src="img/pencil.svg"> </button></a> </td>
                    <td> <a href="index.php?menuop=excluir-cliente&idCliente=<?= $dados["idCliente"] ?>"> <button type="button" class="btn btn-sm btn-outline-danger"> <img src="img/trash.svg"> </button></a> </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</div>
<ul class="pagination justify-content-center">
    <?php
    //Paginação
    $sqlTotal = "SELECT idCliente FROM clientes";
    $qrTotal = mysqli_query($conexao, $sqlTotal) or die(mysqli_error($conexao));
    $numTotal = mysqli_num_rows($qrTotal);
    $totalPaginas = ceil($numTotal / $quantidade);

    echo "<li class='page-item'><span class='page-link'> Clientes: $numTotal </span></li>";

    echo "<li class='page-item'><a class='page-link' href='?menuop=clientes&pagina=1'> Primeira </a> </li>";

    if ($pagina > 6) {

        echo "<li class='page-item'><span class='page-link' href='?menuop=clientes&pagina=$pagina-1'> << </span> </li>";
    }

    for ($i = 1; $i <= $totalPaginas; $i++) {

        if ($i >= ($pagina - 5) && $i <= ($pagina + 5)) {

            if ($i == $pagina) {
                echo "<li class='page-item active'><span class='page-link'> $i </span></li>";
            } else {
                echo "<li class='page-item'><a class='page-link' href='?menuop=clientes&pagina={$i}'> {$i} </a> </li>";
            }
        }
    }

    if ($pagina < ($totalPaginas - 5)) {

        echo "<li class='page-item'><span class='page-link' href='?menuop=clientes&pagina=$pagina+1'> >> </span> </li>";
    }

    echo "<li class='page-item'><a class='page-link' href='?menuop=clientes&pagina=$totalPaginas'> Última </a> </li>";

    ?>
</ul>