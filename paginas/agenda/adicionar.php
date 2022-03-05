<div class="col-md-12">
	<div class="col-md-10 titulo">Agendar clientes cadastrados</div>
	<div id="adicionar">
		<form name="form1" action="<?php echo raiz ?>servicosbd/adicionaragenda.php" method="POST">
			<div class="row">
				<div class="col-md-6 item">
					<div class="texto">Cliente:</div>
					<select name="idCliente" id="" required>
						<option value="">Escolha o cliente</option>
						<?php
						$query = "SELECT `idCliente`,`nomeCliente` FROM `clientes` ORDER BY nomeCliente ASC";
						$result = $mysqli->query($query);
						$num_results = $result->num_rows;
						if ($num_results > 0) {
							while ($row = $result->fetch_assoc()) {
								$id_cliente = $row['idCliente'];
								$nome_cliente = $row['nomeCliente'];
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
				<div class="col-md-2 item">
					<div class="texto">Data:</div>
					<input type="text" class="date" required name="start" placeholder="__/__/____">
				</div>
				<div class="col-md-2">
					<div class="texto">Hora In&iacute;cio:</div>
					<input type="text" class="hora" required name="hr_inicio" placeholder="__:__">
				</div>
				<div class="col-md-2">
					<div class="texto">Hora Fim:</div>
					<input type="text" class="hora" required name="hr_fim" placeholder="__:__">
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="texto">Atendimento</div>
					<select name="servico" id="" required>
						<option value="">Serviço</option>
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
					<select name="adicional" id="" required>
						<option value="">Opcional</option>
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
					<input type="text" name="observacao" placeholder="Informe detalhes">
				</div>
				<div class="col-md-6">
					<div class="texto">Forma de pagamento:</div>
					<select name="forma_pagamento" id="forma_pagamento">
						<option value="avista">À vista</option>
						<option value="cartao_credito">Cart&atilde;o de cr&eacute;dito</option>
						<option value="cartao_debito">Cart&atilde;o de d&eacute;bito</option>
					</select>
				</div>
			</div>
	</div>

	<div class="col-md-12" style="margin-top: 20px; text-align: center">
		<button type="submit" class="botao_adicionar">Adicionar</i></button>
	</div>
	</form>

</div>