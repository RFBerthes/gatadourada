<?php
	
	include("../conexao/bd.php");
	$id = $_GET['valorid'];
	
	$query =  "DELETE FROM `agenda` WHERE`idAgendamento` = '$id' ";

	if($mysqli->query($query)){
		echo "Deletou";
	}else{
		echo "Erro";
	}
	mysqli_close($mysqli);
	header ("location: ../agenda");
?>
