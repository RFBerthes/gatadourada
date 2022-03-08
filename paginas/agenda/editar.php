<div class="col-md-12">
	<div class="col-md-10 titulo">Editar Agenda</div>
	<?php

	$idAgendamento  = $atual[2];

	//Recupera dados do banco
	$query1 = "SELECT * FROM agenda WHERE `idAgendamento` = '$idAgendamento'";
	$result1 = $mysqli->query($query1);
	$row1 = $result1->fetch_assoc();

	$idServicoAtual = $row1['servicos_idServico'];
	$idAdicionalAtual = $row1['adicionais_idAdicionais'];
	//Recupera nome serviço
	$query2 = "SELECT * FROM servicos WHERE `idServico` = '$idServicoAtual'";
	$result2 = $mysqli->query($query2);
	$row2 = $result2->fetch_assoc();
	$nomeServicoAtual = $row2['nomeServico'];

	//Recupera nome adicional
	$query3 = "SELECT * FROM adicionais WHERE `idAdicional` = '$idAdicionalAtual'";
	$result3 = $mysqli->query($query3);
	$row3 = $result3->fetch_assoc();
	$nomeAdicionalAtual = $row3['nomeAdicional'];

	$idClienteAltera = $row1['clientes_id'];
	$nomeCliente = $row1['title'];
	$start = $row1['start'];
	$end = $row1['end'];
	$status = $row1['status'];
	$observacao = $row1['observacao'];
	$valor = $row1['valor'];
	$forma_pagamento = $row1['forma_pagamento'];
	$msg_forma_pagamento = "";
	if ($forma_pagamento == "avista") {
		$msg_forma_pagamento = "À vista";
	}
	if ($forma_pagamento == "cartao_credito") {
		$msg_forma_pagamento = "Cart&atilde;o de cr&eacute;dito";
	}
	if ($forma_pagamento == "cartao_debito") {
		$msg_forma_pagamento = "Cart&atilde;o de d&eacute;bito";
	}
	if ($forma_pagamento == "convenio") {
		$msg_forma_pagamento = "Conv&ecirc;nio";
	}

	//usa explode pra explodir o que tem na variavel
	$dt_inicio = explode("-", $start);
	//pega as pocicoes e colocam dentro de suas respectiveis variaveis
	$ano = $dt_inicio[0];
	$mes = $dt_inicio[1];
	$dia = $dt_inicio[2];
	//eplodir o dia para separar as horas
	$horario = explode(" ", $dia);
	$hr_inicio = $horario[1];
	$novo_dia = $horario[0];
	$start = "$novo_dia" . "/" . "$mes" . "/" . "$ano";

	//mesma coisa para data 2
	$dt_fim = explode("-", $end);
	//pega as pocicoes e colocam dentro de suas respectiveis variaveis
	$ano2 = $dt_fim[0];
	$mes2 = $dt_fim[1];
	$dia2 = $dt_fim[2];
	//eplodir o dia para separar as horas
	$horario2 = explode(" ", $dia2);
	$hr_fim = $horario2[1];
	$novo_dia2 = $horario2[0];
	$end = "$novo_dia2" . "/" . "$mes2" . "/" . "$ano2";

	?>

	<form name="form1" action="<?php echo raiz ?>servicosbd/editaragenda.php" method="POST">
		<input type="hidden" name="idClienteAltera" value="<?php echo $idClienteAltera; ?>">
		<input type="hidden" name="$idAgendamento" value="<?php echo $idAgendamento; ?>">
		<input type="hidden" name="valor" value="<?php echo $valor; ?>">
		<div class="row">
			<div class="col-md-6 item">
				<div class="texto">Cliente:</div>
				<select name="idCliente" required>
					<option value="<?php echo $idCliente; ?>"><?php echo $nomeCliente; ?></option>
					<?php
					$query4 = "SELECT `idCliente`,`nomeCliente` FROM `clientes` ORDER BY `nomeCliente` ASC";
					$result4 = $mysqli->query($query4);
					$num_results4 = $result4->num_rows;
					if ($num_results4 > 0) {
						while ($row4 = $result4->fetch_assoc()) {
							$idCliente = $row4['idCliente'];
							$nomeCliente = $row4['nomeCliente'];
							if (!empty($nomeCliente)) {
					?>
								<option value="<?php echo $idCliente; ?>"><?php echo $nomeCliente; ?></option>
					<?php
							}
						}
					}
					?>
				</select>
			</div>
			<div class="col-md-2">
				<div class="texto">Data:</div>
				<input type="text" class="date" required name="start" placeholder="__/__/____" value="<?php echo $start; ?>">
			</div>
			<div class="col-md-2">
				<div class="texto">Hora In&iacute;cio:</div>
				<input type="text" class="hora" required name="hr_inicio" placeholder="__:__" value="<?php echo $hr_inicio; ?>">
			</div>
			<div class="col-md-2">
				<div class="texto">Hora Fim:</div>
				<input type="text" class="hora" required name="hr_fim" placeholder="__:__" value="<?php echo $hr_fim; ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<div class="texto">Atendimento</div>
				<select name="servico" required>
					<option value="<?php echo $idServicoAtual; ?>"><?php echo $nomeServicoAtual; ?></option>
					<?php
					$query5 = "SELECT * FROM `servicos` ORDER BY `nomeservico` ASC";
					$result5 = $mysqli->query($query5);
					$num_results = $result5->num_rows;
					if ($num_results > 0) {
						while ($row5 = $result5->fetch_assoc()) {
							$idServico = $row5['idServico'];
							$nomeServico = $row5['nomeServico'];
							if (!empty($nomeCliente)) {
					?>
								<option value="<?php echo $idServico; ?>"><?php echo $nomeServico; ?></option>
					<?php
							}
						}
					}
					?>
				</select>
			</div>
			<div class="col-md-2">
				<div class="texto">Adicional</div>
				<select name="adicional" required>
					<option value="<?php echo $idAdicionalAtual; ?>"><?php echo $nomeAdicionalAtual; ?></option>
					<?php
					$query6 = "SELECT * FROM `adicionais` ORDER BY `nomeAdicional` ASC";
					$result6 = $mysqli->query($query6);
					$num_results = $result6->num_rows;
					if ($num_results > 0) {
						while ($row6 = $result6->fetch_assoc()) {
							$idAdicional = $row6['idAdicional'];
							$nomeAdicional = $row6['nomeAdicional'];
							if (!empty($nomeCliente)) {
					?>
								<option value="<?php echo $idAdicional; ?>"><?php echo $nomeAdicional; ?></option>
					<?php
							}
						}
					}
					?>
				</select>

			</div>
			<div class="col-md-2">
				<div class="texto">Obs.:</div>
				<input type="text" name="observacao" placeholder="Informe detalhes" value="<?php echo $observacao; ?>">
			</div>
			<div class="col-md-6">
				<div class="texto"> Forma de pagamento:</div>
				<select name="forma_pagamento" id="forma_pagamento">
					<?php
					if (!empty($forma_pagamento)) {
					?>
						<option value="<?php echo $forma_pagamento; ?>"><?php echo $msg_forma_pagamento; ?></option>
					<?php
					}
					?>
					<option value="a_vista">À vista</option>
					<option value="cartao_credito">Cart&atilde;o de cr&eacute;dito</option>
					<option value="cartao_debito">Cart&atilde;o de d&eacute;bito</option>
				</select>
			</div>
		</div>
		<div class="col-md-12" style="margin-top: 20px; text-align: center">
			<button type="submit" class="botao_adicionar">Salvar</i></button>
		</div>
	</form>
	<form action="<?php echo raiz ?>servicosbd/deletaragenda.php?valorid=<?php echo $idAgendamento; ?>" onClick="return confirm('Tem certeza que deseja deletar?')" method="POST">

		<div style="margin-top: 20px; text-align: center">
			<button type="submit" class="btn btn-danger">Deletar</i></button>
		</div>
	</form>
</div>