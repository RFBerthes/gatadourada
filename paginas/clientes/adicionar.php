<div class="col-md-12">
	<div class="col-md-10 titulo">Adicionar Clientes</div>
	<div id="adicionar">
		<form action="<?php echo raiz ?>servicosbd/adicionarclientes.php" method="POST">
			<div class="col-md-6 item">
				<div class="texto">Nome:*</div>
				<input type="text" name="nome" placeholder="Nome Completo" required>
			</div>
			<div class="col-md-6 item">
				<div class="texto">Telefone Celular:*</div>
				<input type="text" class="telefone" name="telefone_celular" placeholder="(__)_____-____" maxlength="15" required>
			</div>
			<div class="col-md-6 item">
				<div class="texto">Email:</div>
				<input type="text" name="email" placeholder="email@host.com">
			</div>
			<div class="col-md-6 item">
				<div class="texto">Data de Nascimento:</div>
				<input type="text" class="date data" name="dt_nascimento" placeholder="__/__/____">
			</div>
			<div class="col-md-12">
			</div>
			<div class="col-md-10 titulo">Dados Ficha de Anamnese (apenas para bronze na máquina)</div>
			<div id="adicionar">
				<div class="col-md-3 item">
					<div class="texto">Gênero:</div>
					<select class="genero" name="sexoCliente">
						<option selected value="">Selecione o gênero</option>
						<option value="F">Feminino</option>
						<option value="M">Masulino</option>
						<option value="O">Outros</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Profissão:</div>
					<input type="text" class="profissao" name="profissao" placeholder="Atua em qual área">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Fototipo:</div>
					<select class="fototipo" name="fototipo">
						<option selected value="">Selecione o fototipo</option>
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
						<option selected value="">Selecione o tipo de pele</option>
						<option value="Normal">Normal</option>
						<option value="Seca">Seca</option>
						<option value="Oleoasa">oleosa</option>
						<option value="Mista">Mista</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Já fes esse tipo de bronzeamento antes:</div>
					<select class="bronzeantes" name="pele">
						<option selected value="">Escolha a opção</option>
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Problemas de hipertensão:</div>
					<select class="hipertensao" name="hipertensao">
						<option selected value="">Escolha a opção</option>
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Doenças degenerativas:</div>
					<select class="degenerativa" name="degenerativa">
						<option selected value="">Escolha a opção</option>
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Psoríase:</div>
					<select class="psoriase" name="psoriase">
						<option selected value="">Escolha a opção</option>
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Alergias na pele:</div>
					<select class="alergia" name="alergia">
						<option selected value="">Escolha a opção</option>
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Quais:</div>
					<input type="text" class="alergiaDesc" name="alergiaDesc" placeholder="Se sim, descreva">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Problemas respiratórios:</div>
					<select class="respiratorio" name="respiratorio">
						<option selected value="">Escolha a opção</option>
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Quais:</div>
					<input type="text" class="respiratorioDesc" name="respiratorioDesc" placeholder="Se sim, descreva">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Ferimento ou tatuagem não cicatrizada:</div>
					<select class="ferimentoTatuagem" name="ferimentoTatuagem">
						<option selected value="">Escolha a opção</option>
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Em qual região:</div>
					<input type="text" class="ferimentoTatuagemDesc" name="ferimentoTatuagemDesc" placeholder="Se sim, descreva">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Hematomas:</div>
					<select class="hematoma" name="hematoma">
						<option selected value="">Escolha a opção</option>
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Em qual região:</div>
					<input type="text" class="hematomaDesc" name="hematomaDesc" placeholder="Se sim, descreva">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Em tratamento com medicação contínua:</div>
					<select class="medicacao" name="medicacao">
						<option selected value="">Escolha a opção</option>
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Quais:</div>
					<input type="text" class="medicacaoDesc" name="medicacaoDesc" placeholder="Se sim, descreva">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Forte transpiração corporal:</div>
					<select class="transpiracao" name="transpiracao">
						<option selected value="">Escolha a opção</option>
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Em qual região:</div>
					<input type="text" class="transpiraçãoDesc" name="transpiraçãoDesc" placeholder="Se sim, descreva">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Vitiligo:</div>
					<select class="vitiligo" name="vitiligo">
						<option selected value="">Escolha a opção</option>
						<option value="1">Sim</option>
						<option value="0">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Em qual região:</div>
					<input type="text" class="vitiligoDesc" name="vitiligoDesc" placeholder="Se sim, descreva">
				</div>
				<div class="col-md-3 item">
					<div class="texto">Depilação de todo tipo:</div>
					<select class="depilacao" name="depilacao">
						<option selected value="">Escolha a opção</option>
						<option value="Sim, a menos de 24h">Sim, a menos de 24h</option>
						<option value="Sim, a mais de 24h">Sim, a mais de 24h</option>
						<option value="N">Não</option>
					</select>
				</div>
				<div class="col-md-3 item">
					<div class="texto">Quantas semanas:</div>
					<input type="number" class="depilacaoDesc" name="depilacaoDesc" placeholder="Número">
				</div>

				<!-- Botão de envio -->
				<div class="col-md-12" style="margin-top: 20px; text-align: center">
					<button type="submit" class="botao_adicionar">Adicionar</i></button>
				</div>
		</form>


	</div>
</div>