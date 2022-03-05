<div class="col-md-12">
	<div class="col-md-10 titulo">Editar Agenda</div>
	<?php

	$id_altera = $atual[2];

	//Recupera dados do banco
	$query = "SELECT * FROM agenda where `idAgendamento` = '$id_altera'";
	$result = $mysqli->query($query);
	$row = $result->fetch_assoc();

	$idServico = $row['servicos_idServico'];
	$idAdicional = $row['adicionais_idAdicionais'];
	//Recupera nome serviço
	$query2 = "SELECT * FROM servicos where `idServico` = '$idServico'";
	$result2 = $mysqli->query($query2);
	$row2 = $result2->fetch_assoc();
	$nomeServico = $row2['nomeServico'];

	//Recupera nome adicional
	$query3 = "SELECT * FROM adicionais where `idAdicional` = '$idAdicional'";
	$result3 = $mysqli->query($query3);
	$row3 = $result3->fetch_assoc();
	$nomeAdicional = $row3['nomeAdicional'];

	$nome_cliente = $row['title'];
	$id_cliente = $row['clientes_id'];
	$start = $row['start'];
	$end = $row['end'];
	$status = $row['status'];
	$observacao = $row['observacao'];
	$valor = $row['valor'];
	$forma_pagamento = $row['forma_pagamento'];
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
	$ano2 = $dt_fim[0];
	$mes2 = $dt_fim[1];
	$dia2 = $dt_fim[2];
	$horario2 = explode(" ", $dia2);
	$hr_fim = $horario2[1];
	$novo_dia2 = $horario2[0];
	$end = "$novo_dia2" . "/" . "$mes2" . "/" . "$ano2";

	?>

	<form name="form1" action="<?php echo raiz ?>servicosbd/editaragenda.php" method="POST">
		<input type="hidden" name="idaltera" value="<?php echo $id_altera; ?>">
		<input type="hidden" name="nomeCliente" value="<?php echo $nome_cliente; ?>">
		<input type="hidden" class="date data" required name="dt_fim" placeholder="__/__/____" value="<?php echo $end; ?>">
		<div class="row">
			<div class="col-md-6 item">
				<div class="texto">Cliente:</div>
				<select name="idCliente" required>
					<option value="<?php echo $id_cliente; ?>"><?php echo $nome_cliente; ?></option>
					<?php
					$query = "SELECT `idCliente`,`nome` FROM `clientes` ORDER BY nome ASC";
					$result = $mysqli->query($query);
					$num_results = $result->num_rows;
					if ($num_results > 0) {
						while ($row = $result->fetch_assoc()) {
							$id_cliente = $row['idCliente'];
							$nome_cliente = $row['nome'];
							if (!empty($nome_cliente)) {
					?>
								<option value="<?php echo $id_cliente; ?>"><?php echo $nome_cliente; ?></option>
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
					<option value="<?php echo $idServico; ?>"><?php echo $nomeServico; ?></option>
					<?php
					$query = "SELECT * FROM `servicos` ORDER BY `nomeServico` ASC";
					$result = $mysqli->query($query);
					$num_results = $result->num_rows;
					if ($num_results > 0) {
						while ($row = $result->fetch_assoc()) {
							$id_servico = $row['idServico'];
							$nome_servico = $row['nomeServico'];
							if (!empty($nome_servico)) {
					?>
								<option value="<?php echo $id_servico; ?>"><?php echo $nome_servico; ?></option>

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
					<option value="<?php echo $idAdicional; ?>"><?php echo $nomeAdicional; ?></option>
					<?php
					$query = "SELECT * FROM `adicionais` ORDER BY `nomeAdicional` ASC";
					$result = $mysqli->query($query);
					$num_results = $result->num_rows;
					if ($num_results > 0) {
						while ($row = $result->fetch_assoc()) {
							$id_adicional = $row['idAdicional'];
							$nome_adicional = $row['nomeAdicional'];
							if (!empty($nome_cliente)) {
					?>
								<option value="<?php echo $id_adicional; ?>"><?php echo $nome_adicional; ?></option>
					<?php
							}
						}
					}
					?>
				</select>
				<?php if (!empty($id_adicional)) { ?>
					<input type="hidden" name="id_adicional" value="<?php echo $id_adicional; ?>">
				<?php } ?>
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
	<form action="<?php echo raiz ?>servicosbd/deletaragenda.php?valorid=<?php echo $id_altera; ?>" onClick="return confirm('Tem certeza que deseja deletar?')" method="POST">
		<div class="col-md-12" style="margin-top: 20px; text-align: center">
			<button type="submit" class="botao_deletar">Deletar</i></button>
		</div>
	</form>
</div>