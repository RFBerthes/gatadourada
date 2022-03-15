<div class="col-md-12">
    <div class="col-md-10 titulo">Adicionais</div>

    <a href="financeiro/cad-adicional">

        <div class="botao adicional col-md-2">
            <div class="icon">
                <i class="ico fa fa-user-plus"></i>
            </div>
            <div class="detalhe">
                <div class="tela">Cadastrar Adicional</div>
            </div>
        </div>
    </a>
</div>

<div id="lista" class="col-md-12" style="margin-bottom:30px;">
    <table>
        <tr class="titulo">
            <td><label>Adicional</label></td>
            <td><label>Valor (R$)</label></td>
            <td><label>Op&ccedil;&otilde;es</label></td>
        </tr>

        <?php
        $query3 = "select * from adicionais order by nomeAdicional asc";
        $result3 = $mysqli->query($query3);

        //mostrar o numero de linhas retornadas
        $num_results3 = $result3->num_rows;
        if ($num_results3 > 0) {
            while ($row3 = $result3->fetch_assoc()) {
                $id = $row3['idAdicional'];
                $nome = $row3['nomeAdicional'];
                $valor = $row3['valorAdicional'];
        ?>
                <tr class="dados">
                    <td><?php echo $nome; ?></td>
                    <td><?php echo $valor; ?></td>
                    <td>
                        <a href="financeiro/editar-adicional/<?php echo $id; ?>">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>
                        <a href="<?php raiz ?>servicosbd/deletaradicional.php?valorid=<?php echo $id; ?>" onClick="return confirm('Tem certeza que deseja deletar?')">
                            <i class="fa fa-times"></i>
                        </a>
                    </td>
                </tr>
        <?php
            }
        }
        $result3->free();
        $mysqli->close();
        ?>
    </table>
</div>