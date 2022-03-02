<?php
	
	include("../conexao/bd.php");
	$id = $_GET['valorid'];
	
	$query = "delete from `agenda` where `id`='$id'";

	if($mysqli->query($query)){
		echo "Atualizou";
	}else{
		echo "Erro";
	}
	mysqli_close($mysqli);
	header ("location: ../agenda");
?>