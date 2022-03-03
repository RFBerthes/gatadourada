<div class="col-md-12">
	<div class="col-md-10 titulo">Cadastrar Serviço
</div>
<div id="adicionar">
	<form action="<?php echo raiz?>servicosbd/cadastrarserviço.php" method="POST">
		<div class="col-md-6 item">
			<div class="texto">
				Nome:
			</div>
			<input type="text" required name="nome">
		</div>
		<div class="col-md-6 item">
			<div class="texto">
				Valor:
			</div>
			<input type="number" name="valor" placeholder="R$">
		</div>		
		<div class="col-md-12" style="margin-top: 20px; text-align: center">
			<button type="submit" class="botao_adicionar">Adicionar</i></button>
		</div>
	</form>
</div>