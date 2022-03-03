<?php
	
	include("../conexao/bd.php");

	$nome = $_POST["nome"];
	$valor = $_POST["valor"];
	
	$query = "INSERT INTO `servicos` (`idServico`, `nomeServico`, `valorServico`) VALUES (NULL, '$nome', '$valor')";
	if($mysqli->query($query)){
		echo "Registrado";
		header ("location: ../financeiro");
	}else{
		echo '<script type="text/javascript">
			alert("Não foi possível cadastrar o serviço! Tente novamente!");
			window.location.href="../financeiro";
			</script>';
	}
?>