<div class="col-md-12">
	<div class="col-md-10 titulo">Editar Serviço</div>
	<?php

	$id = $atual[2];

	$query = "SELECT * FROM `servicos` WHERE idServico='$id'";

	$result = $mysqli->query($query);
	$row = $result->fetch_assoc();
	$nome = $row["nomeServico"];
	$valor = $row["valorServico"];

	?>

	<div id="editar">
		<form action="<?php echo raiz ?>servicosbd/editarservico.php" method="POST">
			<input type="hidden" name="idaltera" value="<?php echo $id; ?>">
			<div class="col-md-6 item">
				<div class="texto">Nome:</div>
				<input type="text" required name="nome" value="<?php echo $nome; ?>">
			</div>
			<div class="col-md-6 item">
				<div class="texto">Valor:</div>
				<input type="number" name="valor" placeholder="R$" value="<?php echo $valor; ?>">
			</div>
				<div class="col-md-12" style="margin-top: 20px; text-align: center">
					<button type="submit" class="botao_adicionar">Atualizar</i></button>
				</div>
		</form>
	</div>