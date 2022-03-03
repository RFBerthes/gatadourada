<div class="col-md-12">
    <div class="col-md-10 titulo">Serviços</div>

    <a href="financeiro/cad-servico">

        <div class="botao servicos col-md-2">
            <div class="icon">
                <i class="ico fa fa-user-plus"></i>
            </div>
            <div class="detalhe">
                <div class="tela">Cadastrar Serviço</div>
            </div>
        </div>
    </a>
</div>

<div id="lista" class="col-md-12" style="margin-bottom:30px;">
    <table>
        <tr class="titulo">
            <td><label>Serviço</label></td>
            <td><label>Valor (R$)</label></td>
            <td><label>Op&ccedil;&otilde;es</label></td>
        </tr>

        <?php
        $query = "select * from servicos order by nomeServico asc";
        $result = $mysqli->query($query);

        //mostrar o numero de linhas retornadas
        $num_results = $result->num_rows;
        if ($num_results > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['idServico'];
                $nome = $row['nomeServico'];
                $valor = $row['valorServico'];
        ?>
                <tr class="dados">
                    <td><?php echo $nome; ?></td>
                    <td><?php echo $valor; ?></td>
                    <td>
                        <a href="financeiro/editar-servico/<?php echo $id; ?>">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>
                        <a href="<?php raiz ?>servicosbd/deletarserviço.php?valorid=<?php echo $id; ?>" onClick="return confirm('Tem certeza que deseja deletar?')">
                            <i class="fa fa-times"></i>
                        </a>
                    </td>
                </tr>
        <?php
            }
        }
        $result->free();
        ?>
    </table>
</div>
