<?php
	
	include("../conexao/bd.php");
	
	$id = $_POST['idaltera'];
	$nome = $_POST["nome"];
	$valor = $_POST["valor"];
	
	$query = "UPDATE `servicos` SET `nomeServico` = '$nome', `valorServico` = '$valor' WHERE `idServico` = '$id'";
	if($mysqli->query($query)){
		echo "Atualizado";
		header ("location: ../financeiro");
	}else{
		echo '<script type="text/javascript">
			alert("Não foi possível cadastrar o serviço! Tente novamente!");
			window.location.href="../financeiro";
			</script>';
	}
?>