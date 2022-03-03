<?php
	
	include("../conexao/bd.php");
	$id = $_GET['valorid'];
	
	$query = "DELETE FROM `servicos` WHERE `servicos`.`idServico` = '$id'";

	if($mysqli->query($query)){
		echo "Excluído";
	}else{
		echo "Erro";
	}
	mysqli_close($mysqli);
	header ("location: ../financeiro");
?>