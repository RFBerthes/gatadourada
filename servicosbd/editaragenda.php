<?php
	
	include("../conexao/bd.php");
	$idAltera = $_POST['idaltera'];
	$nome_cliente = $_POST["nomeCliente"];
	$id_cliente = $_POST["idCliente"];


	$start = $_POST["dt_inicio"];
	$end = $_POST["dt_fim"];
	$hr_inicio = $_POST["hr_inicio"];
	$hr_fim = $_POST["hr_fim"];
	$id_servico = $_POST["servico"];
	$id_adicional = $_POST["adicional"];
	$observacao = $_POST["observacao"];
	$status=1;
	$valor = $_POST["valor"];
	$forma_pagamento = $_POST["forma_pagamento"];


	//usa explode pra explodir o que tem na variavel
	$dt_inicio = explode("/", $start);
	//pega as pocicoes e colocam dentro de suas respectiveis variaveis
	$ano = $dt_inicio[2];
	$mes = $dt_inicio[1];
	$dia = $dt_inicio[0];
	//acrescenta :00 (segundos) no valor de horas
	$hr_inicio = "$hr_inicio".":00";
	//concatena a data no novo estilo com traços mais a hora virando datetime
	$start = "$ano"."-"."$mes"."-"."$dia"." "."$hr_inicio";

	$hr_fim = "$hr_fim".":00";
	$end = "$ano"."-"."$mes"."-"."$dia"." "."$hr_fim";

	$query = "UPDATE `agenda` SET 
	`title` = '$nome_cliente', 
	`start` = '$start', 
	`end` = '$end', 
	`status` = '$status'
	`observacao` = '$observacao', 
	`valor` = '$valor', 
	`forma_pagamento` = '$forma_pagamento', 
	`servicos_idServico` = '$id_servico', 
	`adicionais_idAdicionais` = '$id_adicional' 
	WHERE `agenda`.`idAgendamento` = '$idAltera'";


	if($mysqli->query($query)){
		echo "Atualizou";
	}else{
		echo "Erro";
	}
	mysqli_close($mysqli);
	header ("location: ../agenda");
