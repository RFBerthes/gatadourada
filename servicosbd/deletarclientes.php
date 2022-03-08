<?php
	
	include("../conexao/bd.php");
	$idCliente = $_GET['valorid'];
	
	$query = "delete from `clientes` where `idCliente`='$idCliente'";

	if($mysqli->query($query)){
		echo "Deletou";
	}else{
		echo "Erro";
	}
	mysqli_close($mysqli);
	header ("location: ../clientes");
?>