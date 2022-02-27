<header>
    <h3>CLIENTES</h3>
</header>
<div>
    <a href="index.php?menuop=cad-cliente">Novo Cliente</a>
</div>
<div>
    <form action="index.php?menuop=clientes" method="post">
        <input type="text" name="txt_pesquisa">
        <input type="submit" value="Pesquisar">
    </form>
</div>
<table border="1">
    <thead>
        <tr>
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
        $pagina = (isset($_GET['pagina'])?(int)$_GET['pagina']:1);


        //recupera texto pesquisa
        $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";
        
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
        ";

        $rs = mysqli_query($conexao, $sql) or die("Ero ao executar a consulta!" . mysqli_connect_error($conexao));
        while ($dados = mysqli_fetch_assoc($rs)) {

        ?>
            <tr>
                <td> <?= $dados["idCliente"] ?> </td>
                <td> <?= $dados["nomeCliente"] ?> </td>
                <td> <?= $dados["emailCliente"] ?> </td>
                <td> <?= $dados["contatoCliente"] ?> </td>
                <td> <?= $dados["dataCad"] ?> </td>
                <td> <a href="index.php?menuop=editar-cliente&idCliente=<?= $dados["idCliente"] ?>"> Editar </td>
                <td> <a href="index.php?menuop=excluir-cliente&idCliente=<?= $dados["idCliente"] ?>"> Excluir </td>


                
            </tr>
        <?php
        }
        ?>

    </tbody>
</table>