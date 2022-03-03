<?php
	
	include("../conexao/bd.php");

	$id_cliente = $_POST["idCliente"];
	echo $id_cliente; 

	//Recupera nome cliente para inserir como título
	$query_cliente = "SELECT `nome` FROM `clientes` WHERE `idCliente` = '$id_cliente' ";
	$resultado_cliente = $mysqli->query($query_cliente);
	$row = $resultado_cliente->fetch_assoc();
	$nome_cliente = $row["nome"];

	$observacao = $_POST["observacao"];
	$servico = $_POST["servico"];
	$adicional = $_POST["adicional"];
	$forma_pagamento = $_POST["forma_pagamento"];
	
	echo $servico; 
	echo $adicional;
	//Data
	$start = $_POST["start"];
	$hr_inicio = $_POST["hr_inicio"];
	$hr_fim = $_POST["hr_fim"];

	//usa explode pra explodir o que tem na variavel
	$dt_inicio = explode("/", $start);
	//pega as pocicoes e colocam dentro de suas respectiveis variaveis
	$ano = $dt_inicio[2];
	$mes = $dt_inicio[1];
	$dia = $dt_inicio[0];
	//acrescenta :00 (segundos) no valor de horas
	$hr_inicio = "$hr_inicio".":00";
	$hr_fim = "$hr_fim".":00";

	//concatena a data no novo estilo com traços mais a hora virando datetime
	$novostart = "$ano"."-"."$mes"."-"."$dia"." "."$hr_inicio";
	$end = "$ano"."-"."$mes"."-"."$dia"." "."$hr_fim";	
	
	$query = "INSERT INTO `agenda` (`idAgendamento`, 
	`title`, 
	`start`, 
	`end`, 
	`url`, 
	`allDay`, 
	`status`, 
	`color`, 
	`observacao`, 
	`valor`, 
	`forma_pagamento`, 
	`clientes_id`, 
	`servicos_idServico`, 
	`adicionais_idAdicionais`) 
	VALUES 	(NULL, 
	'$nome_cliente', 
	'$novostart', 
	'$end', 
	'', 
	'', 
	'1', 
	'', 
	'$observacao', 
	'', 
	'$forma_pagamento', 
	'$id_cliente', 
	'$servico', 
	'$adicional');";


	echo $servico; 
	echo $adicional;
	echo $nome_cliente; 
	echo $forma_pagamento; 
	echo $end; 
	echo $forma_pagamento; 
	echo $hr_inicio; 
	echo $hr_fim; 
	if($mysqli->query($query)){

		$ultimo_id = mysqli_insert_id($mysqli);
		$url = "agenda/editar/"."$ultimo_id";

		//Calculo total SQL
		$query_total = "SELECT (valorServico + valorAdicional) AS total
		FROM agenda
		JOIN servicos
		ON agenda.servicos_idServico = servicos.idServico
		JOIN adicionais
		ON agenda.adicionais_idAdicionais = adicionais.idAdicional
		WHERE idAgendamento = '$ultimo_id'";

		$resultado_total = $mysqli->query($query_total);
		$row = $resultado_total->fetch_assoc();
		$total = $row["total"];

		//Inserindo total
		$query = "UPDATE `agenda` SET `url`='$url', `valor`='$total' WHERE `idAgendamento`='$ultimo_id'";
		$mysqli->query($query);
		echo "Inseriu";	

		mysqli_close($mysqli);



	header ("location: ../agenda");	
	
	}else{
		echo '<script type="text/javascript">
			alert("Não foi possível adicionar a consulta! Tente novamente!");
			window.location.href="../agenda/adicionar";
			</script>';
	}
