<?php

include("../conexao/bd.php");

//recupera id agendamento para alteração
$idAgendamento = $_POST['idAgendamento'];

//recupera id cliente incial
$idClienteAtual = $_POST['idClienteAltera'];
$idClienteNovo = $_POST['idCliente'];

//verifica se teve alteração de cliente

if ($idClienteNovo == $idClienteAtual) {
	$idCliente = $idClienteAtual;
}else{
	$idCliente = $idClienteNovo;
};

echo "idCliente<br>";
echo "$idCliente<br>";
//Recuperando nome do Cliente selecionado
$queryNome = "SELECT `nomeCliente` FROM clientes WHERE `idCliente` = '$idCliente'";
$resultNome = $mysqli->query($queryNome);
$rowNome = $resultNome->fetch_assoc();
$nomeCliente = $rowNome['nomeCliente'];
echo "nomeCliente<br>";
echo "$nomeCliente<br>";

//Recebendo dados pelo metodo POST
$start = $_POST["start"];
$url = $_POST["url"];
$hr_inicio = $_POST["hr_inicio"];
$hr_fim = $_POST["hr_fim"];
$id_servico = $_POST["servico"];
$id_adicional = $_POST["adicional"];
$observacao = $_POST["observacao"];
$status = 1;
$forma_pagamento = $_POST["forma_pagamento"];

//usa explode pra explodir o que tem na variavel
$dt_inicio = explode("/", $start);
//pega as pocicoes e colocam dentro de suas respectiveis variavei
$ano = $dt_inicio[2];
$mes = $dt_inicio[1];
$dia = $dt_inicio[0];
//acrescenta :00 (segundos) no valor de horas
$hr_inicio = "$hr_inicio" . ":00";
$hr_fim = "$hr_fim" . ":00";
//concatena a data no novo estilo com traços mais a hora virando datetime
$start = "$ano" . "-" . "$mes" . "-" . "$dia" . " " . "$hr_inicio";
$end = "$ano" . "-" . "$mes" . "-" . "$dia" . " " . "$hr_fim";

$query = "UPDATE `agenda` SET `title` = '$nomeCliente',
`start` = '$start',
`end` = '$end',
`url` = '$url',
`observacao` = '$observacao',
`clientes_id` = '$idCliente',
`servicos_idServico` = '$id_servico',
`adicionais_idAdicionais` = '$id_adicional' WHERE `agenda`.`idAgendamento` = '$idAgendamento' ";


if ($mysqli->query($query)) {

	//Calculo total SQL
	$query_total = "SELECT (valorServico + valorAdicional) AS total
	FROM agenda
	JOIN servicos
	ON agenda.servicos_idServico = servicos.idServico
	JOIN adicionais
	ON agenda.adicionais_idAdicionais = adicionais.idAdicional
	WHERE idAgendamento = '$idAgendamento'";

	$resultado_total = $mysqli->query($query_total);
	$row1 = $resultado_total->fetch_assoc();
	$total = $row1["total"];

	//Inserindo total
	$query = "UPDATE `agenda` SET `valor`='$total' WHERE `idAgendamento`='$idAgendamento' ";
	$mysqli->query($query);

	echo "Atualizou";
	mysqli_close($mysqli);

} else {
	echo "Erro";
	mysqli_error($mysqli);
}
header("location: ../agenda");
