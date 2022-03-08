<div class="col-md-12">
	<div class="col-md-10 titulo">Editar Cliente
	</div>
	<?php

	$idCliente = $atual[2];

	$query = "SELECT * FROM clientes where `idCliente` = '$idCliente'";

	$result = $mysqli->query($query);
	$row = $result->fetch_assoc();

	$nomeCliente = $row["nomeCliente"];
	$genero = $row["genero"];
	$numero = $row["numero"];
	$email = $row["email"];
	$profissao = $row["profissao"];
	$fototipo = $row["fototipo"];
	$bronzeAntes = $row["bronzeAntes"];
	$pele = $row["pele"];
	$respiratorio = $row["respiratorio"];
	$respiratorioDesc = $row["respiratorioDesc"];
	$hipertensao = $row["hipertensao"];
	$degenerativa = $row["degenerativa"];
	$alergia = $row["alergia"];
	$alergiaDesc = $row["alergiaDesc"];
	$ferimentoTatuagem = $row["ferimentoTatuagem"];
	$ferimentoTatuagemDesc = $row["ferimentoTatuagemDesc"];
	$hematoma = $row["hematoma"];
	$hematomaDesc = $row["hematomaDesc"];
	$medicacao = $row["medicacao"];
	$medicacaoDesc = $row["medicacaoDesc"];
	$transpiracao = $row["transpiracao"];
	$transpiracaoDesc = $row["transpiracaoDesc"];
	$depilacao = $row["depilacao"];
	$depilacaoDesc = $row["depilacaoDesc"];
	$vitiligo = $row["vitiligo"];
	$vitiligoDesc = $row["vitiligoDesc"];
	$psoriase = $row["psoriase"];
	$autorizacao = $row["autorizacao"];
	$idade = $row["idade"];

	$dataNasc = $row["dataNasc"];
	$dt_nasc = explode("-", $dataNasc);
	$ano = $dt_nasc[0];
	$mes = $dt_nasc[1];
	$dia = $dt_nasc[2];
	$dataNasc = "$dia" . "/" . "$mes" . "/" . "$ano";

	?>

	<div id="editar">
		<form action="<?php echo raiz ?>servicosbd/editarclientes.php" method="POST">
			<div class="col-md-6 item">
				<div class="texto">Nome:*</div>
				<input type="text" name="nomeCliente" placeholder="Nome Completo" required value="<?php echo $nomeCliente; ?>">
				<input type="hidden" name="idCliente" value="<?php echo $idCliente; ?>">
			</div>
			<div class="col-md-6 item">
				<div class="texto">Telefone Celular:*</div>
				<input type="text" class="telefone" name="numero" placeholder="(__)_____-____" maxlength="15" required value="<?php echo $numero; ?>">
			</div>
			<div class="col-md-6 item">
				<div class="texto">Email:</div>
				<input type="text" name="email" placeholder="email@host.com" value="<?php echo $email; ?>">
			</div>
			<div class="col-md-3 item">
				<div class="texto">Data de Nascimento:</div>
				<input type="text" class="date data" name="dataNasc" placeholder="__/__/____" value="<?php echo $dataNasc; ?>">>
			</div>
			<div class="col-md-3 item">
				<div class="texto">Gênero:</div>
				<select class="genero" name="genero">
					<option selected value="<?php echo $genero ?>"><?php if ($genero == "F") {
																		echo "Feminino";
																	} else {
																		echo "Masulino";
																	}
																	if ($genero == "O") {
																		echo "Outros";
																	} ?></option>
					<option value="F">Feminino</option>
					<option value="M">Masulino</option>
					<option value="O">Outros</option>
				</select>
			</div>

			<div class="col-md-10 titulo">Dados Ficha de Anamnese (apenas para bronze na máquina)</div>
			<div id="adicionar">
				<div class="col-md-3 item">
					<div class="texto">Profissão:</div>
					<input type="text" class="profissao" name="profissao" placeholder="Atua em qual área" value="<?php echo $profissao; ?>">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Já fez esse tipo de bronzeamento antes:</div>
					<select class="bronzeantes" name="bronzeAntes">
					<option selected value="<?php echo $bronzeAntes ?>"><?php if ($bronzeAntes == 1) {
																			echo "Sim";
																		} else {
																			echo "Não";																													
																		} ?></option>						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item" style="text-align: center">
					<div class="texto">Autoriza postar fotos em redes sociais:</div>
					<select class="autorizacao" name="autorizacao">
					<option selected value="<?php echo $autorizacao ?>"><?php if ($autorizacao == 1) {
																			echo "Sim";
																		} else {
																			echo "Não";																													
																		} ?></option>
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Fototipo:</div>
					<select class="fototipo" name="fototipo">
						<option selected value="<?php echo $fototipo ?>"><?php if ($fototipo == "I") {
																			echo "I";
																		} elseif ($fototipo == "II") {
																			echo "II";
																		}elseif ($fototipo == "III") {
																			echo "III";
																		}elseif ($fototipo == "IV") {
																			echo "IV";
																		}elseif ($fototipo == "V") {
																			echo "V";
																		}else {
																			echo "VI";																													
																		} ?></option>
						<option value="I">I</option>
						<option value="II">II</option>
						<option value="III">III</option>
						<option value="IV">IV</option>
						<option value="V">V</option>
						<option value="VI">VI</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Tipo de pele:</div>
					<select class="pele" name="pele">
					<option selected value="<?php echo $pele ?>"><?php 	echo $pele;?></option>
						<option value="Normal">Normal</option>
						<option value="Seca">Seca</option>
						<option value="Oleoasa">oleosa</option>
						<option value="Mista">Mista</option>
					</select>
				</div>

				<div class="col-md-3 item">
					<div class="texto">Problemas de hipertensão:</div>
					<select class="hipertensao" name="hipertensao">
					<option selected value="<?php echo $hipertensao ?>"><?php if ($hipertensao == 1) {
																			echo "Sim";
																		} else {
																			echo "Não";																													
																		} ?></option>
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Doenças degenerativas:</div>
					<select class="degenerativa" name="degenerativa">
					<option selected value="<?php echo $degenerativa ?>"><?php if ($degenerativa == 1) {
																			echo "Sim";
																		} else {
																			echo "Não";																													
																		} ?></option>		
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Psoríase:</div>
					<select class="psoriase" name="psoriase">
					<option selected value="<?php echo $psoriase ?>"><?php if ($psoriase == 1) {
																			echo "Sim";
																		} else {
																			echo "Não";																													
																		} ?></option>
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Alergias na pele:</div>
					<select class="alergia" name="alergia">
						<option selected value="<?php echo $alergia ?>"><?php if ($alergia == 1) {
																			echo "Sim";
																		} else {
																			echo "Não";																													
																		} ?></option>						
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Quais:</div>
					<input type="text" class="alergiaDesc" name="alergiaDesc" placeholder="Se sim, descreva" value="<?php echo $alergiaDesc; ?>">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Problemas respiratórios:</div>
					<select class="respiratorio" name="respiratorio">
					<option selected value="<?php echo $respiratorio ?>"><?php if ($respiratorio == 1) {
																			echo "Sim";
																		} else {
																			echo "Não";																													
																		} ?></option>							<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Quais:</div>
					<input type="text" class="respiratorioDesc" name="respiratorioDesc" placeholder="Se sim, descreva" value="<?php echo $respiratorioDesc; ?>">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Ferimento ou tatuagem não cicatrizada:</div>
					<select class="ferimentoTatuagem" name="ferimentoTatuagem">
					<option selected value="<?php echo $ferimentoTatuagem ?>"><?php if ($ferimentoTatuagem == 1) {
																			echo "Sim";
																		} else {
																			echo "Não";																													
																		} ?></option>							<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Em qual região:</div>
					<input type="text" class="ferimentoTatuagemDesc" name="ferimentoTatuagemDesc" placeholder="Se sim, descreva" value="<?php echo $ferimentoTatuagemDesc; ?>">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Hematomas:</div>
					<select class="hematoma" name="hematoma">
					<option selected value="<?php echo $hematoma ?>"><?php if ($hematoma == 1) {
																			echo "Sim";
																		} else {
																			echo "Não";																													
																		} ?></option>							<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Em qual região:</div>
					<input type="text" class="hematomaDesc" name="hematomaDesc" placeholder="Se sim, descreva" value="<?php echo $hematomaDesc; ?>">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Em tratamento com medicação contínua:</div>
					<select class="medicacao" name="medicacao">
					<option selected value="<?php echo $medicacao ?>"><?php if ($medicacao == 1) {
																			echo "Sim";
																		} else {
																			echo "Não";																													
																		} ?></option>							<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Quais:</div>
					<input type="text" class="medicacaoDesc" name="medicacaoDesc" placeholder="Se sim, descreva" value="<?php echo $medicacaoDesc; ?>">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Forte transpiração corporal:</div>
					<select class="transpiracao" name="transpiracao">
					<option selected value="<?php echo $transpiracao ?>"><?php echo $transpiracao;?> </option>						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Em qual região:</div>
					<input type="text" class="transpiracaoDesc" name="transpiracaoDesc" placeholder="Se sim, descreva" value="<?php echo $transpiracaoDesc; ?>">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Vitiligo:</div>
					<select class="vitiligo" name="vitiligo">
					<option selected value="<?php echo $vitiligo ?>"><?php if ($vitiligo == 1) {
																			echo "Sim";
																		} else {
																			echo "Não";																													
																		} ?></option>							<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Em qual região:</div>
					<input type="text" class="vitiligoDesc" name="vitiligoDesc" placeholder="Se sim, descreva" value="<?php echo $vitiligoDesc; ?>">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Depilação de todo tipo:</div>
					<select class="depilacao" name="depilacao">
					<option selected value="<?php echo $depilacao ?>"><?php echo $depilacao;?> </option>
						<option value="Sim, a menos de 24h">Sim, a menos de 24h</option>
						<option value="Sim, a mais de 24h">Sim, a mais de 24h</option>
						<option value="Não">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Quantas semanas:</div>
					<input type="number" class="depilacaoDesc" name="depilacaoDesc" placeholder="Número" value="<?php echo $depilacaoDesc; ?>">
				</div>


				<!-- Botão de envio -->
				<div class="col-md-12" style="margin-top: 20px; text-align: center">
					<button type="submit" class="botao_adicionar">Atualizar</i></button>
				</div>
		</form>
	</div>

</div>